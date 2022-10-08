<?php 
 
 //We put the names of the inputs, in this array 
 $NF = array('FBpdf' ,  'IMG_CB');

 if (isset($_FILES['FBpdf']) && isset($_FILES['IMG_CB']) && !empty($_POST['nameBook'])) 
 { 
   $rand = rand().'-';
   for ($i=0; $i < 2; $i++) 
   { 
   	 $DirNowFile = 'Folder_'.$NF[$i].'/';
   	 $extension_F = pathinfo($_FILES[$NF[$i]]['name'], PATHINFO_EXTENSION);
   	 $DirNowFile =  $DirNowFile.$rand.$_POST['nameBook'].'.'.strtolower($extension_F);
   	 move_uploaded_file($_FILES[$NF[$i]]['tmp_name'] , $DirNowFile);
   }
    echo '<div class="alert alert-success" role="alert">
           The book has been uploaded
         </div>';
 }else{
 	echo '<div class="alert alert-warning">
 	        <strong>Warning! </strong>An input cannot be left blank
 	     </div>';
 }

?>