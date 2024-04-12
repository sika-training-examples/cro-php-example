FROM php:8.3-fpm
LABEL org.opencontainers.image.source https://github.com/sika-training-examples/cro-php-example
WORKDIR /var/www/html
COPY /index.php .
