<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/style1.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
        <script src="js/validacionesForm.js"></script>
        <script src="js/livevalidation_standalone.js"></script>

    	<title>Alexa is knitting-Pedidos-Consultas</title>
    </head>
    <body background="images/back1.jpg", onload="activarValidaciones()">
    <div class="barraNav"><!--Barra fija-->
    <div class="navbar"><!--Barra de menu superior-->
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><h1>Alexa is knitting</h1></a>
  <div class="nav-collapse">
                    <div class="btn-toolbar nav pull-right mantenimiento">
                        	<li id = 'mantenimiento'>
								<a href='#'><i class='icon-wrench icon-white'></i>
								Portafolio
								</a>
								<ul class='dropdown-menu'><!--Menu desplegable de mantenimiento-->
									<li><a href='portafolio-escarpines.html'><i></i> Escarpines</a></li>
                                    <li class="divider"></li>
									<li><a href='portafolio-bufandas.html'><i></i> Bufandas</a></li>
                                    <li class="divider"></li>
                                    <li><a href='portafolio-guantes.html'><i></i> Guantes</a></li>
                                    <li class="divider"></li>
                                    <li><a href='portafolio-juegos.html'><i></i> Conjuntos para beb&eacute;</a></li>
                                    <li class="divider"></li>
                                    <li><a href='portafolio-accesorios.html'><i></i> Accesorios</a></li>
								</ul>
							</li>    
                    	<li>     
                            <a href="pedidosConsultas.php">Consultas</a>
                    	</li>
                  </div>   
                </div><!-- /.nav-collapse -->
          </div>
        </div><!-- /navbar-inner -->
</div><!-- /navbar -->
</div><!--fin barra fija--> 
<br><br>
    <div id="main">
                <br><br>
                <div id="site_content">
                    <table id="who" width="850" align="center" >
                        <tr>
                            <td align="center"><h2>Para pedidos o consultas llene el siguiente formulario:</h2></td>
                        </tr>
                        <tr>
                            <td><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Al enviarnos sus consultas estaremos poniendonos en contacto lo más pronto posible, gracias.</p>
                            </td>
                        </tr>
                   </table>
               </div> 
                <br><br><br><br><br>
      <br>
      <div id="form">
		<?php
		error_reporting(0);
			if (!isset($_POST['txtCorreo'])) {
		?>
      <form name="frmConsulta" action="<?=$_SERVER['PHP_SELF']?>"  method="post" class="form-horizontal">
        <fieldset>
          <div name="divnombre" id="divnombre" class="control-group">
            <label name="lblnombre" id="lblnombre" class="control-label">Nombre</label>
            <div class="controls">
              <input name="txtNombre" type="text" class="input-xlarge" id="txtNombre" />
            </div>
          </div>
          <div name="divapellido" id="divapellido" class="control-group">
            <label name="lblapellido" id="lblapellido" class="control-label">Apellidos</label>
            <div class="controls">
              <input name="txtApellidos" type="text" class="input-xlarge" id="txtApellidos" />
            </div>
          </div>
          <div name="divcorreo" id="divcorreo" class="control-group">
            <label name="lblcorreo" id="lblcorreo" class="control-label">Correo</label>
            <div class="controls">
              <input name="txtCorreo" type="text" class="input-xlarge" id="txtCorreo"/>
            </div>
          </div>
          <div name="divcomentario" id="divcomentario" class="control-group">
            <label name="lblcomentario" id="lblcomentario" class="control-label">Pedido o consulta</label>
            <div class="controls">
              <textarea name="txtComent" id="txtComent" rows="5" cols="30"></textarea>
            </div>
          </div>
          <div class="form-actions">
            <input type="submit" name="btnIngresarForm" value="Enviar" onclick="" class="btn btn-primary" />
            <input type="reset" name="btnLimpiar" id="btnLimpiar" onclick="PoneCursor()" class="btn" value="Limpiar" />
          </div>
        </fieldset>
      </form>
	  <?php
	  }else{
	  $mensaje="Mensaje del formulario de consultas";
	  $mensaje.= "\nNombre: ". $_POST['txtNombre'];
	  $mensaje.= "\nApellidos: ".$_POST['txtApellidos'];
	  $mensaje.= "\nCorreo: ". $_POST['txtCorreo'];
	  $mensaje.= "\nComentario: \n".$_POST['txtComent'];
	  $destino= "djhv92@hotmail.com";
	  $remitente = $_POST['txtCorreo'];
	  $asunto = "Mensaje enviado por: ".$_POST['txtNombre']." ".$_POST['txtApellidos'];
	  mail($destino,$asunto,$mensaje,"FROM: $remitente");
	?>
	<p><strong>Mensaje enviado, pronto nos pondremos en contacto con usted, gracias.</strong></p>
	<?php
	}
	?>
      </div>
      <br><br><br><br>
            <div class="container"></div>
		<br><br><br><br><br>
       </div>
    </body>
</html>