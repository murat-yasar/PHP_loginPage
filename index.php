<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Home</title>
</head>
<body>
  <header>
    <nav>
      <div>
        <h3>Murat Yaşar</h3>
        <ul class="menu-main">
          <li><a href="index.php">HOME</a></li>
          <li><a href="#">PRODUCTS</a></li>
          <li><a href="#">SALES</a></li>
          <li><a href="#">MEMBERS+</a></li>
          <li><a href="#">CONTACT</a></li>
        </ul>
      </div>
      <ul class="menu-members">
        <li><a href="#">SIGN UP</a></li>
        <li><a href="#" class="header-login-a">LOGIN</a></li>
      </ul>
    </nav>
  </header>

  <section class="index-intro">
    <div class="index-intro-bg">
      <div class="wrapper">
        <div class="index-intro-c1">
          <div class="video"></div>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure reprehenderit est aliquid delectus laudantium voluptas laborum excepturi eos dolorum temporibus soluta id atque, quos totam recusandae porro! Sequi, ex ipsam!</p>
        </div>
        <div class="index-intro-c2">
          <h2>We make the <br>professional<br> difference</h2>
          <a href="#">Find it here</a>
        </div>
      </div>
    </div>
  </section>

  <section class="index-login">
    <div class="wrapper">
      <div class="index-login-signup">
        <h4>SIGN UP</h4>
        <p>Don't you have an account yet! Sign up here!</p>
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwdRepeat" placeholder="Repeat Password">
          <input type="email" name="email" placeholder="E-mail">
          <br>
          <button type="submit" name="submit">SIGN UP</button>
        </form>
      </div>
      <div class="index-login-login">
        <h4>LOGIN</h4>
        <p>Don't you have an account yet! Sign up here!</p>
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <br>
          <button type="submit" name="submit">LOGIN</button>
        </form>
      </div>
    </div>
  </section>
</body>
</html>