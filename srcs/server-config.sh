# entra no diretorio aonde estão os arquivos
cd /tmp

# Cria a pasta localhost que sera o diretorio onde os arquivos serao salvos
mkdir /var/www/localhost

# Instalar o Phpmyadmin
#wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz
tar -xf phpMyAdmin-5.0.2-english.tar.gz
rm -rf phpMyAdmin-5.0.2-english.tar.gz
mv phpMyAdmin-5.0.2-english /var/www/localhost/phpmyadmin

# alterar configurações do PhpMyAdmin
cp -pr ./config.inc.php /var/www/localhost/phpmyadmin/config.inc.php

# Instalar o Wordpress
#wget https://br.wordpress.org/wordpress-5.3.2-pt_BR.tar.gz
tar -xf wordpress-5.3.2-pt_BR.tar.gz
rm -rf wordpress-5.3.2-pt_BR.tar.gz
mv wordpress /var/www/localhost/wordpress

# alterar configurações do Wordpress
cp wp-config.php /var/www/localhost/wordpress/wp-config.php

# alterar configurações do Nginx
cp -pr ./nginx.conf /etc/nginx/sites-available/default

# conceder permissões totais ao usuario www-data
chown -R www-data:www-data /var/www/localhost/phpmyadmin

# gerar o certificado SSL e sua chave de criptografia em seus respectivos arquivos
openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-subj '/C=BR/ST=SP/L=SP/O=42SP/CN=gadoglio' \
	-keyout /etc/ssl/certs/ssl.key -out /etc/ssl/certs/ssl.crt
