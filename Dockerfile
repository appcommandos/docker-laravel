FROM php:8.2-fpm-alpine
WORKDIR /app
COPY . /app
RUN composer install --no-dev --optimize-autoloader
RUN php artisan optimize
EXPOSE 8080
CMD ["php-fpm"]