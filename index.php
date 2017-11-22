<?php 
    //http://phpqrcode.sourceforge.net/
    include('./phpqrcode/qrlib.php'); 
    ini_set('display_errors', 1);
    $data = "http://nhancv.github.io/";
    $author = "Nhan Cao";
    $description = "QRCode generate";

	if (isset($_GET['data'])) {
	    $data = $_GET['data'];
	}

    $filePath = './tmp/'.md5($data).'.png';

    QRCode::png($data, $filePath, QR_ECLEVEL_H, 4);
    
    // Gen Base64 image string
    // ob_start();
    // QRCode::png($data, null, QR_ECLEVEL_H, 10);
    // $image = base64_encode(ob_get_contents());
    // ob_end_clean();
?>


<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" itemscope itemtype="http://schema.org/Article">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <!--SEO-->
    <title>QRCode</title>

    <meta name="abstract" content="<?php echo $description ?>" >
    <meta name="keywords" content="tools, qrcode, generator" >
    <meta name="revisit-after" content="15" >
    <meta name="language" content="EN" >
    <meta name="copyright" content="© 2017 Nhan Cao" >
    <meta name="robots" content="All" >

    <!--Meta tag for facebook share-->
    <meta property="og:url" content="<?php echo $data ?>">
    <meta property="og:description" content="<?php echo $description ?>">
    <meta property="og:image" content="<?php echo $filePath; ?>">

    <meta name="url" content="<?php echo $data ?>">
    <meta name="author" content="<?php echo $author ?>" >
    <meta name="description" content="<?php echo $description ?>" >
    <meta name="image" content="data:image/png;base64,<?php echo $image; ?>">
    <meta name="twitter:image" content="<?php echo $filePath; ?>">

    <meta itemprop="name" content="<?php echo $author ?>">
    <meta itemprop="description" content="<?php echo $description ?>.">
    <meta itemprop="image" content="<?php echo $filePath; ?>">

</head>
<body style="text-align: center;">
<!-- <img style="max-width: 500px;" src="data:image/png;base64,<?php echo $image; ?>"> -->

<img style="max-width: 500px;" src="<?php echo $filePath; ?>">
<div><?php echo $data ?></div>

</body>
</html>