<head>
  <!-- charset and meta stuff -->
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap css, ajax, bootstrap js, Google fonts lobster, and jquery  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- my css and js sheets -->
  <link rel="stylesheet" type="text/css" href="header.css">
  <script type="text/javascript" href="activenav.js"></script>
  <!-- title/image -->
  <title>Renzix</title>
  <img id="background-img" src="philmount.jpg" alt="Philmount image" class="img-responsive col-md-12" />
  <!-- Navbar -->
  <nav class="navbar navbar-inverse col-md-12">
    <ul class="nav navbar-nav">
      <li class="home"><a class="navbar-brand" href=index.php>Home</a></li>
      <li class="projects"><a class="navbar-brand" href=projects.php>Projects</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href=#><span class="caret"></span></a>
        <ul class="projects dropdown-menu" role="menu">
          <li class="linux"><a href=linux.php>Renux</a></li>
          <li class="websites"><a href=website.php>Websites</a></li>
        </ul>
      </li>
      <li class="about"><a class="navbar-brand" href=about.php>About</a></li>
      <li class="contact"><a class="navbar-brand" href=contact.php>Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right no-login">
      <li class="signup"><a href=# data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="login"><button class="btn navbar-btn" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </nav>
  
  <!-- Login and Signup -->
  <?php include "login.php" ?> 
  <?php include "signup.php" ?> 

</head>