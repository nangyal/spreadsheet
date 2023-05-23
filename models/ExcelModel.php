<?php

namespace App\Model\Excel;

class Excel
{
    protected $folder;
    protected $fileNameWrite;
    protected $fileNameRead;
    protected $rangeWrite;
    protected $rangeRead;


    public function __construct()
    {
        $this->rangeWrite = $_ENV['EXCEL_RANGE_WRITE'];
        $this->rangeRead = $_ENV['EXCEL_RANGE_READ'];
        $this->fileNameWrite = $_ENV['EXCEL_FILE_NAME_WRITE'];
        $this->fileNameRead = $_ENV['EXCEL_FILE_NAME_READ'];
        $this->folder = $_ENV['EXCEL_FOLDER'];
    }
}
