<?php

class KnowledgeController  extends Controller
{
    public function AsianAction() {
        $model = new KnowledgeModel();
        $title = '网络空间安全';
        require ACTION_VIEW;
    }
    public function AfricaAction() {
        $model = new KnowledgeModel();
        $title = '网络空间安全实验班';
        require ACTION_VIEW;
    }
    public function AmericaAction() {
        $model = new KnowledgeModel();
        $title = '信息安全';
        require ACTION_VIEW;
    }
    public function OceaniaAction() {
        $model = new KnowledgeModel();
        $title = '网络工程';
        require ACTION_VIEW;
    }
    public function OtherAction() {
        $model = new KnowledgeModel();
        $title = '密码学';
        require ACTION_VIEW;
    }
}

