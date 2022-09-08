FROM phpdockerio/php:8.1-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
        php8.0-xdebug php8.0-mbstring \
        && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# PHP Settings
COPY docker/php-fpm/php.ini /etc/php/8.1/fpm/

RUN mkdir -p /app

COPY app /app

WORKDIR /app
