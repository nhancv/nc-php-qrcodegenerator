<?php 
    
    include('./phpqrcode/qrlib.php'); 
    ini_set('display_errors', 1);
    $data = "http://nhancv.github.io/";
    $author = "Nhan Cao";
    $description = "QRCode generate";

	if (isset($_GET['data'])) {
	    $data = $_GET['data'];
	}


    ob_start();
    QRCode::png($data, null);
    $image = base64_encode( ob_get_contents() );
    ob_end_clean();
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
    <meta property="og:image" content="data:image/png;base64,<?php echo $image ?>"/>

    <meta name="url" content="<?php echo $data ?>"/>
    <meta name="author" content="<?php echo $author ?>" />
    <meta name="description" content="<?php echo $description ?>" />
    <meta name="image" content="data:image/png;base64,<?php echo $image ?>"/>
</head>
<body>
<img src="data:image/png;base64,<?php echo $image ?>">
<br>
<?php echo $data ?>

</body>
</html>