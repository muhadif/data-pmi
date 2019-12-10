<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminDonorsController extends CBController {


    public function cbInit()
    {
        $this->setTable("donors");
        $this->setPermalink("donors");
        $this->setPageTitle("Donors");

        $this->addText("NIK","nik")->strLimit(150)->maxLength(255);
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addText("Address","address")->strLimit(150)->maxLength(255);
		$this->addSelectOption("Blood Type","blood_type")->options(['A+'=>'A+','A-'=>'A-','B+'=>'B+','B-'=>'B-','AB+'=>'AB+','AB-'=>'AB-','O+'=>'O+','O-'=>'O-']);

    }

}
