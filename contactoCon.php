<?php 
     include'connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Soluciones Empresariales</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Soluciones Empresariales</div>
    <div class="address-bar">3481 Independencia | Tlaxcala,Tlaxcala, CP 90123</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Inicio</a>
                    </li>
                    <li>
                        <a href="about.html">Acerca de</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="contactoIns.php">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	        <div class="container">
			  <div class="row">
                 <div class="box">
                <div class="col-lg-12">           
                    <hr>
                    <h2 class="intro-text text-center">Lista de 
                        <strong>Contactos</strong>
                    </h2>
                    <hr>
                    <p></p>					
<table class="table table-bordered">
  <tr>
      <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
		<th>Telefono</th>
		<th>Mensaje</th>
        <th>Modificar</th>
        <th>Eliminar</th>
  </tr>
    
  <?php 
  $sel="SELECT * FROM registros";
  $res=mysql_query($sel);
  while($fet=mysql_fetch_array($res))
  {
    ?>
    <tr>
           <td><?php echo $fet['id']?></td>
           <td><?php echo $fet['nombre']?></td>
           <td><?php echo $fet['email']?></td>
		   <td><?php echo $fet['telefono']?></td>
		   <td><?php echo $fet['mensaje']?></td>
           
           
           <td><a href="contactoMod.php?edit_id=<?php echo $fet['id'];?>">Modificar</a></td>
           <td><a href="?id=<?php echo $fet['id'];?>&amp;action=del">Eliminar</a></td>
         </tr>
   <?php 
}  
  ?>
      </table>


</body>
<html>
<?php
  if(isset($_REQUEST['id'],$_REQUEST['action']) && $_REQUEST['action']='del')
  {
    echo "hii";
    echo $_GET['id'];
    echo '<br>';
    echo $del="DELETE FROM registros WHERE id=$_GET[id]";
    mysql_query($del) or die(mysql_error());
    echo "<script>alert('record delete');
    window.location='dispLay.php';
    </script>";
  } 
?>					
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
