FROM php:8.1-apache

ENV APACHE_DOCUMENT_ROOT=/var/www/html

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
        libfreetype6-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libxml2-dev \
        libxslt1-dev \
        libzip-dev \
        unzip \
        zip; \
    docker-php-ext-configure gd --with-freetype --with-jpeg; \
    docker-php-ext-install -j"$(nproc)" \
        bcmath \
        exif \
        gd \
        intl \
        mysqli \
        opcache \
        pdo_mysql \
        soap \
        xsl \
        zip; \
    a2enmod headers expires rewrite; \
    rm -rf /var/lib/apt/lists/*

COPY . /var/www/html

RUN set -eux; \
    mkdir -p /var/www/html/var/cache /var/www/html/var/log; \
    rm -rf /var/www/html/var/cache/*; \
    find /var/www/html -type d -exec chmod 755 {} \;; \
    find /var/www/html -type f -exec chmod 644 {} \;; \
    chown -R www-data:www-data /var/www/html/var /var/www/html/cache /var/www/html/img /var/www/html/download /var/www/html/upload

WORKDIR /var/www/html
EXPOSE 80

CMD ["apache2-foreground"]
