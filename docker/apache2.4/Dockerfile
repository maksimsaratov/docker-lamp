FROM httpd:2.4

MAINTAINER Maksim Saratov <github.com/maksimsaratov>

ARG php_proxy_server

ADD ./src /var/www/html
ADD ./docker/apache2.4/custom-httpd.conf /usr/local/apache2/conf/httpd.conf

RUN   sed -i "s|%PHP_PROXY_SERVER%|${php_proxy_server}|g" /usr/local/apache2/conf/httpd.conf