<?php

require_once("../mpdf/mpdf.php");
$mpdf=new mPDF();
$mpdf->SetImportUse();
$pagecount = $mpdf->SetSourceFile('Authorization-letter-anex1-2-May-2019-15-05-46_blank.pdf');
$tplId = $mpdf->ImportPage($pagecount);
$mpdf->UseTemplate($tplId);


//$mpdf->WriteHTML('<div style="position: absolute; bottom: 20mm; right: 10mm; width: 30mm;border:1px solid black;">Pdf is Digitally Verified/Signed</div>');

$mpdf->WriteHTML('<div style="position: absolute; bottom: 20mm; right: 10mm; width: 40mm;">
Digitally signed by Shreebanti Paria
</div>');
$mpdf->Output();


?>

