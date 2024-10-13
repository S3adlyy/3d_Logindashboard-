<?php
    class compte{
        private $email;
        private $password;
        private $confirme;

        function __construct($email,$password,$confirme){
            $this->email=$email;
            $this->password=$password;
            $this->confirme=$confirme;
        }

        function verif(){
            if (empty($this->email) || empty($this->password) || empty($this->confirme)) {
                return false; 
            }
            return true;
        }
    }
    if($_SERVER["REQUEST_METHOD"] =='post'){
        $compte=new compte($_POST["email"],$_POST["password"],$_POST["passwordd"]);
        if($compte->verif()){
            header("Location:index.php");
            exit();
        }else{
            header("Location:compte.php");
            exit();
        }
    }else{
        header("Location:index.php");
        exit();
    }



?>