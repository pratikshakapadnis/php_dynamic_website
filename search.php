
<?php include'header.php';?>
	  <img class ="image" src="image.jpg">
<div class="search" id="searchresult ">
  
<?php

//$con = new PDO("mysql:host=localhost;dbname=projectdatabase",'root','');

$servername = "localhost";
$username = "root";
$password = "";
$database = "projectdatabase";

$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	//$sth = $con->prepare("SELECT * FROM `booklibrary` WHERE bookname LIKE '%$str%' OR bookauthor LIKE '%$str%' OR bookno LIKE '%$str%' OR price LIKE '%$str%' LIMIT 3");

	$sql = "SELECT * FROM `booklibrary` WHERE bookname LIKE '%$str%' OR bookauthor LIKE '%$str%' OR bookno LIKE '%$str%' OR price LIKE '%$str%' LIMIT 3";

$result= mysqli_query($conn,$sql);
	//$sth->setFetchMode(PDO:: FETCH_OBJ);
	//$sth -> execute();
	
	//if($row = $sth->fetch())
if($result){
	if(mysqli_num_rows($result)>0){
	
		?>

		<br><br><br>
		<div>
		<table class="table-dark table-striped ">
			<tr>
				<th class= "table-dark">book no</th>
				<th>bookname</th>
				<th>price</th>
				<th>bookauthor</th>
				<th>dateandtime</th>

			</tr>
			<?php $row=mysqli_fetch_assoc($result); ?>
			<tr>
				<td><?php echo $row['bookno']; ?></td>
				<td><?php echo $row['bookname']; ?></td>
				<td><?php echo $row['price']; ?></td>
				<td><?php echo $row['bookauthor']; ?></td>
				<td><?php echo $row['dateandtime']; ?></td>
			</tr>

		</table>
		<br>
		<br>
		</div>
		<form method="post" action="/php-practice/search.php">
		<div class="input-group col-md-12 " type="container" id="tablebtn">
          <button type="button" class="btn btn-success" onclick="history.go(-1)"  name ="Back" action ="/search.php">Back</button>
          

      </div>
  </form>

<?php 

 die();
}
else{
echo "<h2> No matches found</h2>";
}
}

}
?>
<form method="post" action="/php-practice/search.php">
		<div class="input-group col-md-12" type="container">
          <button type="button" class="btn btn-success" onclick="history.go(-1)"  name ="Back" action ="/search.php">Back</button>
          

      </div>
  </form>

</body>
</html>
