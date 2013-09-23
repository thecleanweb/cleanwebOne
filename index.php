<!-- 
  /* This would be a great place for some introductory material.
   *
   * Which we'll get to.
   *
   */
-->

<!-- BEGIN header.php section -->

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<!-- *********** NEED TO REENABLE THIS ON WP <html <?php language_attributes(); ?>> -->
<!--<![endif]-->

<html>
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="<?php bloginfo('charset'); ?>" />


    <!-- some WP-fed stuff -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_theme_option('favicon'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->

    <!-- Oh, IE. n.b. the referenced THEME_CSS; doesn't exist...yet. -->
    <!--[if lte IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if IE 8]>
    <link rel="stylesheet" href="<?php echo THEME_CSS; ?>/ie8.css" type="text/css" media="screen" />
    <![endif]-->
    
    <!-- web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,800,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Abel:400,600">

    <!-- Bootstrap import -->
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>

    <style type="text/css">

      .landing {
        background: url("img/6133364748_89f2365922_o.jpg") no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        padding-top: 50px;
        padding-bottom: 0px;

        margin-top: 0px;
        margin-bottom: 0px;


      }

      body {
       padding-top: 0px;
       font-size: 16px;
       font-family: "Open Sans",serif;
       background: transparent;
       }

       h1 {
        font-family: "Abel", Helvetica, Arial, sans-serif;
        font-weight: 400;
        font-size: 40px;
       }

       /* override B3 .panel with translucency */
       .panel {
        background-color: rgba(255,255,255,0.9);
       }

      .margin-base-vertical { margin: 40px 0; }

      .navbar-collapse {
        padding-left: 0;
        padding-right: 0;
      }

      .jumbotron {
        background-color: rgba(255,255,255,0.8);
        margin-top: 0px;
      }

      .navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
        text-decoration: underline;
      }

      .navbar-inverse .navbar-nav > li > a {
        color: #ffffff;
      }

      #subnav.affix {
        position: fixed;
        top: 50px;
        width: 100%;
      }

    </style>

    <!-- Facebook Open Graph -->
    <meta property="og:title" content="Cleanweb" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.cleanweb.co" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="Cleanweb" />
    <meta property="fb:admins" content="100002188895899" />

    <script type="text/javascript" charset="utf-8">
      //<![CDATA[
      $(window).load(function(){
        $(function() {
          $('#subnav-wrapper').height($("#subnav").height());
          $('#subnav').affix({
          offset: { top: $('#subnav').offset().top - 50 }
          });
        });
      });//]]> 
    </script>

    <!-- Let Wordpress get the last word in -->
    <?php wp_head(); ?>
</head>

<!-- <body <?php body_class(); ?>> -->
<body id="main" data-spy="scroll" data-target="#subnav" data-offset="100">

<!-- BEGIN Facebook Open Graph -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=196524820509397";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- END Facebook Open Graph -->

  <header id="header">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>  <!-- 'icon-bar' is one-third of the 'hamburger nav' -->
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Cleanweb Initiative Logo</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-primary-collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offerings&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">APIs</a></li>
              <li><a href="#">Technical Resources"</a></li>
              <li><a href="#">Datasets</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Communities&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">New York</a></li>
              <li><a href="#">Los Angeles</a></li>
              <li><a href="#">Chicago</a></li>
              <li><a href="#">More!</a></li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Some Hackathon Somewhere</a></li>
              <li><a href="#">A bunch of great stuff!</a></li>
              <li><a href="#">More hacks in more places</a></li>
            </ul>
          </li>

          <li><a href="#">Blog</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

  </header>

<!-- end header.php section ??? -->

<div class="landing" id="what"><!-- LANDING: 'inspiring the next 1000 companies...' -->

  <div class="jumbotron"><!-- lead content for landing section -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 striped">
          <h1>Inspiring the next 1000 companies...</h1>
        </div>
        <div class="col-md-6">
          <p>...that will have a massive economic &amp; environmental impact</p>
        </div>
      </div>
    </div>
  </div><!-- /JUMBOTRON -->

  <!-- spacer -->
  <div class="container"><!-- subtext panel for landing section -->
    <div class="row">
      <div class="col-sm-6 col-sm-push-3">
        <div class="panel panel-default" style="margin-bottom: 0px; text-align: center;">
          <div class="panel-body">
            <h2 style="padding: 10px;">Please god in heaven better copy text goes here soon</h2>
         </div>
       </div>
      </div>
    </div>
  </div>

</div><!-- /LANDING> -->


<!-- subnav bar (starts under landing, scrolls up then fixes at top) -->
    <!-- what do we do? how do we do it? who's part of it? where are we? who's talking about it? who's supporting it? -->

<div id="subnav-wrapper"><!-- wrapper so that when we magicly JS this from inline to fixed we don't lose layout -->
<nav class="navbar navbar-default navbar-inverse" role="navigation" id="subnav">
  <!-- let screenreaders ditch this toy -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>  <!-- 'icon-bar' is one-third of the 'hamburger nav' -->
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <ul class="nav navbar-nav pull-right">
    <li class="active"><a href="#what" title="what">What do we do?</a></li>
    <li><a href="#how" title="how">How do we do it?</a></li>
    <li><a href="#who" title="who">Who's part of it?</a></li>
    <li><a href="#where" title="where">Where are we?</a></li>
    <li><a href="#social" title="social">Who's talking about it?</a></li>
    <li><a href="#sponsors" title="sponsors">Who's supporting it?</a>
  </ul>
</nav>
</div>

<div class="sell"><!-- Helping Budding Entrepreneurs... -->
<!-- Helping budding entrepreneurs, etc. (sell slide/'how do we do it') (this should be how we do it!) -->
<!-- FILLER CONTENT -->
<div class="jumbotron">
  <div class="container">
    <h1>Here is some really big text.</h1>
    <p>Here is a bunch of smaller Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div><!-- /container -->
</div>
</div>

<div class="how" id="how"><!-- We help entrepreneurs in all kinds of ways... -->
  <!-- FILLER CONTENT -->
<div class="jumbotron">
  <div class="container">
    <h1>Here is some really big text.</h1>
    <p>Here is a bunch of smaller Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div><!-- /container -->
</div>
<!-- We help entrepreneurs in all kinds of ways (this is the 'how do we do it!!!') w/ complex rollover behaviour -->
</div>

<div class="who" id="who"><!-- Who's in on this? -->
  <!-- FILLER CONTENT -->
<div class="jumbotron">
  <div class="container">
    <h1>Here is some really big text.</h1>
    <p>Here is a bunch of smaller Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div><!-- /container -->
</div>
<!-- red-based grid section with fancy mouseover/click behavior -->
</div>

<div class="where" id="where"><!-- Where's the action? -->
  <!-- FILLER CONTENT -->
<div class="jumbotron">
  <div class="container">
    <h1>Here is some really big text.</h1>
    <p>Here is a bunch of smaller Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div><!-- /container -->
</div>
<!-- map section -->
</div>

<div class="events" id="events"><!-- upcoming/featured events -->
  <!-- FILLER CONTENT -->
<div class="jumbotron">
  <div class="container">
    <h1>Here is some really big text.</h1>
    <p>Here is a bunch of smaller Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div><!-- /container -->
</div>
<!-- featured event section -->
</div>

<div class="social" id="social"><!-- big twitter splat -->
  <!-- FILLER CONTENT -->
<div class="jumbotron">
  <div class="container">
    <h1>Here is some really big text.</h1>
    <p>Here is a bunch of smaller Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div><!-- /container -->
</div>
<!-- social media/twitter plugin section -->
</div>

<div class="sponsors" id="sponsors"><!-- with a great big thanks to... -->
  <!-- FILLER CONTENT -->
<div class="jumbotron">
  <div class="container">
    <h1>Here is some really big text.</h1>
    <p>Here is a bunch of smaller Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div><!-- /container -->
</div>
<!-- sponsor section -->
</div>

<!-- footer -->
<footer>

</footer>

<!-- FILLER CONTENT -->
<div class="jumbotron">
  <div class="container">
    <h1>Here is some really big text.</h1>
    <p>Here is a bunch of smaller Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div><!-- /container -->
</div>

<div class="container"> <!-- we live here. -->

  <div class="row">
    <div class="col-md-6 col-md-offset-3 panel panel-default">
      <h1 class="margin-base-vertical">Have you ever seen the rain?</h1>

      <p>Someone told me long ago there's a calm before the storm. I know, it's been comin' for some time.</p>
      <p>When it's over, so they say, it'll rain a sunny day. I know, shinin' down like water.</p>
      <p>I want to know: Have you ever seen the rain?</p>

      <form action="/mailing-list" method="post" accept-charset="utf-8" class="margin-base-vertical">
        <label for="email" class="sr-only">Email</label>
        <p class="input-group">
          <span class="input-group-addon"><span class="icon-envelope"></span></span>
          <input type="text" name="email" value="" placeholder="jonsnow@knowsnothi.ng" class="form-control input-lg" id="email" />
        </p>
        <p class="help-block text-center"><small>We won't bite.</small></p>
        <p class="text-center">
          <button type="submit" class="btn btn-success btn-lg">Keep me posted!</button>
        </p>
      </form>
    </div>
  </div>
  </div>
</body>