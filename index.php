<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container-xl">
  	<div class="row">
  	  <div class="col-md-12">
  	  	<h2>Books</h2>
  	  	<div class="carousel slide">
  	  	  <div class="carousel-inner">
  	  	  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Navbar</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                   <li class="nav-item active">
                     <a class="nav-link" href="modelForm.html">upload book</a>
                   </li>
                 </ul>
              </div>  	  	  	  
  	  	  	</nav>
             <br>
             <br>
            <div class="item carousel-item active">
             <div class="row">
              <?php 
               foreach (glob('Folder_FBpdf/*.pdf') as $NFB)  
               {
               	$name_IMgB = glob('Folder_IMG_CB/'.substr($NFB,13,-4).'*.{png,jpg,jpeg}',GLOB_BRACE);
               	$name_IMgB = $name_IMgB[0];
               	$nameBook = substr($NFB, strpos($NFB,'-')+1, -4);
                ?>
                 <div class="col-sm-3">
                   <div class="thumb-wrapper">
                     <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                    <div class="img-box">
                      <img src="<?php echo $name_IMgB;?>" class="img-fluid">                                
                    </div>
                   <div class="thumb-content">
                      <h4><?php echo $nameBook;?></h4>                                 
                      <a href="dwonloadPDFB.php?NameBook=<?php echo $NFB;?>" class="btn btn-primary">Dwonload</a>
                   </div>                      
                  </div>
                </div>
                <?php
               }
              ?>
             </div>
            </div>
  	  	  </div>
  	  	</div>
  	  </div>
  	</div>
  </div>
</body>
</html>