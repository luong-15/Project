<!-- <?php
phpinfo();
?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
  </head>
  <body>
    <?php
          if (isset($_POST['username'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];
          $conn = new mysqli('localhost', 'root', '12345', 'shop');
          $sql = " SELECT * FROM shop.user WHERE username = '$username' ";
          $result = $conn->query($sql)->fetch_assoc();
          print_r( $result );
          $conn -> close();
        }
        ?>
    
    <div class="ring">
      <i style="--clr:#00ff0a;"></i>
      <i style="--clr:#ff0057;"></i>
      <i style="--clr:#fffd44;"></i>
      <div class="login">
        <h2>LOGIN</h2>
        <div class="inputBx" method="post">
          <input type="text" name="username" placeholder="Username" required="">
        </div>
        <div class="inputBx" method="post">
          <input type="password" name="password" placeholder="Password" required="">
        </div>
        <div class="inputBx">
          <input type="submit" value="Sign in" name="login">
        </div>
      <div class="links">
        <a href="index.php" class="fa fa-home" aria-hidden="true"></a>
        <a type="submit" >Signup</a>
      </div>
    </div>
  </div>

</body>
</html>