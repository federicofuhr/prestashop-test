# Usamos la imagen oficial que ya tiene Apache y PHP 8.1 configurados
FROM prestashop/prestashop:8.2-php8.1-apache

# 1. Copiamos TU código de GitHub a la ruta estándar de PrestaShop
# Esto sobreescribe los archivos base con tus cambios del repo
COPY . /var/www/html/

# 2. Corregimos permisos (Vital para que no falle la caché en /var/www/html/var/cache)
# El usuario 'www-data' es el que usa Apache internamente
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 775 /var/www/html/var/cache /var/www/html/var/logs /var/www/html/img

# 3. Limpiamos la caché del build para que no arrastre rutas locales tuyas
RUN rm -rf /var/www/html/var/cache/*

# 4. Ajustes de PHP necesarios para PrestaShop (opcional pero recomendado)
RUN echo "memory_limit = 512M" > /usr/local/etc/php/conf.d/custom.ini && \
    echo "max_execution_time = 300" >> /usr/local/etc/php/conf.d/custom.ini

WORKDIR /var/www/html