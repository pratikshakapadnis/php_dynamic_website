 <?php
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
$loggedin=true;
 }
 else{
  $loggedin=false;
 }

 echo'<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/php-practice">Registration Form</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
      
      if(!$loggedin){
        echo '<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/php-practice/signup.php">Signup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/php-practice/login.php">Login</a>
        </li>';
      }
      if($loggedin){
        echo'<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/php-practice/welcome.php">Home</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/php-practice/addbook.php">Add New Book</a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/php-practice/logout.php">Logout</a>
        </li>';
      }
        echo'</ul>
    </div>
  </div>
</nav>';
?>