<?php 
 
 $Dfilename = $_GET['NameBook'];
 $FN = basename($Dfilename);

 if (file_exists($Dfilename)) 
 {
   header('Content-Type: application/octet-stream');
   header('Content-Disposition: attachment; filename="'.substr($FN,strpos($FN,'-')+1).'"');
   header('Expires:0');
   header('Cache-Control: must-revalidate');
   header('Pragma:public');
   header('Content-Length: '.filesize($Dfilename));
   readfile($Dfilename);
   exit;
 }

?>