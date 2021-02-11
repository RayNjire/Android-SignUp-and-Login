<?php
    class DataBaseConfig
    {
        public $servername;
        public $username;
        public $password;
        public $databasename;

        public function __construct()
        {
            $this->servername = '192.168.123.189:8080';
            $this->username = 'root';
            $this->password = '159357';
            $this->databasename = 'android_signupandlogin';

        }
    }
?>
