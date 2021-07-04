#!bin/sh/

if grep -q "autoindex on" /etc/nginx/sites-available/sjennett
then sed -i 's/autoindex on/autoindex off/' /etc/nginx/sites-available/sjennett
echo 'autoindex off'
nginx -s reload

elif grep -q "autoindex off" /etc/nginx/sites-available/sjennett
then sed -i 's/autoindex off/autoindex on/' /etc/nginx/sites-available/sjennett
echo 'autoindex on'
nginx -s reload
fi
