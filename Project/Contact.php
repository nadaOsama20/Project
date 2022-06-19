<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact</title>

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
    
    <div class="container" id="main">    <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal">
			  	<fieldset>
				    <legend>Contact</legend>
				    <p class="lead">I’d love to hear from you! Complete the form to send me an email.</p>
				    <div class="form-group">
				      	<label for="inputName" class="col-lg-2 control-label">Name</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputName" placeholder="Name">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputEmail" class="col-lg-2 control-label">Email</label>
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputEmail" placeholder="Email">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="textArea" class="col-lg-2 control-label">Textarea</label>
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea"></textarea>
				        	<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-10 col-lg-offset-2">
				        	<button type="reset" class="btn btn-default">Cancel</button>
				        	<button type="submit" class="btn btn-primary">Submit</button>
				      	</div>
				    </div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
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