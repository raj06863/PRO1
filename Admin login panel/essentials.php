<?php
function adminlogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        redirect('adminlogin.php');
        exit;
    }
}

function redirect($url){
    window.location.href = $url;
    </script>;
}

function alert($type, $msg){
    echo '<div class="alert alert-'.$type.' alert-dismissible fade show custom-alert" role="alert">
    <strong class="me-3">'.$msg.'</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>