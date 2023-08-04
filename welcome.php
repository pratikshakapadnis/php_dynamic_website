<?php
include 'projectconnectioncode.php';

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
header("location:login.php");
exit;
}
?>

<?php include'header.php';?>
   
    <?php require '_nav.php' ?>
     <img class ="img" src="image.jpg" alt="puneunniversity">
    
<form method="post" action="/php-practice/search.php">
    
 <label>Search here </label>
    <div class="input-group col-md-12" id="container">
        <br>
          <input type="text" name="search"> <br><br>
          <input type="submit" name="submit" >
      
    </div>
    
</form>
    <div class="container my-3">
        <span>
        <marquee> <h3> NOTE - Library Opens at 8.00 AM and Close at 8.00 PM</h3></marquee>
        </span>
   
            <br>
  <form>
<table class="table table-bordered border-primary">
    <thead class="table-dark">
      <tr>
      <th scope="col">bookno</th>
      <th scope="col">bookname</th>
      <th scope="col">price</th>
      <th scope="col">bookauthor</th>
      <th scope="col">dateandtime</th>
      </tr>
    </thead>
     <tbody>
       <?php
       $sql="SELECT * FROM booklibrary";
        $result=mysqli_query($conn,$sql);
       
       $bookno=0;
        while($row=mysqli_fetch_assoc($result)){
          ++$bookno;
       //print_r($row);// to check data pass or not
        echo"<tr>
         <td>".$bookno."</td>
        <td>".$row['bookname']."</td>
        <td>".$row['price']."</td>
        <td>".$row['bookauthor']."</td>
        <td>".$row['dateandtime']."</td>
         </tr>";

          }
        ?>

  </tbody>
 </table>
</div>
</form>
<?php include'footer.php';?>


    