<?php

namespace App\Controller;

use App\View\MenuView;
use App\Model\Excel\ExcelRead\ExcelRead;
use App\Model\Excel\ExcelWrite\ExcelWrite;
use App\Model\Spreadsheet\SpreadsheetRead\SpreadsheetRead;
use App\Model\Spreadsheet\SpreadsheetWrite\SpreadsheetWrite;


class MenuController
{
    private $command;
    public function __construct(array $command)
    {
        $this->cliCheck();
        $this->commandCheck($command);
    }

    private function commandCheck(array $command): void
    {
        if (isset($command[1])) {
            $this->selectFunction($command[1]);
        } else {
            MenuView::printMissingCommand();
            MenuView::printMenu();
        }
    }

    private function selectFunction(string $command): void
    {
        
        switch ($command) {

            case "read_spreadsheet":
                $spreadsheetRead = new SpreadsheetRead();
                $response = $spreadsheetRead->read();
                MenuView::printReadResults($response);
                break;

            case "write_spreadsheet":
                $spreadsheetWrite = new SpreadsheetWrite();
                $response = $spreadsheetWrite->write();
                MenuView::printWriteSuccessful();
                break;

            case "read_excel":
                $excelRead = new ExcelRead();
                $response = $excelRead->read();
                MenuView::printReadResults($response);  
                break;

            case "write_excel":
                $excelWrite = new ExcelWrite();
                $response = $excelWrite->write();
                MenuView::printWriteSuccessful();
                break;
                
            default:
                MenuView::printWrongCommand();
                MenuView::printMenu();
        }
    }

    private function cliCheck(): void
    {
        if (PHP_SAPI !== 'cli') {
            MenuView::printMenu();
        }
    }
}
