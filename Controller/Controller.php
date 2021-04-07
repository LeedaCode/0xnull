<?php

class Controller{
    public function __construct()
    {
        $this->upload = new Null\upload\upload();
        $this->smart = new Smarty();
        $this->smart->template_dir = __D__."/public/";
        $this->smart->assign("UI_CSS","./public/UI/semantic.css");
        $this->smart->assign("UI_JS","./public/UI/semantic.js");
        $this->smart->assign("UI_JQ","./public/UI/jq.js");
    }
}


?>