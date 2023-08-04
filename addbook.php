<?php 
$showalert=true;
 $showerror=true;
 if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'projectconnectioncode.php';
$bookname= $_POST["bookname"];
$price= $_POST["price"];
$bookauthor= $_POST["bookauthor"];

$sql="INSERT INTO `booklibrary` (`bookname`, `price`, `bookauthor`, `dateandtime`) VALUES ('$bookname', '$price', '$bookauthor', current_timestamp())";
 $result = mysqli_query($conn, $sql);

 
        if ($result){

header("location:welcome.php");
echo " book added successfully";
}
die();

  // $conn->close();
}
?>
<?php include'header.php';?>

    <img class ="img" src="image.jpg" alt="puneunniversity">
    <?php require '_nav.php'?>

<div class="container col-md-3">
    <h1>Add Book Here</h1>
   <form action="addbook.php" method="post">
        <div class="form-group">
            <label for="bookname">bookname</label>
            <input type="text" class="form-control" id="bookname" name="bookname" aria-describedby="emailHelp"required>
        </div>
        <div class="form-group">
            <label for="Price">Price</label>
            <input type="text" class="form-control" id="currency" name="price" aria-describedby="emailHelp">
        
        </div>
        <div class="form-group">
            <label for="bookauthor"> bookauthor</label>
            <input type="text" class="form-control" id="bookauthor" name="bookauthor" aria-describedby="emailHelp">
        </div>
         
        <button type="submit" class="btn btn-primary">Add Book </button>
        <button type="button" class="btn btn-success" onclick="history.go(-1)" action ="welcome.php">Back</button>
     </form>
     </div>
    
