
<?php
require ('../../fpdf185/fpdf.php');
include_once '../script/readFile.php';
class PDF extends FPDF{

public function Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link=''){
    $txt = utf8_decode($txt);
    parent::Cell($w, $h, $txt, $border, $ln, $align, $fill, $link);
}

function LoadData($file){
    $lines = file($file);
    $data = array();
        foreach($lines as $line)
                $data[] = explode(';',trim($line));
        return $data;
}

function tabela($data){

    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    
    $fill = false;
    $w = array(40, 25, 80, 45);
    $this->Cell(array_sum($w),0,'','B');
    $this->Ln();

    
    foreach($data as $row)
    {
        $this->Cell(40,6,$row[0],'LR',0,'C',$fill);
        $this->Cell(25,6,$row[1],'LR',0,'C',$fill);
        $this->Cell(80,6,$row[2],'LR',0,'C',$fill);
        $this->Cell(45,6,$row[3],'LR',0,'C',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
$data = $pdf->LoadData('../database/alunos.csv');
$pdf->SetFont('Arial','',10);
$pdf->AddPage();
$pdf->tabela($data);
$pdf->Output();
?>

