<?php 
    //http://phpqrcode.sourceforge.net/
    include('./phpqrcode/qrlib.php'); 
    $data = "http://nhancv.github.io/";
    $author = "Nhan Cao";
    $description = "QRCode generate";

	if (isset($_GET['data'])) {
	    $data = $_GET['data'];
	}
    
    // Gen Base64 image string
    ob_start();
    QRCode::png($data, null, QR_ECLEVEL_H, 4);
    $image = base64_encode(ob_get_contents());
    ob_end_clean();
?>


<!DOCTYPE html>
<html lang="en-US">
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

    <meta name="author" content="<?php echo $author ?>" >
    <meta name="description" content="<?php echo $description ?>" >

</head>
<body style="text-align: center;">
<img style="max-width: 500px;" src="data:image/png;base64,<?php echo $image; ?>">

<div><?php echo $data ?></div>

</body>
</html>