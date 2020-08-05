#!/bin/bash

nginx_file='/etc/nginx/sites-available/default'

grep "autoindex on;" "$nginx_file" > /dev/null

if [ "$?" = "0" ]; then
	echo "Autoindex is currently ON. Turning it OFF"
	sed -i 's/autoindex on/autoindex off/g' "$nginx_file"
	autoindex="OFF"; 

else
	echo "Autoindex is currently OFF. Turning it ON"
	sed -i 's/autoindex off/autoindex on/g' "$nginx_file"
	autoindex="ON";
fi

echo "Restarting Nginx."
/etc/init.d/nginx restart
echo "Autoindex is now $autoindex."
