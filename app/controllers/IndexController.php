<?php
// +----------------------------------------------------------------------
// | 默认控制器 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
namespace App\Controllers;

use App\Logics\System;

class IndexController extends Controller
{
    /**
     * @desc
     * @author limx
     * @return bool|\Phalcon\Mvc\View
     */
    public function indexAction()
    {
        return $this->view->render('index', 'index');
    }

    public function versionAction()
    {
        $iv = (new System())->version();
        $data = $this->request->get();
        $headers = $this->request->getHeaders();
        $json = $this->request->getJsonRawBody();
        $result = [
            'iv' => $iv,
            'data' => $data,
            'headers' => $headers,
            'json' => $json,
        ];
        return self::success($result);
    }
}