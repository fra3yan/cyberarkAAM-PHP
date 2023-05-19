<?php

if(PHP_OS_FAMILY  == 'Windows')
  {
      $parameter = '/';
  }
  else
  {
      $parameter = '-';
  }

//config
$PSDK_APPID="appid";
$PSDK_SAFE="safe_name";
$PSDK_FOLDER="root";
$PSDK_OBJECT="object_name";
$PSDK_PATH="C:\\Program Files (x86)\\CyberArk\\ApplicationPasswordSdk\\CLIPasswordSDK.exe";


//Get data using cli PasswordSDK
$dbusername = shell_exec('"'.$PSDK_PATH.'" GetPassword '.$parameter.'p AppDescs.AppID="'.$PSDK_APPID.'" '.$parameter.'p Query="safe='.$PSDK_SAFE.';Folder='.$PSDK_FOLDER.';Object='.$PSDK_OBJECT.'" '.$parameter.'p RequiredProps="Address,Username" '.$parameter.'o Passprops.Username');
$dbpassword = shell_exec('"'.$PSDK_PATH.'" GetPassword '.$parameter.'p AppDescs.AppID="'.$PSDK_APPID.'" '.$parameter.'p Query="safe='.$PSDK_SAFE.';Folder='.$PSDK_FOLDER.';Object='.$PSDK_OBJECT.'" '.$parameter.'p RequiredProps="Address,Username" '.$parameter.'o Password');
//remove \n 
echo "username & password";
echo $dbusername = str_replace(array( "\n"), '', $dbusername); //this is the username 
echo "<br/>";
echo $dbpassword = str_replace(array( "\n"), '', $dbpassword); //this is the password
