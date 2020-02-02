FROM php:7.4-fpm

MAINTAINER Maksim Saratov <github.com/maksimsaratov>

ARG environment

RUN cp /usr/local/etc/php/php.ini-${environment} /usr/local/etc/php/php.ini
ADD ./docker/php7.4-fpm/custom.php.ini 	/usr/local/etc/php/conf.d/custom.php.ini

RUN docker-php-ext-install \
        pdo \
        pdo_mysql

ADD ./src /var/www/html
