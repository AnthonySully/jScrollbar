<?php
	require_once(dirname(__FILE__)."/../../../scripts/init.inc.php");
	$oMysql = MySQL::getInstance();
	$aNews = $oMysql->getNews(NB_NEWS);
	
	if(Tools::getValue('btSubmit'))
	{
		$allowMouseWheel = $_POST['allowMouseWheel'];
		$scrollStep = $_POST['scrollStep'];
		$exemple = $_POST['exemple'];
		$showOnHover = $_POST['showOnHover'];
		$position = $_POST['position'];
	}
	else {
		$allowMouseWheel = 'true';
		$scrollStep = 10;
		$exemple = 5;
		$showOnHover = 'false';
		$position = 'right';
	}
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>jScrollbar demonstration : jquery plugin | make your own scrollbar for scrolling contents with jQuery UI : MyjQueryPlugins.com</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="Language" content="en" />
	<base href="<?php echo URL_SITE; ?>" />
	<link rel="shortcut icon" href="<?php echo URL_SITE; ?>favicon.ico" />
	<meta name="description" content="jScrollbar : make your own scrollbars for scrolling contents with jQuery UI ! jScrollbar is full CSS skinnable and can be used with the mousewheel. You ever wanted to add some custom scrollbars to your website, to scroll the contents and the default browser scrollbars just doesn\'t match up with your design ? Make your own scrollbar design with jScrollbar !" />
	<meta name="robots" content="index, follow, all" />
	
	<link rel="stylesheet" href="<?php echo URL_SITE.URL_DEMO_JSCROLLBAR; ?>jquery/jScrollbar.jquery.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/content.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/648.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo URL_SITE; ?>static/css/336.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css' />
</head>

<body id="demopage">


<?php require_once(dirname(__FILE__)."/../../../includes/header.inc.php");?>

<div id="main">

	<div class="breadcrumb">
		<a href="index" class="backTo">Home</a>
		<a href="jScrollbar" class="backTo">jScrollbar Homepage</a>
		<div class="clr"></div>
	</div>
	
	<div id="left_col">

	<h1>jScrollbar demonstration</h1>

	<div class="jScrollbar<?php echo $exemple; ?>">
		<div class="jScrollbar_mask">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae nulla est. Mauris congue sem quis velit fringilla placerat mattis eros pulvinar. Curabitur lobortis lorem ut nulla ornare malesuada. Integer risus turpis, consectetur a vulputate eu, vestibulum nec dolor. Suspendisse massa magna, imperdiet ac iaculis nec, feugiat vitae justo. Sed lobortis semper eros, at bibendum orci facilisis semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae lacus massa. Etiam facilisis metus odio. Cras sit amet ipsum fermentum massa cursus elementum non vitae lectus. Maecenas porta, felis eu volutpat luctus, nunc massa ullamcorper leo, sed sollicitudin odio justo eu ante. Etiam pharetra pharetra rhoncus. Praesent pretium ornare consectetur. Proin lacinia pellentesque mattis. Vestibulum egestas, leo quis cursus pellentesque, metus enim interdum justo, vitae rhoncus dui nisi eu dui.
				Proin venenatis, purus quis posuere adipiscing, felis turpis fermentum leo, sed pharetra tortor magna mattis enim. Vivamus urna lacus, blandit non aliquam vel, condimentum in magna. Maecenas suscipit sagittis nibh, a ultrices dui blandit eu. Aliquam urna erat, hendrerit sed gravida vitae, sodales sit amet ligula. Maecenas lobortis dolor eu sem porta pretium. Duis eu consectetur magna. Nullam egestas nunc sed lorem gravida eu congue nisl commodo. Etiam id enim urna. Ut consequat ultricies diam in dignissim. Morbi mi quam, aliquet posuere feugiat vitae, ornare vel lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis in dignissim orci. Phasellus viverra ullamcorper mollis. Sed aliquam commodo posuere. Cras non varius libero. Nulla consequat mi elementum libero porttitor tincidunt. Mauris venenatis malesuada sagittis. Nam viverra risus ut tortor convallis porttitor. Morbi convallis commodo massa, quis viverra massa pretium vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae nulla est. Mauris congue sem quis velit fringilla placerat mattis eros pulvinar. Curabitur lobortis lorem ut nulla ornare malesuada. Integer risus turpis, consectetur a vulputate eu, vestibulum nec dolor. Suspendisse massa magna, imperdiet ac iaculis nec, feugiat vitae justo. Sed lobortis semper eros, at bibendum orci facilisis semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae lacus massa. Etiam facilisis metus odio. Cras sit amet ipsum fermentum massa cursus elementum non vitae lectus. Maecenas porta, felis eu volutpat luctus, nunc massa ullamcorper leo, sed sollicitudin odio justo eu ante. Etiam pharetra pharetra rhoncus. Praesent pretium ornare consectetur. Proin lacinia pellentesque mattis. Vestibulum egestas, leo quis cursus pellentesque, metus enim interdum justo, vitae rhoncus dui nisi eu dui.
				Proin venenatis, purus quis posuere adipiscing, felis turpis fermentum leo, sed pharetra tortor magna mattis enim. Vivamus urna lacus, blandit non aliquam vel, condimentum in magna. Maecenas suscipit sagittis nibh, a ultrices dui blandit eu. Aliquam urna erat, hendrerit sed gravida vitae, sodales sit amet ligula. Maecenas lobortis dolor eu sem porta pretium. Duis eu consectetur magna. Nullam egestas nunc sed lorem gravida eu congue nisl commodo. Etiam id enim urna. Ut consequat ultricies diam in dignissim. Morbi mi quam, aliquet posuere feugiat vitae, ornare vel lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis in dignissim orci. Phasellus viverra ullamcorper mollis. Sed aliquam commodo posuere. Cras non varius libero. Nulla consequat mi elementum libero porttitor tincidunt. Mauris venenatis malesuada sagittis. Nam viverra risus ut tortor convallis porttitor. Morbi convallis commodo massa, quis viverra massa pretium vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae nulla est. Mauris congue sem quis velit fringilla placerat mattis eros pulvinar. Curabitur lobortis lorem ut nulla ornare malesuada. Integer risus turpis, consectetur a vulputate eu, vestibulum nec dolor. Suspendisse massa magna, imperdiet ac iaculis nec, feugiat vitae justo. Sed lobortis semper eros, at bibendum orci facilisis semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae lacus massa. Etiam facilisis metus odio. Cras sit amet ipsum fermentum massa cursus elementum non vitae lectus. Maecenas porta, felis eu volutpat luctus, nunc massa ullamcorper leo, sed sollicitudin odio justo eu ante. Etiam pharetra pharetra rhoncus. Praesent pretium ornare consectetur. Proin lacinia pellentesque mattis. Vestibulum egestas, leo quis cursus pellentesque, metus enim interdum justo, vitae rhoncus dui nisi eu dui.
				Proin venenatis, purus quis posuere adipiscing, felis turpis fermentum leo, sed pharetra tortor magna mattis enim. Vivamus urna lacus, blandit non aliquam vel, condimentum in magna. Maecenas suscipit sagittis nibh, a ultrices dui blandit eu. Aliquam urna erat, hendrerit sed gravida vitae, sodales sit amet ligula. Maecenas lobortis dolor eu sem porta pretium. Duis eu consectetur magna. Nullam egestas nunc sed lorem gravida eu congue nisl commodo. Etiam id enim urna. Ut consequat ultricies diam in dignissim. Morbi mi quam, aliquet posuere feugiat vitae, ornare vel lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis in dignissim orci. Phasellus viverra ullamcorper mollis. Sed aliquam commodo posuere. Cras non varius libero. Nulla consequat mi elementum libero porttitor tincidunt. Mauris venenatis malesuada sagittis. Nam viverra risus ut tortor convallis porttitor. Morbi convallis commodo massa, quis viverra massa pretium vitae. 
			</p>
		</div>
		
		<div class="jScrollbar_draggable">
			<a href="#" class="draggable"></a>
		</div>
			
		<div class="clr"></div>
	</div>

	<h2>Change options</h2>
	<form method="post" action="">
		<fieldset>
			<label>Allow Mouse Wheel ?</label>
			<select name="allowMouseWheel">
				<option value="true" <?php if($allowMouseWheel == 'true') echo 'selected="selected"'; ?>>Y</option>
				<option value="false" <?php if($allowMouseWheel == 'false') echo 'selected="selected"'; ?>>N</option>
			</select><br /><br />
			
			<label>scrollStep</label>
			<select name="scrollStep">
				<option value="10" <?php if($scrollStep == 10) echo 'selected="selected"'; ?>>10</option>
				<option value="30" <?php if($scrollStep == 30) echo 'selected="selected"'; ?>>30</option>
				<option value="60" <?php if($scrollStep == 60) echo 'selected="selected"'; ?>>60</option>
				<option value="100" <?php if($scrollStep == 100) echo 'selected="selected"'; ?>>100</option>
			</select>
			<br /><br />
			
			<label>Show exemple n°</label>
			<select name="exemple">
				<option value="1" <?php if($exemple == 1) echo 'selected="selected"'; ?>>1</option>
				<option value="2" <?php if($exemple == 2) echo 'selected="selected"'; ?>>2</option>
				<option value="3" <?php if($exemple == 3) echo 'selected="selected"'; ?>>3</option>
				<option value="4" <?php if($exemple == 4) echo 'selected="selected"'; ?>>4</option>
				<option value="5" <?php if($exemple == 5) echo 'selected="selected"'; ?>>5</option>
			</select>
			<br /><br />
			
			<label>Show Scrollbar on Hover ?</label>
			<select name="showOnHover">
				<option value="true" <?php if($showOnHover == "true") echo 'selected="selected"'; ?>>Yes</option>
				<option value="false" <?php if($showOnHover == "false") echo 'selected="selected"'; ?>>No</option>
			</select><span>Added in v1.5</span>
			<br /><br />
			
			<label>Show jScrollbar on the left or right ?</label>
			<select name="position">
				<option value="left" <?php if($position == "left") echo 'selected="selected"'; ?>>Left</option>
				<option value="right" <?php if($position == "right") echo 'selected="selected"'; ?>>Right</option>
			</select><span>Added in v1.6</span>
			<br /><br />
			<input type="submit" name="btSubmit" value="Change options">
		</fieldset>
	</form>

	<h2>JS code</h2>

<div class="sourceCode">
<pre>
<?php
echo htmlentities('<!-- JS to add -->
<script type="text/javascript">
  $(document).ready(function(){
    $(".jScrollbar").jScrollbar({
      allowMouseWheel : '.$allowMouseWheel.',
      scrollStep : '.$scrollStep.',
      showOnHover : '.$showOnHover.',
      position : \''.$position.'\'
    });
  })
</script>
');
?>
</pre>
</div>

			<!-- Advertise Bottom -->
			<?php require_once(dirname(__FILE__)."/../../../includes/pub.inc.php");?>
</div>



			<!-- RIGHT COLUMN -->
		<?php require_once(dirname(__FILE__)."/../../../includes/col_right.inc.php");?>
		
		<div class="clr"></div>

	</div>
	
	
	<!-- FOOTER -->
	<?php require_once(dirname(__FILE__)."/../../../includes/footer.inc.php");?>

<script type="text/javascript" src="<?php echo URL_SITE.URL_DEMO_JSCROLLBAR; ?>jquery/jquery.js"></script>
<script type="text/javascript" src="<?php echo URL_SITE.URL_DEMO_JSCROLLBAR; ?>jquery/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo URL_SITE.URL_DEMO_JSCROLLBAR; ?>jquery/jquery-mousewheel.js"></script>
<script type="text/javascript" src="<?php echo URL_SITE.URL_DEMO_JSCROLLBAR; ?>jquery/jScrollbar.jquery.min.js"></script>
<script type="text/javascript">                                       
	$(document).ready(function(){
		$('.jScrollbar1, .jScrollbar2, .jScrollbar3, .jScrollbar4, .jScrollbar5').jScrollbar({
			allowMouseWheel : <?php echo $allowMouseWheel; ?>,
			scrollStep : <?php echo $scrollStep; ?>,
			showOnHover : <?php echo $showOnHover; ?>,
			position : '<?php echo $position; ?>'
		});
	});                                        
</script> 
<?php require_once dirname(__FILE__)."/../../../includes/analytics.inc.php"; ?>                                                                
</body>                                                                   
</html>