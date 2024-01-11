<?php

class ActivityController  extends Controller
{
    public function indexAction() {
        $model = new ActivityModel();
        $title = '网安专题';
        require ACTION_VIEW;
    }
}

