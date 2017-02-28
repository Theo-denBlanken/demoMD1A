<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

	<title>College of MultiMedia | PHP MySQL</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PHP MySQL</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Sign in</button>
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
            <h1>Over mij</h1>

            <p>Dit is de aboutpagina van een eenvoudige website. <br>
				Het omvat een grote callout genoemd de heldenEenheid en drie ondersteunende stukken of inhoud. Gebruik het as een uitgangspunt om iets.</p>

            <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php

            $paragraaf = '<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                euismod. Donec sed odio dui. </p>

            <p><a class="btn btn-default" href="#">View details &raquo;</a></p>';

            for ($i=0; $i<5; $i++) {
              $berichtnummer = $i + 1;
              $uitvoer = '<div class="col-lg-4">';
              $uitvoer .= "\n<h3>Bericht $berichtnummer</h3> \n";
              $uitvoer .= $paragraaf;
              echo $uitvoer;
              echo "</div>";
            }
             ?>
            <!-- <div class="col-lg-4">
                <h2>Bericht 1</h2>

                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui. </p>

                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Bericht 2</h2>

                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                    condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis
                    euismod. Donec sed odio dui. </p>

                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Bericht 3</h2>

                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                    porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                    fermentum massa justo sit amet risus.</p>

                <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
            </div> -->
        </div>

        <hr>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> College of MultiMedia</p>
            <!-- gevonden op <a href="http://stackoverflow.com/questions/64003/how-do-i-use-php-to-get-the-current-year">http://stackoverflow.com/questions/64003/how-do-i-use-php-to-get-the-current-year</a> -->
        </footer>
    </div>
    <!-- /container -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
