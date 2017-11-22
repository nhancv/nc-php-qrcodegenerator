<?php 
    include('phpqrcode/qrlib.php'); 
    
    // we need to be sure ours script does not output anything!!! 
    // otherwise it will break up PNG binary! 
    ob_start("callback"); 
    // end of processing here 
    ob_get_contents(); 
    ob_end_clean(); 
     
    // outputs image directly into browser, as PNG stream 
    QRcode::png($_GET['data']);