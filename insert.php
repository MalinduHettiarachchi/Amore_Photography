<?php
include 'cone.php';
if(isset($_POST['reg']))
{
    $name=$_POST['na'];
    $phoneu=$_POST['tn'];
    $email=$_POST['em'];
    $uid=$_POST['ui'];
    $pass=$_POST['pw'];

    $sqll="INSERT INTO dataa(name,phonenu,email,userid,password) values('$name','$phoneu','$email','$uid','$pass')";
    $result=mysqli_query($conn,$sqll);
    if($result==TRUE)
    {
        ?>
        <html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?
        family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="main.html">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="story.html">STORIES</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                    </ul>
                </nav>
                <!--<img src="menuicon.png" class="menuicon">-->
            </div>
            <div class="row">
                <div class="col">
                    <h1>Thanks for joining us!</h1>
                    <p></p>
                    
                    
                </div>
            </div>
        </div>
    </body>
</html>
        </html>
        <?php
    }
    else
    {
        echo "Error".$sqll."<br>".$con->error;
    }
    mysqli_close($conn);
}
?>