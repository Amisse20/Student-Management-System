

<html>
<head>
  <title>Home-Department of Computer Applications</title>
  <link rel="shortcut icon" href="./Images/msu.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icon" href="Images/msu.png" type="image/x-icon">
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <!-- css style go to end here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

#parent{
  display: flex; 
   flex-direction: column;
  height: 100%;
} 
.col{ 
  color: white; 
  flex: 50%; 
} 
.col:nth-child(2){ 
  background-color: #33D1FF 
} 
</style>
<body>
  <!-- first division-->
<div id="parent"> 
  <div class="col">
    <img src="Images/login-background.jpeg" style="width: 1430px;">
  <h1 style="color: black; text-align: center;">Maharaja Sayajirao University of Baroda</h1>
    <h3 style="color: red; text-align: center;">Department of Computer Applications</h3>
  </div> 



<!-- Second division-->

  <div class="col" >
     <div class="login-padding text-center mb-3 mt-4">
                <h2 class="text-center text-white"> Student Login</h2>
                <form class="p-1" action="Login/student_login.php" method="POST">
                    <div class="form-group">
                        <label><h6>Enter Your PRN:</h6></label>
                        <input type="text" name="PRN_number" placeholder="Enter PRN Number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label><h6>Enter Password:</h6></label>
                        <input type="Password" name="Password" placeholder="Enter Password" class="form-control border-bottom" required>
                        <!-- <?php echo $message; ?> -->
                    </div>
                    <div class="form-group text-center mb-3 mt-4">
                        <input type="submit" name="btnlogins" value="LOGIN">
                    </div>
                </form>
                <a style="color: white; text-align:center;" href="adminindex.php">Switch to admin</a>
            </div>
  </div> 
</div> 
</body>
</html>
