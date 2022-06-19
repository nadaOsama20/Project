<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Books</title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">CSE Bookstore</a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
             
             
              <!-- link to books.php -->
              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
              <!-- link to contacts.php -->
              <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li>
              <!-- link to shopping cart -->
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
            </ul>
        </div>
      </div>
    </nav>
    
    <div class="container" id="main">  <p class="lead text-center text-muted">The Books</p>
          <div class="row">
                  <div class="col-md-3">
            <a href="book.php?bookisbn=978-0-321-94786-4">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/11.jpg">
            </a>
          </div>
                  <div class="col-md-3">
            <a href="book1.php?bookisbn=978-0-7303-1484-4">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/3.jpg">
            </a>
          </div>
                  <div class="col-md-3">
            <a href="book2.php?bookisbn=978-1-118-94924-5">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/2.jpg">
            </a>
          </div>
                  <div class="col-md-3">
            <a href="book3.php?bookisbn=978-1-1180-2669-4">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/5.jpg">
            </a>
          </div>
         
      </div>
      <div class="row">
                  <div class="col-md-3">
            <a href="book4.php?bookisbn=978-1-44937-019-0">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/13.jpeg">
            </a>
          </div>
                  <div class="col-md-3">
            <a href="book5.php?bookisbn=978-1-44937-075-6">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/14.jpeg">
            </a>
          </div>
                  <div class="col-md-3">
            <a href="book6.php?bookisbn=978-1-4571-0402-2">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/16.jpeg">
            </a>
          </div>
                  <div class="col-md-3">
            <a href="book7.php?bookisbn=978-1-484216-40-8">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/4.jpg">
            </a>
          </div>
         
      </div>
      <div class="row">
                  <div class="col-md-3">
            <a href="book8.php?bookisbn=978-1-484217-26-9">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/9.jpg">
            </a>
          </div>
                  <div class="col-md-3">
            <a href="book9.php?bookisbn=978-1-49192-706-9">
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/10.jpg">
            </a>
          </div>
         
      </div>
      <div class="row">
         
      </div>
      <div class="row">
         
      </div>
      <div class="row">
         
      </div>
      <div class="row">
         
      </div>
      <div class="row">
         
      </div>
      <div class="row">
         
      </div>
      <div class="row">
         
      </div>
      	<hr>

      	<footer>
        	<!-- <div class="text-muted pull-left">
            	<a href="http://projectworlds.in" target="_blank"> projectworlds </a>
        	</div> -->
        	<div class="text-muted pull-right">
          		<a href="admin.php">Admin Login</a>
        	</div>
      	</footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="./bootstrap/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>