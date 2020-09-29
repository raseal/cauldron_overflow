FROM php:7.4-fpm-alpine

COPY ./php/php.ini /usr/local/etc/php/php.ini

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
