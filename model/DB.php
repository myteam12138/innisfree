<?php
    class DB{
        private $host = 'localhost';
        private $username = 'team12138';
        private $password = '123456';
        private $database = 'innisfree';
        public $con;
        function __construct(){
            $this->con = connect();
            $this->con->query("set names utf8");
        }
        //连接数据库
        function connect(){
            $this->con = new mysqli($this->host,$this->username,$this->password,$this->database);
            if($this->con->connect_error){
                die($this->con->connect_error);
            }
        }
        //执行sql语句
        function querySql($sql){
            $res = $this->con->query($sql);
            $dtype = gettype($res);
            if($dtype === 'object'){
                return $res->fetch_all(MYSQLI_ASSOC);
            }else{
                return $res;
            }
        }

    }
    

    
?>