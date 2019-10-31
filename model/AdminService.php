<?php
    require_once('DB.php');
    //执行具体的任务
    class AdminService{
        public $db;

        function __construct(){
            $this->db = $db;
        }
        function adminlogin($name,$pwd){
            $sql = "select password from admin where adminname = '{$name}'";
            $res = $this->db->con->query($sql); // 返回值是一个对象，里面是关联数组
            if($res->num_rows == 0){
                //用户未注册
                echo '{"code":"0"}';
            }else if($res->num_rows>0){
                //用户已注册
                $obj = mysqli_fetch_assoc($res);
                $r = $obj['password'];
                if($r == $pwd){
                    echo '{"code":"1"}';//登录成功
                }else{
                    echo '{"code":"2"}';//密码验证不成功
                }
            }
            
        }
      
    }
?>