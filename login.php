<?php
    require "DataBase.php";
    $db = new DataBase();
    if (isset($_POST['username']) && isset($_POST['password']))
    {
        if ($db->dbConnect())
        {
            if ($db->logIn("kemfri_users", $_POST['username'], $_POST['password']))
            {
                echo "Login Successful";
                
            }
            
            else echo "Username or Password is Wrong";
            
        }

        else echo "Error: Database connection";
        
    }
    
    else echo "All fields are required";

