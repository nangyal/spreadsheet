<?php

namespace App\Model\Excel\ExcelRead;

use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Model\Excel\Excel;
use App\Interfaces\ReadInterface;

class ExcelRead  extends Excel implements ReadInterface
{
    public function read(): array
    {
        $file_name = $this->folder . $this->fileNameRead;
        $reader = IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(true);

        $spreadsheet = IOFactory::load($file_name);

        ///Aktuális
        $dataArray = $spreadsheet->getActiveSheet()
            ->rangeToArray(
                $this->rangeRead,     // The worksheet range that we want to retrieve
                null,        // Value that should be returned for empty cells
                true,        // Should formulas be calculated (the equivalent of getCalculatedValue() for each cell)
                true,        // Should values be formatted (the equivalent of getFormattedValue() for each cell)
                true         // Should the array be indexed by cell row and cell column
            );
        return $dataArray;
    }
}
