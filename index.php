<?php
include_once('rss-feed/autoloader.php');
require_once('rss-feed/autoloader.php');
// We'll process this feed with all of the default options.
$feed = new SimplePie();

// Set the feed to process.
$feed->set_feed_url('https://www.pathofexile.com/news/rss');

// Run SimplePie.
$feed->init();

// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
$feed->handle_content_type();

$feed->set_cache_location($_SERVER['DOCUMENT_ROOT'] . '/app/cache_files');
$feed->set_item_limit(5);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>poebase — your dashboard for path of exile</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/loading.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#currency").load('ratio.php');
});
</script>
<script type="text/javascript">
$(document).ready(function(){
$("#daily-deal").load('dailydeal.php');
});
</script>
<script type="text/javascript">
$(document).ready(function(){
$("#accountinfo").load('accountinfo.php');
});
</script>
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PB</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a target="_blank" href="http://poe.trade">poe.trade</a></li>
            <li><a target="_blank" href="http://poeprices.info">poeprices.info</a></li>
            <li><a target="_blank" href="https://pathofexile.com">pathofexile.com</a></li>
            <li><a target="_blank" href="http://https://www.reddit.com/r/pathofexile/">r/pathofexile</a></li>
            <li><a target="_blank" href="http://exiletools.com/">exiletools.com</a></li>
            <li><a target="_blank" href="https://siveran.github.io/calc.html">vorici calc</a></li>
            <li><a target="_blank" href="http://poeaffix.net/">poeaffix.net</a></li>
            <li><a target="_blank" href="http://http://pathofexile.gamepedia.com">wiki</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="wrapper">
<div class="col-lg-3">
      <div id="currency">
        <div id="floatingCirclesG">
	<div class="f_circleG" id="frotateG_01"></div>
	<div class="f_circleG" id="frotateG_02"></div>
	<div class="f_circleG" id="frotateG_03"></div>
	<div class="f_circleG" id="frotateG_04"></div>
	<div class="f_circleG" id="frotateG_05"></div>
	<div class="f_circleG" id="frotateG_06"></div>
	<div class="f_circleG" id="frotateG_07"></div>
	<div class="f_circleG" id="frotateG_08"></div>
</div>
                </div>
              </div>
                <div id="searchbar" class="col-lg-5">
                  <div class="row">
                    <div class="col-lg-3"><span style="font-size:10em; color: white; margin-top: .15em; padding-left: 0.1em;" class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
                    <div class="col-lg-9">
                      <br>
                  <div id="searchbar-two">

                    <form class="form-control input-group input-group-lg" action="http://pathofexile.gamepedia.com/index.php?search" target="_blank" name="searchbox"
  method="get" />
  <input type="hidden" name="title" value="Special:Search" />
  <input type="hidden" name="profile" value="default" />
<input placeholder="Search the wiki ..." type="text" class="form-control" name="search" value="" />
<span class="input-group-btn">
    <button class="btn btn-default" type="submit" target="_blank" value="Search" name="fulltext">Search</button>
</span>
</form>
</div>
<div id="itemsearch">
  <p>Searches <a href="http://pathofexile.gamepedia.com/">http://pathofexile.gamepedia.com/</a></p><br>
  <form class="form-control input-group input-group-lg" action="http://exiletrade.github.io/" target="_blank" name="searchbox"
method="get" />
<input placeholder="Search for trades (example: 350pds mace) ..." type="text" class="form-control" name="q" value="" />
<span class="input-group-btn">
<button class="btn btn-default" type="submit" target="_blank" value="Search" name="fulltext">Search</button>
</span>
</form>
<p>Searches <a href="http://exiletrade.github.io/">http://exiletrade.github.io/</a> - See sample searches on website
</div>
                  </div>
                </div>
<div id="poe-news">
  <br>
  <?php if ($feed->error): ?>
  		<p><?php echo $feed->error; ?></p>
  		<?php endif; ?>

  		<h1>Official News from pathofexile.com</h1>

  		<?php foreach ($feed->get_items(0,2) as $item): ?>

  		<div class="chunk">

  			<?php /* Here, we'll use the $item->get_feed() method to gain access to the parent feed-level data for the specified item. */ ?>
  			<h4 style="background-image:url(<?php $feed = $item->get_feed(); ?>);"><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h4>

  			<h5><?php echo $item->get_content(); ?> </h5>

  			<p>Source: <a href="<?php $feed = $item->get_feed(); echo $feed->get_permalink(); ?>"><?php $feed = $item->get_feed(); echo $feed->get_title(); ?></a> | <?php echo $item->get_date('j M Y | g:i a T'); ?></p>

  		</div>

  		<?php endforeach; ?>
      <div id="daily-deal">
        <div id="floatingCirclesG">
  <div class="f_circleG" id="frotateG_01"></div>
  <div class="f_circleG" id="frotateG_02"></div>
  <div class="f_circleG" id="frotateG_03"></div>
  <div class="f_circleG" id="frotateG_04"></div>
  <div class="f_circleG" id="frotateG_05"></div>
  <div class="f_circleG" id="frotateG_06"></div>
  <div class="f_circleG" id="frotateG_07"></div>
  <div class="f_circleG" id="frotateG_08"></div>
</div>
                </div>
</div>


                </div>
                  <div class="col-lg-4">
<iframe width="50%" height="315" src="https://www.youtube.com/embed/videoseries?list=PLt5SL2R19SuLFX61HjO-6jJw-iy42tFOR" frameborder="0" allowfullscreen></iframe>
<iframe width="49%" height="315" src="https://www.youtube.com/embed/videoseries?list=PLt5SL2R19SuIsRyBhFpYNbZxAOkVy23Lg" frameborder="0" allowfullscreen></iframe>
                    <div id=reddit>
                      <script src="https://www.reddit.com/r/pathofexile/hot/.embed?limit=8&t=all" type="text/javascript"></script>
</div>

                  </div>
</div>
<footer class="footer">
  <div class="row">
  <ul>
    <li>
This is a fan-made site and not affiliated with Grinding Gear Games in any way — do you have any questions or ideas? <a href="https://www.reddit.com/user/Glennek/">Message me on reddit. </a>
    </li>
    <li>
background by <a href="http://asahisuperdry.deviantart.com/"> asahisuperdry </a>
    </li>
</ul>
</div>
</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
