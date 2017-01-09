<?= form_open('/cursos/recibirdatos')?><!-- etiqueta que va a abrir el formulario , crea el formulario y su ruta-->
<?php
$nombre = array(
    'name'      => 'nombre',
    'placeholder' => 'Escribe tu nombre'
);
$videos = array(
    'name'        => 'videos',	
    'placeholder' => 'Cantidad de videos' // envio estos arreglos al form_input
);
?>

<?= form_label('Nombre:', 'nombre') ?> <!-- label de php -->
<?= form_input($nombre)?><!-- recibe parametros de un arreglo-->
<br/><br/>
<?= form_label('Numero de videos:', 'videos') ?> <!-- label de php -->
<?= form_input($videos)?>
<?= form_submit('', 'Subir Curso')  ?> <!--  primer pametro nombre para el submit-->
<?= form_close() ?>


</body>
</html>
