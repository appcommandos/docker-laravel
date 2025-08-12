    # Use a base PHP image
    FROM php:8.2-fpm-alpine

    # Install Composer
    COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

    # Set working directory
    WORKDIR /app

    # Copy your application files
    COPY . /app

    # Install PHP dependencies using Composer
    RUN composer install --no-dev --optimize-autoloader

    # Expose port (if your application listens on a specific port)
    EXPOSE 8080

    # Start your application (e.g., using a web server like Nginx or Caddy)
    CMD ["php-fpm"]