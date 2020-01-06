<?php ob_start(); ?>
<h2>Lista de usuarios</h2>
<table width="500px" cellpadding="5px" cellspacing="5px" border="1">
  <tr bgcolor="#CCCCCC">
      <td>Nombre</td>
      <td>Apellido</td>
      <td>Email</td>
      <td>Edad</td>
      <td>Banco</td>
      <td>Primera Cuota</td>
  </tr>
  <tr bgcolor="#FF9933">
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>Banco de Chile</td>
      <td></td>
  </tr>
</table>
<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = "ejemplo.pdf";
file_put_contents($filename, $pdf);
$dompdf->stream($filename);
?>
