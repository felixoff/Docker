
service mysql start

# Config Access
chown -R www-data /var/www/*
chmod -R 755 /var/www/*

# Generate website folder
mkdir /var/www/sjennett && touch /var/www/sjennett/index.php
echo "<?php phpinfo(); ?>" >> /var/www/sjennett/index.php

# SSL
mkdir /etc/nginx/ssl
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/sjennett.pem -keyout /etc/nginx/ssl/sjennett.key 

# Config NGINX
mv ./tmp/nginx-conf /etc/nginx/sites-available/sjennett
ln -s /etc/nginx/sites-available/sjennett /etc/nginx/sites-enabled/sjennett
rm -rf /etc/nginx/sites-enabled/default

# Config MYSQL
echo "CREATE DATABASE wordpress;" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "update mysql.user set plugin='mysql_native_password' where user='root';" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password

# DL phpmyadmin
mkdir /var/www/sjennett/phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar -xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz --strip-components 1 -C /var/www/sjennett/phpmyadmin
mv ./tmp/phpmyadmin.inc.php /var/www/sjennett/phpmyadmin/config.inc.php
mkdir /var/www/sjennett/phpmyadmin/tmp

# DL wordpress
cd /tmp/
wget -c https://wordpress.org/latest.tar.gz
tar -xvzf latest.tar.gz
mv wordpress/ /var/www/sjennett
mv /tmp/wp-config.php /var/www/sjennett/wordpress

service php7.3-fpm start
service nginx start
bash
