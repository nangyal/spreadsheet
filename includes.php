<?php

require 'vendor/autoload.php';

// Interfaces
require_once('interfaces/AppInterface.php');

// Controllers
require_once('controllers/MenuController.php');

// Models
require_once('models/ExcelModel.php');
require_once('models/ExcelReadModel.php');
require_once('models/ExcelWriteModel.php');

require_once('models/SpreadsheetModel.php');
require_once('models/SpreadsheetReadModel.php');
require_once('models/SpreadsheetWriteModel.php');

// Views
require_once('views/MenuView.php');
