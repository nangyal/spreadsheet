<?php

namespace App\Model\Spreadsheet\SpreadsheetRead;#;

use App\Model\Spreadsheet\Spreadsheet;
use App\Interfaces\ReadInterface;

class SpreadsheetRead extends Spreadsheet implements ReadInterface
{
    public function read(): array
    {
        $response = $this->service->spreadsheets_values->get($this->spreadsheetId, $this->spreadsheetRangeRead);
        $values = $response->getValues();
        return $values;
    }
}
