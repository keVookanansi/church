# Tumia PHP 8.1 na Apache
FROM php:8.1-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    git unzip zip libpq-dev libzip-dev \
    && docker-php-ext-install pdo_pgsql zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working dir
WORKDIR /var/www/html

# Copy files
COPY . /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Yii2 dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Apache DocumentRoot to frontend/web
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/frontend/web|' /etc/apache2/sites-available/000-default.conf

# Set .htaccess override enabled
RUN sed -i 's|AllowOverride None|AllowOverride All|' /etc/apache2/apache2.conf

# Expose port 80
EXPOSE 80
