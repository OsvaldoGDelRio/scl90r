<?php declare(strict_types=1);
if (!isset($_POST['frase1'])) {
    header('Location: http://localhost/scl90r/web/index.php');
}
use src\Factory;

require_once __DIR__ . '/../vendor/autoload.php';
$factory = new Factory();
$formulario = [];

foreach ($_POST as $key => $value) {
    $formulario[$key] = htmlentities($value);
    $formulario[$key] = strip_tags($value);
}

$scl = $factory->crear('src\factory\PruebaScl90R', $formulario);
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Resultados prueba SCL90R - Síntomas de psicosis</title>
        <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
    </head>
    <body>
    <h1>Resultados de la prueba</h1>
    <textarea name="editor1" id="editor1" rows="10" cols="80">
    Nombre:
    <p></p>
    <table align="center" border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td><strong>Frase</strong></td>
			<td><strong>Molestia</strong></td>
			<td><strong>Puntos</strong></td>
		</tr>
		<tr>
			<td>1. <?php echo $scl->frase()->frase1()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase1()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase1()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>2. <?php echo $scl->frase()->frase2()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase2()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase2()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>3. <?php echo $scl->frase()->frase3()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase3()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase3()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>4. <?php echo $scl->frase()->frase4()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase4()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase4()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>5. <?php echo $scl->frase()->frase5()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase5()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase5()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>6. <?php echo $scl->frase()->frase6()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase6()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase6()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>7. <?php echo $scl->frase()->frase7()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase7()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase7()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>8. <?php echo $scl->frase()->frase8()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase8()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase8()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>9. <?php echo $scl->frase()->frase9()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase9()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase9()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>10. <?php echo $scl->frase()->frase10()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase10()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase10()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>11. <?php echo $scl->frase()->frase11()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase11()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase11()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>12. <?php echo $scl->frase()->frase12()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase12()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase12()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>13. <?php echo $scl->frase()->frase13()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase13()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase13()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>14. <?php echo $scl->frase()->frase14()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase14()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase14()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>15. <?php echo $scl->frase()->frase15()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase15()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase15()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>16. <?php echo $scl->frase()->frase16()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase16()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase16()->valorNumero(); ?></td>
		</tr>
		<tr>
			<td>17. <?php echo $scl->frase()->frase17()->fraseTexto(); ?></td>
			<td><?php echo $scl->frase()->frase17()->valorTexto(); ?></td>
			<td><?php echo $scl->frase()->frase17()->valorNumero(); ?></td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>
<table border="1" cellpadding="1" cellspacing="1" style="width:100%">
	<tbody>
		<tr>
			<td><strong>Puntos</strong></td>
			<td><strong>Nivel de molestia</strong></td>
		</tr>
		<tr>
			<td><?php echo $scl->molestia()->numero(); ?></td>
			<td><?php echo $scl->molestia()->texto(); ?></td>
		</tr>
	</tbody>
</table>

    </textarea>
    </body>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
</html>
