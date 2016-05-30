<?php
/**
 * Created by PhpStorm.
 * User: arthaleon
 * Date: 11/10/15
 * Time: 8:12 AM
 */

include './vendor/autoload.php';

$mpdf = new mPDF();
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
$mpdf->WriteHTML(file_get_contents('template.html'));
$mpdf->Output('preview.pdf', 'I');