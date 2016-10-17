<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller
{
    public function reg()
    {
        if (!$_POST['username'] || !$_POST['password'] || !$_POST['nickname']) {
            $res['result'] = 0;
            $res['data'] = "信息有误啦";
        } else {
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $data['nickname'] = $_POST['nickname'];
            $findmess['username'] = I('post.username');
            $user = M('user')->where($findmess)->find();

            if ($user) {
                //User exists
                $res['result'] = 0;
                $res['data'] = "用户已存在";
            } else {
                //No user exists
                $addres = M('user')->add($data);
                $res['result'] = 1;
                $res['data'] = "注册成功,请登录,O(∩_∩)O~";
            }
        }
        echo json_encode($res);
    }

    public function regmd5()
    {
        if (0) {
            $res['result'] = 0;
            $res['data'] = "信息有误啦";
        } else {
            $data['username'] = $_POST['username'];
            $data['password'] = md5($_POST['password']);
            $data['nickname'] = $_POST['nickname'];
            $findmess['username'] = I('post.username');
            $user = M('user')->where($findmess)->find();

            if ($user) {
                //User exists
                $res['result'] = 0;
                $res['data'] = "用户已存在";
            } else {
                //No user exists
                $addres = M('user')->add($data);
                $res['result'] = 1;
                $res['data'] = "注册成功,请登录,O(∩_∩)O~";

            }
            $res['pass']=$user['password'];
        }

        echo json_encode($res);
    }


    public function add()
    {
        echo '{"result":"1","data":"dddd"}';
    }

    public function login()
    {
        if ($_SESSION['username']) {
            $res['result'] = 1;
            $res['data'] = "you have logined";
        } else {
            if (!$_POST['username'] || !$_POST['password']) {
                $res['result'] = 0;
                $res['data'] = "信息错误";
            } else {
                $data['username'] = I('post.username');
                $data['password'] = I('post.password');
                $mess = M('user')->where($data)->find();
                if ($mess) {
                    $res['result'] = 1;
                    $res['data'] = "登录成功,O(∩_∩)O~";
                    $_SESSION = $mess;
                } else {
                    $res['result'] = 0;
                    $res['data'] = "account error password error";
                }
            }
        }
        echo json_encode($res);
    }

    public function logout()
    {
        session_destroy();
        $res['result'] = 1;
        $res['data'] = "退出成功";
        echo json_encode($res);
    }
}