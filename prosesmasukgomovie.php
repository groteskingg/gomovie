<?php 

include("configgomovie.php"); 
$username = $_POST['username'];
$result = pg_query("SELECT * FROM users WHERE username='$username'"); 

if ( pg_num_rows($result) == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that username doesn't exist!";
    header("location: index.php"); #ini jg bingung php nya
}
else { // User exists
    $user = pg_fetch_assoc($result);

    if ( ($_POST['password'] == $user['pass']) ) {
        
        $_SESSION['username'] = $user['username'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: profile.php?status=sukses");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: signin.php?status=gagal1"); #ini gatau
    }
}
?>