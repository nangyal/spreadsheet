<?php

namespace App\View;

class MenuView
{

    public static function printMenu()
    {
        echo "\n";
        echo "Available commands:\n";
        echo "- read_spreadsheet: Read data from a google spreadsheet\n";
        echo "- write_spreadsheet: Write data to a google spreadsheet\n";
        echo "- read_excel: Write data to an excel file\n";
        echo "- write_excel: Read data from an excel file\n";
        echo "\n";
    }

    public static function printMissingCommand()
    {
        echo "\n";
        echo "Missing command!\n";
    }

    public static function printWrongCommand()
    {
        echo "\n";
        echo "Wrong command!\n";
    }

    public static function printWriteSuccessful()
    {
        echo "\n";
        echo "The writing is successful!\n";
    }

    public static function printCliError()
    {
        echo "\n";
        echo "This application must be run from the command line.\n";
    }

    public static function printReadResults(array $data)
    {
        echo "\n";
        echo "The result:\n";
        print_r($data);
        echo "\n";
    }
}
