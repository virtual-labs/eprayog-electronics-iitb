<? require "../LocalSettings.php"; ?>
<? $page_title="e-Prayog, Virtual Lab (Electronics), IIT Bombay";  ?>

<? 
if(isset($_SESSION['username'])){
  header("Location: ".$URLRoot);
  exit();
}

if(isset($_POST['username'])){
  $q = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = ? AND password = ?");
  $q->execute(array($_POST['username'],md5($salt.$_POST['password'])));
  if($q->fetchColumn()>0){
    $_SESSION['username']=$_POST['username'];
    header("Location: ".$URLRoot);
    exit();
  } else {
    $login_error=1;
  }
}
?>

<? include $header; ?>
<div width="40%">
  <h2>Login for e-Prayog Virtual Lab (Electronics)</h2>
  <form action="login.php" method="post">
  <table><tbody>
  <tr><td>Username</td><td><input type="text" name="username" /></td></tr>
  <tr><td>Password</td><td><input type="password" name="password" /></td></tr>
  </table>
    <? if(isset($login_error)){ ?>
    <span class="error">Login failed. Please check your username and password.</span><br />
    <? } ?>
     <input type="submit" name="submit" value="Login" />
  </form>
  New users may <a href="signup.php">signup</a>.
</div>

<? include $footer; ?>
