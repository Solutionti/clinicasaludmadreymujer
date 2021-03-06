<?php

$ginecologias = $ginecologia->result()[0];

// print_r($ginecologias);
$pdf=new FPDF();
$pdf->addpage();
$pdf->Image('public/img/theme/logo.png' , 10 ,9, 25 , 20,'png');

$pdf->SetFont('Times','',13);
$pdf->Ln(1);
$pdf->Cell(40,6,'', '', 0,'L', false );
$pdf->Cell(60,6,'CENTRO ESPECIALIZADO SALUD MADRE & MUJER', '', 0,'L', false );
$pdf->Ln(8);
$pdf->Cell(58,6,'', '', 0,'L', false );
$pdf->Cell(1,6,'HISTORIA CLINICA GINECOLOGICA', '', 0,'L', false );
$pdf->SetFont('Times','',9);
$pdf->Ln(12);
$pdf->Cell(35,6,'GINECOLOGIA (   )', '', 0,'L', false );
$pdf->Cell(45,6,'GINEC. ONCOLOGICA (    )', '', 0,'L', false );
$pdf->Cell(1,6,'FERTILIDAD (    )', '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(15,6,'FECHA:', '', 0,'L', false );
$pdf->Cell(115,6,$ginecologias->fecha, '', 0,'L', false );
$pdf->Cell(15,6,'HORA:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->hora, '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(40,6,'APELLIDOS Y NOMBRES:', '', 0,'L', false );
$pdf->Cell(120,6,$ginecologias->apellido." ".$ginecologias->pacientes, '', 0,'L', false);

$pdf->Ln(5);
$pdf->Cell(15,6,'EDAD:', '', 0,'L', false );
$pdf->Cell(115,6,$ginecologias->edad, '', 0,'L', false);
$pdf->Cell(15,6,'SEXO:', '', 0,'L', false );
$pdf->Cell(120,6,$ginecologias->sexo, '', 0,'L', false);
$pdf->SetFont('Times','B',9);
$pdf->Ln(5);
$pdf->Cell(15,6,'1. ANTECEDENTES', '', 0,'L', false );
$pdf->SetFont('Times','',9);
$pdf->Ln(5);
$pdf->Cell(28,6,'FAMILIARES:', '', 0,'L', false );
$pdf->Cell(120,6,$ginecologias->familiares, '', 0,'L', false);
$pdf->Ln(5);
$pdf->Cell(28,6,'PATOLOGICOS:', '', 0,'L', false );
$pdf->Cell(120,6,$ginecologias->patologicos, '', 0,'L', false);

$pdf->Ln(5);
$pdf->Cell(40,6,'GINECO - OBSTETRICOS:', '', 0,'L', false );
$pdf->Cell(120,6,$ginecologias->gineco_obstetrico, '', 0,'L', false);
$pdf->Ln(5);
$pdf->Cell(15,6,'FUM:', '', 0,'L', false );
$pdf->Cell(100,6,$ginecologias->fum, '', 0,'L', false );
$pdf->Cell(25,6,'RM (Ret. Menst):', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->rm, '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(27,6,'FLUJO GENITAL:', '', 0,'L', false );
$pdf->Cell(88,6,$ginecologias->flujo_genital, '', 0,'L', false );
$pdf->Cell(25,6,'No DE PAREJAS:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->no_de_parejas, '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(17,6,'GESTAS:', '', 0,'L', false );
$pdf->Cell(58,6,$ginecologias->gestas, '', 0,'L', false );
$pdf->Cell(20,6,'PARTOS:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->partos, '', 0,'L', false );
$pdf->Cell(25,6,'ABORTOS:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->abortos, '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(34,6,'ANTICONCEPTIVOS:', '', 0,'L', false );
$pdf->Cell(41,6,$ginecologias->anticonceptivos, '', 0,'L', false );
$pdf->Cell(20,6,'TIPO:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->tipo, '', 0,'L', false );
$pdf->Cell(25,6,'TIEMPO:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->tiempo, '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(42,6,'CIRUGIA GINECOLOGICA:', '', 0,'L', false );
$pdf->Cell(41,6,$ginecologias->cirugia_ginecologica, '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(15,6,'OTROS:', '', 0,'L', false );
$pdf->Cell(41,6,$ginecologias->otros, '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(27,6,'FECHA DE PAP:', '', 0,'L', false );
$pdf->Cell(88,6,$ginecologias->fecha_pap, '', 0,'L', false );
$pdf->Cell(25,6,'No DE HIJOS:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->no_hijos, '', 0,'L', false );
$pdf->SetFont('Times','B',9);
$pdf->Ln(7);
$pdf->Cell(27,6,'2. MOTIVO CONSULTA', '', 0,'L', false );
$pdf->SetFont('Times','',9);
$pdf->Ln(5);
$pdf->MultiCell(160, 5,$ginecologias->motivo_consulta, '', 'L', false);
$pdf->SetFont('Times','B',9);
$pdf->Ln(5);
$pdf->Cell(27,6,'3. SIGNOS Y SINTOMAS', '', 0,'L', false );
$pdf->SetFont('Times','',9);
$pdf->Ln(5);
$pdf->MultiCell(160, 5,$ginecologias->signossintomas, '', 'L', false);
$pdf->SetFont('Times','B',9);
$pdf->Ln(5);
$pdf->Cell(27,6,'4. EXAMEN FISICO', '', 0,'L', false );
$pdf->SetFont('Times','',9);

$pdf->Ln(5);
$pdf->Cell(40,6,'SIGNOS VITALES', '', 0,'L', false );
$pdf->Cell(12,6,'P/A:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->presion_arterial, '', 0,'L', false );
$pdf->Cell(10,6,'FR:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->frecuencia_respiratoria	, '', 0,'L', false );
$pdf->Cell(10,6,'FC:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->frecuencia_cardiaca, '', 0,'L', false );
$pdf->Cell(10,6,'T:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->temperatura, '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(15,6,'SPO2:', '', 0,'L', false );
$pdf->Cell(25,6,$ginecologias->saturacion, '', 0,'L', false );
$pdf->Cell(12,6,'PESO:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->peso, '', 0,'L', false );
$pdf->Cell(15,6,'TALLA:', '', 0,'L', false );
$pdf->Cell(15,6,$ginecologias->talla, '', 0,'L', false );
$pdf->Cell(10,6,'IMC:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->imc, '', 0,'L', false );
$pdf->Ln(7);
$pdf->Cell(24 ,6,'PIEL Y TCSC:', '', 0,'L', false );
$pdf->Cell(80,6,$ginecologias->piel_tscs, '', 0,'L', false );
$pdf->Cell(25,6,'TIROIDES:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->tiroides, '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(15,6,'MAMAS:', '', 0,'L', false );
$pdf->Cell(90,6,$ginecologias->mamas, '', 0,'L', false );
$pdf->Cell(32,6,'A. RESPIRATORIO:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->arespiratorio, '', 0,'L', false );

$pdf->Ln(5);
$pdf->Cell(40,6,'A.CARDIOVASCULAR:', '', 0,'L', false );
$pdf->Cell(65,6,$ginecologias->acardiovascular, '', 0,'L', false );
$pdf->Cell(28,6,'ABDOMEN:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->abdomen, '', 0,'L', false );

$pdf->Ln(5);
$pdf->Cell(40,6,'A. GENITO - URINARIO:', '', 0,'L', false );
$pdf->Cell(65,6,$ginecologias->genito_urinario, '', 0,'L', false );
$pdf->Cell(28,6,'TACTO RECTAL:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->tacto_rectal, '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(27,6,'LOCOMOTOR:', '', 0,'L', false );
$pdf->Cell(78,6,$ginecologias->locomotor, '', 0,'L', false );
$pdf->Cell(35,6,'SISTEMA NERVIOSO:', '', 0,'L', false );
$pdf->Cell(20,6,$ginecologias->sistema_nervioso, '', 0,'L', false );
$pdf->SetFont('Times','B',9);

$pdf->Ln(7);
$pdf->Cell(27,6,'5. EXAMENES AUXILIARES', '', 0,'L', false );
$pdf->SetFont('Times','',8);
$pdf->Ln(5);
$pdf->MultiCell(160, 5,$ginecologias->examenes_auxiiliares, '', 'L', false);
$pdf->SetFont('Times','B',8);
$pdf->Ln(5);
$pdf->Cell(27,6,'6. DIAGNOSTICO (CIE10)', '', 0,'L', false );
$pdf->Ln(5);
$pdf->SetFont('Times','',8);
foreach($diagnostico->result() as $diagnosticos){

$pdf->MultiCell(160, 5,$diagnosticos->clave." - ".$diagnosticos->descripcion, '', 'L', false);
}
$pdf->SetFont('Times','B',8);
$pdf->Ln(2);
$pdf->Cell(27,6,'7. PLAN DE TRABAJO', '', 0,'L', false );
$pdf->SetFont('Times','',8);
$pdf->Ln(5);
$pdf->MultiCell(160, 5,$ginecologias->plan_trabajo, '', 'L', false);
$pdf->SetFont('Times','B',8);
$pdf->Ln(5);
$pdf->Cell(27,6,'8. TRATAMIENTO', '', 0,'L', false );
$pdf->SetFont('Times','',8);
$pdf->Ln(5);
$pdf->MultiCell(160, 5,$ginecologias->tratamiento, '', 'L', false);
$pdf->SetFont('Times','B',8);
$pdf->Ln(3);
$pdf->Cell(40,6,'PROXIMA CITA', '', 0,'L', false );
$pdf->Cell(90,6,$ginecologias->proxima_cita, '', 0,'L', false );
$pdf->Cell(115,6,'FIRMA DEL MEDICO', '', 0,'L', false );
$pdf->Ln(5);
$pdf->Cell(40,6,'', '', 0,'L', false );
$pdf->Cell(90,6,'', '', 0,'L', false );
$pdf->Cell(115,6,'_____________________________', '', 0,'L', false );
$pdf->Output();

?>