<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

	class Exportexcel 
	{
		function __construct()
		{         
			$CI =& get_instance();
			//load excel library
			$CI->load->library('excel');
			//Estilos para los titulos
			$this->estiloTituloColumnas = array(
				'font' => array(
					'bold'      => true
				),
				'alignment' =>  array(
					'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
					'wrap'       => FALSE
				));

			$this->chart = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
								'AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ',
								'BA','BB','BC','BD','BE','BF','BG','BH','BI','BJ','BK','BL','BM','BN','BO','BP','BQ','BR','BS','BT','BU','BV','BW','BX','BY','BZ');
		}

		public function index()
		{
			//$this->load->view('v_frmlogin');
			echo "Hola Mundo...!";
		}

		/**oscar.espitia reporte generico */
		public function excel_generico($registros, $fileNames = 'sin_nombre.xlsx', $title = "")
		{
			//inicializamos PhpExcel
			$objPHPExcel = new PHPExcel();
			$objPHPExcel->getProperties()
				->setCreator("Facturación")
				->setLastModifiedBy("Facturación")
				->setTitle($title)
				->setSubject("Archivo".$title)
				->setDescription("Archivo $title generado ".date('Y-m-d'))
				->setKeywords("Archivo Excel $title")
				->setCategory("Excel $title");
				$objPHPExcel->setActiveSheetIndex(0);
				$objPHPExcel->getActiveSheet()->setTitle($title);
				// set Header
				$l = 0;
				$arra_temo = [];
				$letr = '';
				foreach ($registros->list_fields() as $field)
				{
					$objPHPExcel->getActiveSheet()->SetCellValue($this->chart[$l].'1', $field);
					$arra_temo[$this->chart[$l]] = $field;
					$l++;
					$letr = $this->chart[$l];
				}
				$i=2;
				foreach ($registros->result_array() as $value) 
				{
					foreach ($arra_temo as $key => $field)
					{
						$objPHPExcel->getActiveSheet()->SetCellValue($key.$i, $value[$field]);
					}
					$i++;
				}
				//autosize para los titulos  
				foreach($arra_temo as $columnID => $val) {
					$objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
				}
				$objPHPExcel->getActiveSheet()->getStyle('A1:'.$letr.'1')->applyFromArray($this->estiloTituloColumnas);
				//Cabeceras para descargar el archivo
     			$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
				$sFileLink = FTP_URL.'temp_folder/'.$fileNames;
				@unlink($sFileLink);
				$objWriter->save($sFileLink);
				redirect(base_url('temp_folder/'.$fileNames));

		} //excel_generico

}//End Class
?>