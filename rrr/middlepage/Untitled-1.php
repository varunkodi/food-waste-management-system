<?php 
    date_default_timezone_set("Asia/Calcutta");
    if("01:00:00">date("H:i:s")){
        echo "not Working".date("H:i:s");
    }
    else{
        echo "Working".date("H:i:s");;
    }

?>