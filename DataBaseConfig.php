<?php
    class DataBaseConfig
    {
        public $servername;
        public $username;
        public $password;
        public $databasename;
        
        public function __construct()
        {
            $this->servername = 'sql112.epizy.com';
            $this->username = 'epiz_27906195';
            $this->password = 'Df46BqALqFgzbAA';
            $this->databasename = 'epiz_27906195_android_tidepredictions';
            
            
            /** //infinityfree.com
             * $this->servername = 'sql112.bytecluster.com'; or maybe 'sql112.epizy.com';
             * $this->username = 'epiz_27906195';
             * $this->password = 'Df46BqALqFgzbAA';
             * $this->databasename = 'epiz_27906195_android_tidepredictions';
             *
             * //freemysqlhosting.net
             * $this->servername = 'sql7.freemysqlhosting.net';
             * $this->username = 'sql7392265';
             * $this->password = 'Kfx2yziIGM';
             * $this->databasename = 'sql7392265';
             *
            */
        }
    }

