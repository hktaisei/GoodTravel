FROM php:8.0-fpm
EXPOSE 5173

# Composer install
COPY --from=composer:2.4 /usr/bin/composer /usr/bin/composer

# install Node.js
COPY --from=node:19 /usr/local/bin /usr/local/bin
COPY --from=node:19 /usr/local/lib /usr/local/lib

RUN apt-get update && apt-get install -y libpq-dev vim zip unzip git \
    && docker-php-ext-install pdo_pgsql

WORKDIR /src

ENTRYPOINT [ "bash", "-c", "composer install; npm install; exec php-fpm" ]

