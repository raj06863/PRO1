<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();
if (isset($_POST['get_settings'])) {
    $q = select("SELECT * FROM `settings` WHERE `sr_no`=?", [1], );
    $values = [1];
    $res = select($q, $values, 'i');
    $data = mysqli_fetch_assoc($res);
    $json_data=Json_encode($data);
    echo $json_data;    
}
if(isset($_POST['upd_general']))
{
   $frm_data = filteration($_POST);
   $q = "UPDATE `settings` SET `site_title`=?, `site_about`=?,'site_about_inp'=?, 'site_title_inp'=? WHERE `sr_no`=?";
   $values = [$frm_data['site_title'], $frm_data['site_about'],$frm_data['site_about_inp'],$frm_data['site_title_inp'], 1];
   $res = update($q, $values, 'ssssi');
    echo $res;
}

if(isset($_POST['upd_shutdown']))
{
   $frm_data = filteration($_POST['upd_shutdown']=='true')?1:0;
   $q = "UPDATE `settings` SET `shutdown_mode`=? WHERE `sr_no`=?";
   $values = [$frm_data['shutdown_mode'], 1];
   $res = update($q, $values, 'si');
    echo $res;
}
?>