<?php
// include 'config.php'; // Include the database configuration file

// // Check if form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Get the form data
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $mobile = $_POST['mobile'];
//     $comment = $_POST['comment'];
//     // $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

//     // Prepare and bind
//     $stmt = $conn->prepare("INSERT INTO users (username, email, mobile, comment) VALUES (?, ?, ?, ?)");
//     $stmt->bind_param("sss", $username, $email, $mobile, $comment);

//     // Execute the statement
//     if ($stmt->execute()) {
//         echo "New record created successfully";
//         header('location:index.php');
//     } else {
//         echo "Error: " . $stmt->error;
//     }

//     $stmt->close();
//     $conn->close();
// } else {
//     echo "Invalid request method";
// }

$con = mysqli_connect('localhost','root');

if($con){
    echo("Connection Successful");
}
else{
    echo("Connection Invalid");
}
mysqli_select_db($con, 'userdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata(user, email, mobile, comment) values('$user', '$email', '$mobile', '$comment')";

echo("$query");
mysqli_query($con, $query);
header('location:index.php');

?>
