#baixar imagem do debian buster (OS) do Dockerhub
FROM debian:buster

#Retira as interações da instalação para ficar mais rápido
ARG DEBIAN_FRONTEND=noninteractive

#instalar Upgrades e Tools do debian buster
#instalar wget e vim
#instalar certificado ssl, sql mariadb, nginx e modulos php
RUN apt-get update && \
	apt-get upgrade -u && \
	apt-get -y install wget mariadb-server nginx vim openssl \
	php-gd php7.3 php7.3-fpm \
	php7.3-mysql php-common php7.3-cli php7.3-common \
	php7.3-json php7.3-opcache php7.3-readline \
	php-json php-mbstring php7.3-mbstring php-curl \
	php-gd php-intl php-soap php-xml php-xmlrpc php-zip

#abrir ports 443 e 80
EXPOSE 443
EXPOSE 80
