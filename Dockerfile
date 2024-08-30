FROM php:7.4-fpm
RUN apt-get update && apt-get install -y \
libfreetype-dev \
libjpeg62-turbo-dev \
libpng-dev \
libonig-dev \
&& docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install -j$(nproc) gd \
&& docker-php-ext-install mbstring \
&& apt-get clean \
&& rm -rf /var/lib/apt/lists/*
