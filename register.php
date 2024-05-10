<?php
include 'conn.php';
if(isset($_POST['reg']))
{
    $name = $_POST['na'];
    $phoneu = $_POST['tn'];
    $email = $_POST['em'];
    $uid = $_POST['ui'];
    $pass = $_POST['pw'];

    //$sqll="INSERT INTO register(name,phone,email,username,password) values('$name','$phoneu','$email','$uid','$pass')";
    //$result=mysqli_query($conn,$sqll);
    $sqll = "INSERT INTO register (name, phone, email, username, password) VALUES ('$name', '$phoneu', '$email', '$uid', '$pass')";
    $result = mysqli_query($conn, $sqll);
    if($result == TRUE)
    {
?>
       <html>
        <body>
            <h1>yyyyy</h1>
        </body>
       </html>
<?php
    }
    else
    {
        echo "Error: " . $sqll . "<br>" . $conn->error;
    }
    mysqli_close($conn);
}
?>
