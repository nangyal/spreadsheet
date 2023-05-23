<?php

namespace App\Model\Spreadsheet;

class Spreadsheet
{
    protected $spreadsheetId;
    protected $spreadsheetRangeWrite;
    protected $spreadsheetRangeRead;
    protected $service;

    public function __construct()
    {
        $this->spreadsheetRangeWrite = $_ENV['SPREADSHEET_RANGE_WRITE'];
        $this->spreadsheetRangeRead = $_ENV['SPREADSHEET_RANGE_READ'];
        $this->spreadsheetId = $_ENV['SPREADSHEET_ID'];
        $this->googleApiClient();
    }

    private function googleApiClient()
    {
        $client = new \Google_Client();
        $client->setApplicationName('Google Sheets API');
        $client->setScopes(implode(
            ' ',
            array(
                \Google_Service_Sheets::SPREADSHEETS
            )
        ));
        $client->setAccessType('offline');
        $path = 'credentials.json';
        $client->setAuthConfig($path);
        $this->service = new \Google_Service_Sheets($client);
    }
}

