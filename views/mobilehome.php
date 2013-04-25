<?php if(!defined('APPLICATION')) die();

$this->Head->Title('MobileHome');

$this->AddCssFile('moho.css', 'plugins/MobileHome');
$this->AddCssFile('mobile.css', 'themes/mobile');
?>


<h1><?php echo T('MobileHome'); ?></h1>

<html><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        <title>MobileHome</title>
        <link href="design/moho.css" rel="stylesheet" type="text/css">
        <link href="/mobile/mobile.css" rel="stylesheet" type="text/css">
        <meta name="keywords" content="Forum Home Index">
        <meta name="description" content="Links to various parts of the forum">
        <link rel="shortcut-icon" type="image/x-icon" href="themes/mobile/favicon.png">
        
    </head>
<body>
	
		       <ul>
                <li><a href="plugins/mobilehome.php" class="Button">MobileHome</a></li>
                <li><a href="discussions" class="Button">Discussions</a></li>
                <li><a href="categories/all" class="Button">Categories</a></li>
                <li><a href="discussions" class="Button">Discussions</a></li>
                <li><a href="activity" class="Button">Activity</a></li>
                <li><a href="entry/signin?Target=discussions" class="Button">Sign In</a></li>
                <li><a href="entry/register?Target=discussions" class="Button">Register</a></li>
                
            </ul>
        
    <div id="Content">
<p>&nbsp;</p>
 <center><img src="http://i26.tinypic.com/316nrjc.jpg" title="YOUR ADD CAN GO HERE" height="auto" width="100%" style="box-shadow: 0px 2px 2px 12px #222222;
border-radius:5px 5px 5px 5px!important;
-webkit-border-radius:5px!important;
-moz-border-radius:5px!important;margin:0 auto;"></center>
</div><p>&nbsp;</p>


</body></html>
