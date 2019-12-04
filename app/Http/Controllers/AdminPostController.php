<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminPostController extends CBController {


    public function cbInit()
    {
        $this->setTable("post");
        $this->setPermalink("post");
        $this->setPageTitle("Post");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Title","title")->strLimit(150)->maxLength(255);
		$this->addWysiwyg("Content","content")->strLimit(150);
		$this->addImage("Image","image")->encrypt(true);
		

    }
}
