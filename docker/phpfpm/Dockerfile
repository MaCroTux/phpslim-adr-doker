FROM php:7.2-fpm

RUN apt-get update && \
    apt-get install -y libbz2-dev \
            zlib1g-dev \
            libmcrypt-dev \
            wget \
         && \
         apt-get clean \
         && \
         rm -rf /var/lib/apt/lists/* \
         && \
         docker-php-ext-install mbstring mysqli pdo_mysql \
         && \
         mkdir -p /www/log/slim_adr \
         && \
         chmod 777 /www/log/slim_adr
