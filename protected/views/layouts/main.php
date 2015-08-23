<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<!-- Bootstrap -->
    <link href="../miaplicacion1/css/css/bootstrap.min.css" rel="stylesheet">
    <link href="../miaplicacion1/css/css/style.css" rel="stylesheet">
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title>Pagina web Proyecto</title>
 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<center>
<br><br>
<body>
  <div id="logo"><span class="izquierda">Tu Logo</span>&nbsp&nbsp&nbsp&nbsp<span class="derecha"><div id="mainmenu">
    <?php $this->widget('zii.widgets.CMenu',array(
      'items'=>array(
        array('label'=>'Inicio', 'url'=>array('/site/index')),
        array('label'=>'Quienes Somos', 'url'=>array('/site/page', 'view'=>'about')),
        array('label'=>'Servicios', 'url'=>array('/site/contact')),
        array('label'=>'Clientes', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
        array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
      ),
    )); ?></span></center>
  </div><!-- mainmenu --></div>
    </div><!-- header -->
		<div id="imagenindex"><IMG SRC="http://footage.framepool.com/shotimg/qf/750684193-cuidador-paso-venir-desarrollo.jpg"></div>
<div class="container" id="page">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
</div><!-- page -->
<div id="footer"><span class="derecha"><br><br>
		Copyright &copy; <?php echo date('Y'); ?> by Mi Compañia.<br/>
		Todos los derechos Reservados.<br/>
	</div><!-- footer --></span>
 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../miaplicacion1/js/bootstrap.min.js"></script>
</body>
</html>
