<?php

class WebsiteController  extends Controller
{
    public function indexAction() {
        $model = new WebsiteModel();
        //首页动态版块数据

        $title = '关于西电';
        require ACTION_VIEW;
    }

}

