<?php 
    ini_set('display_errors', 1);
    $data = "http://nhancv.github.io/";
    $author = "Nhan Cao";
    $description = "QRCode generate";

	if (isset($_GET['data'])) {
	    $data = $_GET['data'];
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <!--SEO-->
    <title>QRCode</title>
    <meta http-equiv='Content-Type' content="text/html; charset=utf-8"/>

    <!--Meta tag for facebook share-->
    <meta property="og:url" content="<?php echo $data ?>"/>
    <meta property="og:description" content="<?php echo $description ?>"/>
    <meta property="og:image" content="qrcodegen.php?data=<? echo $data ?>"/>

    <meta name="url" content="<?php echo $data ?>"/>
    <meta name="author" content="<?php echo $author ?>" />
    <meta name="description" content="<?php echo $description ?>" />
    <meta name="image" content="qrcodegen.php?data=<? echo $data ?>"/>
</head>
<body>
<img src="qrcodegen.php?data=<? echo $data ?>">
<br>
<?php echo $data ?>

</body>
</html>