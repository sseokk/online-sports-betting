FROM ubuntu:16.04

# Environments vars
#ENV TERM=xterm

RUN apt-get update
RUN apt-get -y upgrade

# Packages installation
# RUN DEBIAN_FRONTEND=noninteractive apt-get -y --fix-missing install apache2 \
#       php \
#       php-common \
#       php-cli \
#       php-gd \
#       php-json \
#       php-mbstring \
#       php-xml \
#       php-mysql \
#       php-curl \
#       php-mcrypt \
#       libapache2-mod-php


RUN DEBIAN_FRONTEND=noninteractive apt-get -y --fix-missing install software-properties-common
RUN DEBIAN_FRONTEND=noninteractive apt-get -y --fix-missing install python-software-properties
RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php

RUN apt-get update
RUN DEBIAN_FRONTEND=noninteractive apt-get -y --fix-missing install apache2 \
        php5.6 \
        php5.6-common \
        php5.6-mysql \
        php5.6-curl \
        php5.6-xml \
        php5.6-zip \
        php5.6-gd \
        php5.6-mbstring \
        php5.6-mcrypt
        # libapache2-mod-php5.6

RUN a2enmod rewrite
# RUN phpenmod mcrypt

RUN ln -snf /usr/share/zoneinfo/Asia/Seoul /etc/localtime && \
    echo "Asia/Seoul" > /etc/timezone

# Update the default apache site with the config we created.
ADD config/apache2/000-default.conf /etc/apache2/sites-enabled/000-default.conf
ADD config/apache2/apache2.conf /etc/apache2/apache2.conf
#ADD config/apache2/ports.conf /etc/apache2/ports.conf
#ADD config/apache2/envvars /etc/apache2/envvars

# Update php.ini
# ADD config/php/php.ini /etc/php/7.0/apache2/php.ini

# Init
ADD entrypoint.sh /entrypoint.sh
RUN chmod 755 /*.sh

RUN mkdir -p /var/www/htdocs

RUN chown -R www-data:www-data /var/www/htdocs

RUN chmod -R 707 /var/www/htdocs

RUN service apache2 restart

WORKDIR /var/www/

# Volume
#VOLUME ["/home/webuser/tyme"]

# Ports: apache2
EXPOSE 80

CMD ["/entrypoint.sh"]