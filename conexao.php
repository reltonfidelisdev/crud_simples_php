<?php

        try{
            $conn = new PDO("mysql:host=localhost;dbname=crud","root","Passw0rd");

            //Set PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOExeption $e){
            return $e->getMessage();
        }
