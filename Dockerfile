FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    git unzip zip libpq-dev libzip-dev \
    && docker-php-ext-install pdo_pgsql zip

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY . /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/frontend/web|' /etc/apache2/sites-available/000-default.conf

RUN sed -i 's|AllowOverride None|AllowOverride All|' /etc/apache2/apache2.conf

EXPOSE 80
