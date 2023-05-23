<?php

namespace App\Model\Spreadsheet\SpreadsheetWrite;

use App\Model\Spreadsheet\Spreadsheet;
use App\Interfaces\WriteInterface;

class SpreadsheetWrite extends Spreadsheet implements WriteInterface
{
    public function write(): void
    {
        $valueRange = new \Google_Service_Sheets_ValueRange();
        $valueRange->setValues(["values" => "Time:" . date("H:i:s")]);
        $conf = ["valueInputOption" => "RAW"];
        $this->service->spreadsheets_values->update($this->spreadsheetId, $this->spreadsheetRangeWrite, $valueRange, $conf);
    }
}
