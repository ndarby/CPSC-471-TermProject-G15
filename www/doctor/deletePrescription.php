<?php
session_start();
if(!isset($_SESSION['login'])){
	header("Location: /index.php");
}
include '../db_connection.php';
// vars from form
$DoctorID = $_GET["DocID"];
$PatientID = $_GET["PatientID"];
$MedicineID = $_GET["MedID"];

// Create connection
$con=OpenCon();
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $sql = "DELETE FROM prescribed WHERE PPRESC_UserID_fk= $PatientID AND MEDICINE_MedicineID = $MedicineID;";
  
    if (!mysqli_query($con,$sql))
    {
    die('Error: ' . mysqli_error($con));
    }
mysqli_close($con);
echo 'Prescription Deleted';
echo '<br> <a href="viewPatientList.php">Back</a> <br>';
?>