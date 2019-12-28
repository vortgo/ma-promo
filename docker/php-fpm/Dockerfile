FROM php:7.3-fpm

LABEL maintainer="Mahmoud Zalt <mahmoud@zalt.me>"

RUN apt-get update && \
  apt-get upgrade -y && \
  apt-get install -y --no-install-recommends \
    curl \
    libmemcached-dev \
    libz-dev \
    libpq-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libssl-dev \
    libmcrypt-dev \
  && rm -rf /var/lib/apt/lists/*

  RUN docker-php-ext-install pdo_mysql \
  && docker-php-ext-install pdo_pgsql \
  && docker-php-ext-install pcntl \
  && docker-php-ext-configure gd \
  && docker-php-ext-configure gd \
    --with-jpeg-dir=/usr/lib \
    --with-freetype-dir=/usr/include/freetype2 && \
    docker-php-ext-install gd

RUN apt-get update && apt-get upgrade && apt-get install -y bash git zip unzip

RUN curl -s http://getcomposer.org/installer | php && \
    echo "export PATH=${PATH}:/var/www/vendor/bin" >> ~/.bashrc && \
    mv composer.phar /usr/local/bin/composer

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www

RUN usermod -u 1000 www-data

RUN usermod -d /home/www-data www-data
RUN mkdir /home/www-data && chown www-data:www-data /home/www-data
USER www-data

RUN composer global require hirak/prestissimo

CMD ["php-fpm"]

EXPOSE 9000
