<?php
include 'functions/helper.php';
session_start();

  $user = [
    'MuratYasar' => [
      'email' => 'muratyasar@mail.com',
      'password' => '12345'
    ],
    'ihsanmelih' => [
      'email' => 'ihsanmelih@mail.com',
      'password' => '54321'
    ],
  ];

  if(get('operation') == 'login') {
    $_SESSION['username'] = post('username');
    $_SESSION['password'] = post('password');

    if(!post('username')){
      $_SESSION['error'] = "Please, enter your user name!";
      header('Location: login.php');
      exit();
    } else if(!post('password')){
      $_SESSION['error'] = "Please, enter your password!";
      header('Location: login.php');
      exit();
    }else{
      if(array_key_exists(post('username'), $user)){
        if($user[post('username')]['password'] == post('password')){
          $_SESSION['login'] = true;
          $_SESSION['user_name'] = post('username');
          $_SESSION['e_mail'] = $user[post('username')]['email'];
          header('Location:index.php');
          exit();
        }else{
          $_SESSION['error'] = 'The user is not found!';
          header('Location:login.php');
          exit();
        }
      }else{
        $_SESSION['error'] = 'The user is not found!';
        header('Location:login.php');
        exit();
      }
    }
  }

  if(get('operation') == 'about'){
    $about = post('about');
    $operation = file_put_contents('db/'.session('user_name').'.txt', htmlspecialchars($about));
    $operation == true ? header('Location:index.php?operation=true') : header('Location:index.php?operation=false');
  }

  if(get('operation') == 'logout'){
    session_destroy();
    
    session_start();  // Yeni mesaj yazmak için oturumu tekrar başlatıyor ve kullanıcıyı login sayfasına yönlendiriyoruz.
    $_SESSION['error'] = 'The session has been ended!';
    header('Location:login.php');
  }

if(get('operation') == 'theme') {
  echo get('color');

  setcookie('color', get('color'), time() + 86400*365);
  // $_LEFT ?? $_RIGHT -----> If $_LEFT exist run $_LEFT, otherwise run $_RIGHT
  header('Location:'.$_SERVER['HTTP_REFERER'] ?? 'index.php');
}