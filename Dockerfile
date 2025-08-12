FROM php:8.2-fpm-alpine
WORKDIR /app
COPY . /app
EXPOSE 8080
CMD ["php-fpm"]