<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eloquent Javascript</title>

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
    
    <div class="container" id="main">      <!-- Example row of columns -->
      <p class="lead" style="margin: 25px 0"><a href="books.php">Books</a> > Eloquent Javascript</p>
      <div class="row">
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="./bootstrap/img/13.jpeg">
        </div>
        <div class="col-md-6">
          <h4>Book Description</h4>
          <p>JavaScript lies at the heart of almost every modern web application, from social apps to the newest browser-based games. Though simple for beginners to pick up and play with, JavaScript is a flexible, complex language that you can use to build full-scale applications.

Eloquent JavaScript, 2nd Edition dives deep into the JavaScript language to show you how to write beautiful, effective code. Author Marijn Haverbeke immerses you in example code from the start, while exercises and full-chapter projects give you hands-on experience with writing your own programs. As you build projects such as an artificial life simulation, a simple programming language, and a paint program, you'll learn:

The essential elements of programming, including syntax, control, and data
How to organize and clarify your code with object-oriented and functional programming techniques
How to script the browser and make basic web applications
How to use the DOM effectively to interact with browsers.</p>
          <h4>Book Details</h4>
          <table class="table">
          	            <tr>
              <td>ISBN</td>
              <td>978-1-44937-075-6</td>
            </tr>
                        <tr>
              <td>Author</td>
              <td> Ben Albahari</td>
            </tr>
                        <tr>
              <td>Price</td>
              <td>20.00</td>
            </tr>
                      </table>
          <form method="post" action="cart.php">
            <input type="hidden" name="bookisbn" value="978-1-49192-706-9">
            <input type="submit" value="Purchase / Add to cart" name="cart" class="btn btn-primary">
          </form>
       	</div>
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