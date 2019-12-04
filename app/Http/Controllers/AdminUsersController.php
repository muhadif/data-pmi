<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminUsersController extends CBController {


    public function cbInit()
    {
        $this->setTable("users");
        $this->setPermalink("users");
        $this->setPageTitle("Users");

        $this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addEmail("Email","email");
		$this->addSelectTable("Cb Role","cb_roles_id",["table"=>"cb_roles","value_option"=>"id","display_option"=>"name","sql_condition"=>""]);
		

    }
}
