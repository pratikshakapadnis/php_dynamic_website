<?php 
$showalert=true;
 $showerror=true;
 if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'projectconnectioncode.php';
$firstname= $_POST["FirstName"];
$lastname= $_POST["LastName"];
$password=md5( $_POST["Password"]);
$mobileno= $_POST["MobileNo"];
$address= $_POST["Address"];
$city= $_POST["City"];
$pincode= $_POST["PinCode"];

$sql="INSERT INTO `registrationform` (`FirstName`, `LastName`, `Password`, `MobileNo`, `Address`, `City`, `PinCode`, `current_time`) VALUES ('$firstname', '$lastname', '$password', '$mobileno', '$address', '$city', '$pincode', current_timestamp())";
 $result = mysqli_query($conn, $sql);
        if ($result){
header("location:login.php");
echo"signup done";

      
  die();
}

//if($firstname=$_POST[""]){}

else{
    $showerror="passwords do not match";
} 
   $conn->close();
}
?>
<?php include'header.php';?>
 

    <img class ="img" src="image.jpg" alt="puneunniversity">
    <?php require '_nav.php'?>

<div class="container col-md-3">
    <span>
        <marquee> <h3>This is a registration form for library managment </h3></marquee>
    </span>
<h1>**Signup here**</h1>
<form action="/php-practice/signup.php" method="post">
          <div class="form-group">
            <label for="FirstName">FirstName</label>
            <input type="text" class="form-control" id="FirstName" name="FirstName" aria-describedby="emailHelp"required>
            </div>
        <div class="form-group">
            <label for="LastName">LastName</label>
            <input type="text" class="form-control" id="LastName" name="LastName" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="text" class="form-control" id="Password" name="Password" aria-describedby="emailHelp"required>
            <small id="password" class="form-text text-muted">please enter password here</small>
        </div>
        <div class="form-group">
            <label for="MobileNo">MobileNo</label>
            <input type="MobileNo" class="form-control" id="MobileNo" name="MobileNo" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" class="form-control" id="Address" name="Address" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="City">City</label>
            <input type="text" class="form-control" id="City" name="City" aria-describedby="emailHelp">
            
        </div><div class="form-group">
            <label for="PinCode">PinCode</label>
            <input type="text" class="form-control" id="PinCode" name="PinCode" aria-describedby="emailHelp">
            </div>
        
         
        <button type="submit" class="btn btn-primary">Submit </button>
     </form>

</div>
   <?php include'footer.php';?>