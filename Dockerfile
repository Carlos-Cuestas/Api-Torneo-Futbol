FROM php:8.1-fpm

# Instalar dependencias del sistema necesarias
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar los archivos de la aplicación
WORKDIR /var/www/html
COPY . .

# Otorgar permisos a las carpetas de Laravel (si es un proyecto Laravel)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Configurar PHP-FPM
CMD ["php-fpm"]
