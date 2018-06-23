
# copy from phiton

FROM php:5.4-apache

MAINTAINER fa11ing1eaf fa11ing1eaf@aliyun.com


RUN set -ex \
        && docker-php-ext-install iconv mbstring mysqli \
        && rm -r /var/lib/apt/lists/*

RUN set -ex \
        && curl -#SL https://github.com/phpmyadmin/phpmyadmin/archive/RELEASE_2_8_0_4.tar.gz | tar zx -C /var/www/html --strip-components=1


