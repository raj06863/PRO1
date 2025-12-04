<?php
  require('inc/essentials.php');
  session_start();
  if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true){
    redirect('admin_dashboard.php');
  }
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | PARK HOTEL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(90deg, #d4af37, #c79c1d);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .admin-login-card {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }
    .admin-login-card h2 {
      color: #dc3545;
      margin-bottom: 30px;
      text-align: center;
      font-weight: 700;
    }
    .btn-custom {
      background: linear-gradient(90deg, #d4af37, #c79c1d);
      border: none;
      color: white;
      transition: all 0.3s ease;
    }
    .btn-custom:hover {
      background: linear-gradient(90deg, #c79c1d, #a77b0e);
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <div class="admin-login-card">
    <h2>Admin Login</h2>
    <form action="admin_dashboard.php" method="POST">
      <div class="mb-3">
        <label for="adminUsername" class="form-label">Username</label>
        <input name="Username" required type="text" class="form-control" id="adminUsername" name="username" placeholder="Enter username" required>
      </div>
      <div class="mb-3">
        <label for="adminPassword" class="form-label">Password</label>
        <input name="password" required type="password" class="form-control" id="adminPassword" name="password" placeholder="Enter password" required>
      </div>
      <button type="submit" class="btn btn-custom w-100">Login</button>
    </form>
    <p class="mt-3 text-center">
      <a href="index.php" class="text-danger text-decoration-none">Back to Home</a>
    </p>
  </div>

  <?php
    if(isset($_POST['login']))
    {
      $frm_data = filteration($_POST);
      $_query = "SELECT * FROM `admin_cred` WHERE `username`=? AND `password`=?";
      $values = [$frm_data['username'], $frm_data['password']];
      $datatypes = "ss";
      $result = select($_query, $values, $datatypes);
      print_r($result);
      if($result->num_rows == 1)
      {
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminUsername'] = $frm_data['username'];
        redirect('admin_dashboard.php');
        header("location: admin_dashboard.php");
      }
      else{
        echo '<script>alert("Invalid Credentials")</script>';
      }
    }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
