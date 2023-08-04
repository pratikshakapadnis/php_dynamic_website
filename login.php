<?php 
$showalert=false;
$showerror=false;
 if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'projectconnectioncodeforlogin.php';
$password=md5( $_POST["Password"]);
//$password=$_POST["Password"];
$mobileno= $_POST["MobileNo"];

$sql="SELECT*FROM registrationform WHERE MobileNo='$mobileno' AND Password='$password'";
 //$sql="SELECT*FROM registrationform WHERE MobileNo='$mobileno'";

 $result = mysqli_query($conn, $sql);
 $num=mysqli_num_rows($result);

if ($num==1){
  //while($row=mysqli_fetch_assoc($result)){
    //if(password_verify($password, $row['Password'])){
       $login=true;
       session_start();
       $_SESSION['loggedin']=true;
       $_SESSION['MobileNo']=$mobileno;
    
       header("location:welcome.php");
      // $showalert=true;
    // }
     //else{
    //echo"invalid credentials";
     //}
    //}

 die();
}
else{
echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> please enter right password or username.
    </div> ';
}$conn->close();
}
?>
<?php include'header.php';?>
    <title>login</title>
  </head>
  <body>
    <img class ="img" src="image.jpg" alt="puneunniversity">
    <?php require 'projectconnectioncodeforlogin.php' ?>
    
     <?php
     echo $showalert;
     if($showalert){
    echo " <div class='alert alert-success alert-dismissible fade show'role='alert'>
        <strong>Success!</strong> signup completed
        <button type='utton' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div> ";
    }
    if($showerror){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.'signup failed'.'
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
     }
  ?>
 
  
<div class="container col-md-3">
<span>
        <marquee> <h3>This is a registration form for library managment </h3></marquee>
    </span>
<form action="/php-practice/login.php" method="post">
    <h1>  ....Login ....</h1>
    <div class="form-group">
            <label for="MobileNo">Username</label>
            <input type="phone" class="form-control" id="MobileNo" name="MobileNo" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="text" class="form-control" id="Password" name="Password" aria-describedby="emailHelp"required>
            <small id="password" class="form-text text-muted">please enter password here</small>
        </div>  
        <button type="submit" class="btn btn-primary">Login</button>
     </form>

</div>
    <?php include'footer.php';?>