<?php
function headers($title)
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title><?php echo( $title ); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style type="text/css" media="screen,projection">/*<![CDATA[*/
        @import "http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/main.css";
    /*]]>*/</style>

  </head>
  <body class="mediawiki">
    <div id="globalWrapper">
      <div id="column-content">
        <div id="content">
<?php
}

function navigation()
{
  $site = $_SERVER["HTTP_HOST"];
  ?>
  <div id="p-navigation" class="portlet">
    <h5>Navigation</h5>
    <div class="pBody">
      <ul>
        <li><a href="http://<?php echo $site ?>">Home Page</a></li>
        <li><a href="http://<?php echo $site ?>/status.php">Status</a></li>
      </ul>
    </div>
    <br />
    <h5>Documentation</h5>
    <div class="pBody">
      <ul>
        <li><a href="http://<?php echo $site ?>/doc/0.1.0/">Wiki++ - 0.1.0</a></li>
        <li><a href="http://<?php echo $site ?>/doc/trunk/">Wiki++ - Trunk</a></li>
      </ul>
    </div>
  </div>
  <?php
}

function footer()
{
  ?>
        </div><!--content-->
      </div><!--column-content-->
      <div id="column-one">
        <div id="p-logo" class="portlet">
          <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>" style="background-image: url(http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/png/logo.png);"></a>
        </div><!--p-logo-->
        <?php navigation(); ?>
      </div><!--column-one-->
      <div class="visualClear" />
      <div id="footer">
        <a href="http://validator.w3.org/check?uri=referer">
          <img src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
        </a>
	<a href="http://grimp.eu">
	  <img src="http://repo.grimp.eu/grimp/logo.png" height="31" alt="Grimp" />
	</a>
        <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">
          <img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" />
        </a>
      </div><!--footer-->
    </div><!--globalWrapper-->	
  </body>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-19278513-4']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</html>
<?php
}
