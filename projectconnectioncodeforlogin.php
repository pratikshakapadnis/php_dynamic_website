<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "projectdatabase";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
echo " ";
}
else
{
    die("Connection failed: " . mysqli_connect_error());
}
// $sql = "DELETE FROM registrationform ";
// if (mysqli_query($conn, $sql)) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . mysqli_error($conn);
// } 
?>
<!-- <nav class="navbar navbar-expand-lg bg-body-seconary navbar-black bg-auto col-md-10">
  <div class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="/php-practice"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/php-practice/welcome.php"><h2>Login</h2></a>
        </ul>
      </form>
    </div>
  </div>
</div>
</nav> -->