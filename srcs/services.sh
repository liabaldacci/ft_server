#!/bin/bash

# iniciar o MySQL, Nginx e PHP
/etc/init.d/nginx start
/etc/init.d/mysql start
/etc/init.d/php7.3-fpm start

# criar base de dados
bash /tmp/database-config.sh

# manter o container aberto rodando
tail -f /dev/null
