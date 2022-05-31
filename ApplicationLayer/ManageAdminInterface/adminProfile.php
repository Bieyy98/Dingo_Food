<?php
// Author : NABILAH
// Page to display a single customer profile
require_once '../../libs/adminSession.php';
require_once '../../BusinessServiceLayer/controller/adminProfileController.php';
$admin = new adminProfileController();
$data = $admin->admin();
$name = $_SESSION['admin_username'];
?>

<!DOCTYPE html>
<html lang="en" >

<head>

  <script language="javascript" type="text/javascript">
  window.history.forward();
  </script>
  
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300'>

    <meta name="author" content="">

    <title>DINGO FOOD - Food Ordering System (FOS)</title>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
        rel="stylesheet"  type='text/css'>
    </link>
        <link href="/Dingo_Food/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Dingo_Food/css/home.css">
    <link rel="stylesheet" href="/Dingo_Food/css/profile.css">

<!-- STYLE -->
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("/Dingo_Food/img/dingoLogo4.jfif");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-image2 {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/Dingo_Food/img/wall4.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

ul {
    list-style-type: none;

}


/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 0 10%;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>

</head>

<body>
<?php
require_once '../../libs/database.php';

 
  ?>

  <!-- HEADER DINGO -->

  <div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:70px">D I N G O F O O D</h1>
    <p style="color: black">Everything's Fresh Here at DingoFood</p><br>
  </div>
</div>

<!-- NAVBAR -->

  <div id="menu-nav">
  <div style="list-style-type: none;" id="navigation-bar">
    <ul>
      <li><a href="/Dingo_Food/ApplicationLayer/ManageAdminInterface/adminHome.php"><i class="fa fa-home"></i><span>Home</span></a></li>
      <li><a href="/Dingo_Food/ApplicationLayer/ManageMenuInterface/listMenu.php"><i class="fa fa-list"></i><span>List</span></a></li>
      <li><a href="/Dingo_Food/ApplicationLayer/ManageMenuInterface/addMenu.php"><i class="fa fa-plus"></i><span>New Menu</span></a></li>
      <li><a href="/Dingo_Food/ApplicationLayer/ManageRefundInterface/refundAdmin.php"><i class="fa fa-money"></i><span>Refund</span></a></li>
      <li><a href="/Dingo_Food/ApplicationLayer/ManageReportInterface/indexAdmin.php"><i class="fa fa-bar-chart"></i><span>Report</span></a></li>
    <li><a href="/Dingo_Food/ApplicationLayer/ManageAdminInterface/adminLogout.php" onclick="return confirm('Are you sure you want to sign out?')"><i class="fa fa-sign-out"></i><span>Sign Out</span></a></li>
    <a href="/Dingo_Food/ApplicationLayer/ManageAdminInterface/adminProfile.php" id="topnav-right"><i class="fa fa-user"></i><span>Hello <?php echo $name; ?> </span></a>
    </ul>

  </div>
  
</div>

<!-- PROFILE -->
<div class="container">
    <div id="customer-profile">
      <div id="customer-nav" class="text-center">
        <!--<div class="profile-img border w-100">
        <img class="profile-img-backdrop" src="../../../uploads/<?php echo $data['image'] ?>" alt="" srcset="">
          <img class="profile-img-real" src="../../../uploads/<?php echo $data['image'] ?>" alt="" srcset="" onerror="this.src='../../../uploads/default.png';">
        </div>-->
        <div class="border w-100">
          <h5 class=" mt-2">Hello, <?php echo $name  ?></h5>
        </div>
        <div class="border w-100 py-2">
          <a class="cust-nav-active" href="adminProfile.php"><i class="fa fa-user" aria-hidden="true"></i>
            Admin Profile</a>
        </div>
        <div class="border w-100 py-2">
          <a class="cust-nav" href="adminProfileEdit.php"> <i class="fa fa-pencil" aria-hidden="true"></i>
            Admin Edit Profile</a>
        </div>
      </div>
      <div id="customer-details" class="mx-4">
        <h4><i class="fa fa-user"></i>&nbsp Admin Profile</h4>
        <div id="customer-details-info" class=" mt-3">
          <p>Full name: <strong><?php echo $data["admin_name"]; ?></strong></p>
          <p>Email Address: <strong><?php echo $data["admin_email"] ?></strong></p>
          <p>Phone Number: <strong><?php echo $data["admin_phoneNo"] ?></strong></p>
        </div>
      </div>
    </div>

  </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <!-- Footer -->
    <footer class="p-4 mb-0 bg-secondary">
     <div class="container">
       <p class="m-0 text-center text-white">&copy; 2021 DINGO FOOD. All Rights Reserved</p>
     </div>
  </footer>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  
   <!-- Bootstrap core JavaScript -->
    <script src="/Dingo_Food/vendor/jquery/jquery.min.js"></script>
    <script src="/Dingo_Food/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/Dingo_Food/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="/Dingo_Food/js/jqBootstrapValidation.js"></script>
    <script src="/Dingo_Food/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/Dingo_Food/js/agency.min.js"></script>



</body>

</html>
