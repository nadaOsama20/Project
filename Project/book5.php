<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Web Operations: Keeping the Data on Time</title>

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
      <p class="lead" style="margin: 25px 0"><a href="books.php">Books</a> > Web Operations: Keeping the Data on Time</p>
      <div class="row">
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="./bootstrap/img/14.jpeg">
        </div>
        <div class="col-md-6">
          <h4>Book Description</h4>
          <p>A web application involves many specialists, but it takes people in web ops to ensure that everything works together throughout an application's lifetime. It's the expertise you need when your start-up gets an unexpected spike in web traffic, or when a new feature causes your mature application to fail. In this collection of essays and interviews, web veterans such as Theo Schlossnagle, Baron Schwartz, and Alistair Croll offer insights into this evolving field. You'll learn stories from the trenches--from builders of some of the biggest sites on the Web--on what's necessary to help a site thrive.</p>
          <h4>Book Details</h4>
          <table class="table">
          	            <tr>
              <td>ISBN</td>
              <td>978-1-44937-019-0</td>
            </tr>
                        <tr>
              <td>Author</td>
              <td>Joseph Allspaw</td>
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