<?php

//linux only

//config
$parameter = '-';
$PSDK_APPID="appid";
$PSDK_SAFE="safe_name";
$PSDK_FOLDER="root";
$PSDK_OBJECT="object_name";
$PSDK_PATH="/opt/CARKaim/sdk/clipasswordsdk";

//Get data using cli PasswordSDK
$dbusername = shell_exec('"'.$PSDK_PATH.'" GetPassword '.$parameter.'p AppDescs.AppID="'.$PSDK_APPID.'" '.$parameter.'p Query="safe='.$PSDK_SAFE.';Folder='.$PSDK_FOLDER.';Object='.$PSDK_OBJECT.'" '.$parameter.'p RequiredProps="Address,Username" '.$parameter.'o Passprops.Username');
$dbpassword = shell_exec('"'.$PSDK_PATH.'" GetPassword '.$parameter.'p AppDescs.AppID="'.$PSDK_APPID.'" '.$parameter.'p Query="safe='.$PSDK_SAFE.';Folder='.$PSDK_FOLDER.';Object='.$PSDK_OBJECT.'" '.$parameter.'p RequiredProps="Address,Username" '.$parameter.'o Password');

$dbusername = str_replace(array( "\n"), '', $dbusername); //this is the username 
$dbpassword = str_replace(array( "\n"), '', $dbpassword); //this is the password



echo "username & password";
echo "<br/>";
echo $dbusername;
echo "<br/>";
echo $dbpassword ;
