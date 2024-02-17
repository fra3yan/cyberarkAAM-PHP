# cyberarkAAM-PHP

this source code to test connection from using php to cyberark AAM

use file example.php to test the connetion to cyberark agent

basic config

$PSDK_APPID="appid" \
$PSDK_SAFE="safe_name" \
$PSDK_FOLDER="root" \
$PSDK_OBJECT="object_name" \

default path for linux \
$PSDK_PATH="/opt/CARKaim/sdk/clipasswordsdk" \
default path for windows \
$PSDK_PATH="C:\\Program Files (x86)\\CyberArk\\ApplicationPasswordSdk\\CLIPasswordSDK.exe"


testing on PHP 7.4 & 8.1

make sure php exec enabled
change PrivateTmp=false if you have problem on permission on httpd or nginx service
if you using php FPM plese check php-fpm service, change PrivateTmp=false 

restart the service and test again.
