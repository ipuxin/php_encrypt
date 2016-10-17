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
            /**
             * string md5  ( string $str  [, bool $raw_output  = false  ] )
             * 如果可选的 raw_output 被设置为 TRUE ，那么 MD5 报文摘要将以16字节长度的原始二进制格式返回。
             * 32个字节
             * 828f238a4e0db69b11874d8320cb6448
             */
            $data['password'] = md5(md5(md5($_POST['password']), true) . 'ipuxin521');
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
            $res['pass'] = $user['password'];
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
                $res['data'] = "用户名或密码未填写";
            } else {
                $data['username'] = I('post.username');
                $data['password'] = md5(md5(md5(I('post.password')), true) . 'ipuxin521');
                $mess = M('user')->where($data)->find();
                if ($mess) {
                    $res['result'] = 1;
                    $res['data'] = "登录成功,O(∩_∩)O~";
                    $_SESSION = $mess;
                } else {
                    $res['result'] = 0;
                    $res['data'] = "账户名或密码错误";
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