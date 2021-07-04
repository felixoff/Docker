
<?php

$cfg['blowfish_secret'] = '123456789012345967890123456789012'; 

$i = 0;

$i++;

$cfg['Servers'][$i]['auth_type'] = 'cookie';

$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;

$cfg['UploadDir'] = '/home/nikita/load';
$cfg['SaveDir'] = '/home/nikita/save';



