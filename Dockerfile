FROM php:8.2-fpm-alpine
WORKDIR /app
COPY . /app
CMD ["php-fpm"]