<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'service');
	$name = "";
    $phone_number = "";
    $email = " ";
	$address = "";
    $age = "";
    $location = ""; 
    
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $role = $_POST['role'];
    $rating = $_POST['rating'];
    $source = $_POST['source'];
    $prefers = $_POST['prefer'];
    $pre = '';
    $spices = $_POST['spices'];
    $dryfruits = $_POST['dryfruits'];
    $feedback = $POST['feedback'];

    foreach($prefers as $prefer)  
    {  
      $pre .= $prefer.",";  
    } 
    $sql = "INSERT INTO service  VALUES ('$name',
        '$email','$phone_number','$address','$age' ,'$location' ,'$role' ,'$rating','$source' ,'$pre','$spices','$dryfruits','$feedback')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";
            header('location: servay.php');
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
}
?>