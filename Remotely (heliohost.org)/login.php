<?php
    require "DataBase.php";
    $db = new DataBase();
    if ($db->dbConnect())
    {
        if (isset($_POST['username']) && isset($_POST['password']))
        {
            if ($db->loginUserName("kemfri_users", $_POST['username'], $_POST['password']))
            {
                echo "Login Successful";
            
            }
            
            else echo "The Username or Password is Incorrect";
    
        }
    
        else if (isset($_POST['emailaddress']) && isset($_POST['password']))
        {
            if ($db->loginEmail("kemfri_users", $_POST['emailaddress'], $_POST['password']))
            {
                echo "Login Successful";
            
            }
            
            else echo "The Email or Password is Incorrect";
            
        }
        
        else echo "All fields are required";
        
    }

    else echo "Error: Database connection";
    
    
    
    
    
    
    
    
    