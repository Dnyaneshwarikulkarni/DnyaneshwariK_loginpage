

<?php
    // Establish database connection
    $conn = mysqli_connect("localhost", "root", "", "website login");
    
    // Check if the login button is clicked
    if(isset($_POST['login_btn'])) {
        // Retrieve username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Query to select user with given username and password
        $sql = "SELECT * FROM logindetails WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        
        // Check if a row is returned
        if(mysqli_num_rows($result) == 1) {
            // Redirect to login.html if username and password match
            header('location: login.html');
            exit;
        } else {
            // Incorrect username or password
            echo "Incorrect username or password";
        }
    }
?>

