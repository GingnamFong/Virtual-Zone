<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Video Game Library</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">

</head>

<body>

    <!-- Navbar-->
  <a href="Homepage.php"><img src="img/logo1.png" class="logo"></a>
  <section class="nav">
    <nav>

      <div class="nav-links" id="navLinks">
        <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
        <ul>
          <li><a href="Homepage.php">Home</a></li>
          <li><a href="library.php">Bibliotheek</a></li>
          <li><a href="Contact.php">Contact</a></li>
          <a href="bestellen.php"><img class="cartlogo" src="img/cart.png" alt="cart"></a>
          <a href="login.php"><img class="profilelogo" src="img/Profile.png" alt="profilelogo"></a>
        </ul>
      </div>
    </nav>
  </section>

    <!-- Einde Navbar-->

    <section class="nav2">
        <nav>
        <input id="hamburger" type="checkbox" />
        <label class="hamburger_btn" for="hamburger">
        <span></span>
        </label>
        <ul class="hamburger_menu">
        <li><a href="Homepage.php">Home</a></li>
        <li><a href="library.php">library</a></li>
        <li><a href="Contact.php">Contact</a></li> </ul>
        
        </nav>
    <section class="nav2">