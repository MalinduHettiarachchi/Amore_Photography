<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve login data from the form
$username = $_POST['uidd'];
$password = $_POST['passwood'];

// Check login data against the database
$sql = "SELECT * FROM dataa WHERE userid='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Successful login
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
                <img src="Am.jpg" class="logo">
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
                    <h1>Amore</h1>
                    <h2>P H O T O G R A P H Y</h2>
                    <p></p>
                    
                </div>
                <div class="col">
                    <div class="card c1">
                        <h5>Weddings</h5>
                    </div>
                    <div class="card c2">
                        <h5>Weddings</h5>
                    </div>
                    <div class="card c3">
                        <h5>Weddings</h5>
                    </div>
                    <div class="card c4">
                        <h5>Weddings</h5>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
   <?php
} else {
    // Invalid login
    echo "Invalid login credentials.";
}

// Close the database connection
$conn->close();
?>
