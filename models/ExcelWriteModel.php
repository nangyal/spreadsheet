<?php

namespace App\Model\Excel\ExcelWrite;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as XlsxWriter;
use App\Model\Excel\Excel;
use App\Interfaces\WriteInterface;

class ExcelWrite extends Excel implements WriteInterface
{
    public function write(): Bool
    {
        $file_name = $this->folder . date("H-i-s_") . $this->fileNameWrite;
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue($this->rangeWrite, date("Y-m-d H:i:s"));

        $writer = new XlsxWriter($spreadsheet);
        $writer->save($file_name);
        return true;
    } 
}
