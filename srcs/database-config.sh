#!/bin/bash

mysql -e "CREATE DATABASE wordpress_db DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
mysql -e "GRANT ALL ON wordpress_db.* TO 'root'@'localhost' IDENTIFIED BY '' WITH GRANT OPTION;"
mysql -e "FLUSH PRIVILEGES;"
