<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminBloodStocksController extends CBController {


    public function cbInit()
    {
        $this->setTable("blood_stocks");
        $this->setPermalink("blood_stocks");
        $this->setPageTitle("Blood Stocks");

        $this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addText("Stock","stock")->strLimit(150)->maxLength(255);
		

    }
}
