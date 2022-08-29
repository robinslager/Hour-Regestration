FROM node:latest AS node
FROM php:8.1-fpm-alpine

#composer in general
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# node for breezer
RUN apk add --update nodejs npm

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql

