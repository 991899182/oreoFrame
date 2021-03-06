<?php

namespace controller;

use oreo\lib\Controller;
use oreo\lib\View;
class Iframe extends Controller
{

    public function __construct(){
        parent::__construct();
        $this->auth();
    }

    public function errorHelp(){
        return View::display('error/error');
    }

    public function errorStateHelp(){
        return View::display('error/error_state');
    }

    //权限管理-添加-权限规则
    public function addPermission(){
        return View::display('iframe/auth/addPermission');
    }

    //权限管理-添加-角色
    public function addAdminRole(){
        return View::display('iframe/auth/addAdminRole');
    }

    //权限管理-编辑-角色
    public function editAdminRolePage(){
        return View::display('iframe/auth/editAdminRole');
    }

    //权限管理-编辑-角色权限
    public function editRoleAuthPage(){
        return View::display('iframe/auth/editRoleAuth');
    }

    //权限管理-添加-管理员
    public function addAdminPage(){
        return View::display('iframe/auth/addAdmin');
    }

    //权限管理-编辑-管理员
    public function editAdminPage(){
        return View::display('iframe/auth/editAdmin');
    }

    function __destruct(){}

}