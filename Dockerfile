# Tumia PHP 8.1 na Apache
FROM php:8.1-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git unzip zip curl libpq-dev libzip-dev \
    && docker-php-ext-install pdo_pgsql zip

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Run composer to install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Set correct permissions for Apache to access
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Change Apache DocumentRoot to frontend/web
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/frontend/web|' /etc/apache2/sites-available/000-default.conf

# Allow .htaccess overrides
RUN sed -i 's|AllowOverride None|AllowOverride All|' /etc/apache2/apache2.conf

# Expose HTTP port
EXPOSE 80
