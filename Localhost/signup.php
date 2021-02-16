<?php
    require "DataBase.php";
    $db = new DataBase();
    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['emailaddress']) && isset($_POST['username']) && isset($_POST['password']))
    {
        if ($db->dbConnect())
        {
            if ($db->signUp("kemfri_users", $_POST['firstname'], $_POST['lastname'], $_POST['emailaddress'], $_POST['username'], $_POST['password']))
            {
                echo "Sign Up Successful";
                
            }
            
            else echo "Sign Up Failed, UserName or Email is already in use";
            
        }
        
        else echo "Error: Database connection";
        
    }

    else echo "All fields are required";


