<?php
session_start();
include_once("./control/globel.php");
include_once("./control/function.php");

if(!isset($_POST['submit'])){
    if(!isset($_REQUEST['page'])){
        if(!isset($_REQUEST['usrp'])){
            require_once($_FRAME['home']);
        }else{
            if($_REQUEST['usrp'] === "adm"){

            }elseif($_REQUEST['usrp'] === "cli"){

            }else{
                session_destroy();
                header("location: user=user-portal-invaild");
            }
        }
    }else{
        switch($_REQUEST['page']){

            case"signin";
                require_once($_FRAME['login']);
            break;

            case"contact";
                require_once($_FRAME['contact']);
            break;

            case"book";
                if(!isset($_REQUEST['cata'])){
                    require_once($_FRAME['404']);
                }else{
                   switch($_REQUEST['cata']){
                        
                        case"sst";
                            $collection = json_decode(ProcessFile("sst/ebook/*"),true);
                            require_once($_FRAME['book']);
                        break;
                   }
                }
            break;
        }
    }
}else{
    switch($_REQUEST['submit']){

        case"login";
            $usrn = $_REQUEST['username'];
            $pwd = $_REQUEST['password'];
            if($usrn != "admin" && $pwd != "pass"){
               header("location: usrp=cli&ui=dashboard");
            }else{
                header("location: usrp=adm&ui=dashboard");
            }
        break;

    }
}

?>