<?php
    require "DataBaseConfig.php";

    class DataBase
    {
        public $connect;
        public $data;
        private $sql;
        protected $servername;
        protected $username;
        protected $password;
        protected $databasename;

        public function __construct()
        {
            $this->connect = null;
            $this->data = null;
            $this->sql = null;
            $dbc = new DataBaseConfig();
            $this->servername = $dbc->servername;
            $this->username = $dbc->username;
            $this->password = $dbc->password;
            $this->databasename = $dbc->databasename;
        }

        function dbConnect()
        {
            $this->connect = mysqli_connect($this->servername, $this->username, $this->password, $this->databasename);
            return $this->connect;

        }

        function prepareData($data)
        {
            return mysqli_real_escape_string($this->connect, stripslashes(htmlspecialchars($data)));

        }

        function logIn($table, $username, $password)
        {
            $username = $this->prepareData($username);
            $password = $this->prepareData($password);
            $this->sql = "select * from " . $table . " where username = '" . $username . "'";
            $result = mysqli_query($this->connect, $this->sql);
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) != 0)
            {
                $dbusername = $row['username'];
                $dbpassword = $row['password'];
                if ($dbusername == $username && password_verify(MD5($password), $dbpassword))
                {
                    $login = true;

                }

                else $login = false;

            }

            else $login = false;

            return $login;

        }

        function signUp($table, $userid, $firstname, $lastname, $emailaddress, $username, $password)
        {
            $userid = $this->prepareData($userid);
            $firstname = $this->prepareData($firstname);
            $lastname = $this->prepareData($lastname);
            $emailaddress = $this->prepareData($emailaddress);
            $username = $this->prepareData($username);
            $password = $this->prepareData($password);
            
            #$password = MD5($password, PASSWORD_DEFAULT);
            $this->sql = "INSERT INTO " . $table . " (userid, firstname, lastname, emailaddress, username, password) VALUES ('','" . $firstname . "','" . $lastname . "','" . $emailaddress . "','" . $username . "', MD5('" . $password . "')";
            if (mysqli_query($this->connect, $this->sql))
            {
                return true;
                
            }
            
            else return false;
            
        }
    }

