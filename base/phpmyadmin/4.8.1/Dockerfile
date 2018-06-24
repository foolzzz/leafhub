
# copy from phiton

FROM php:5.6-apache
# php:5.6-apache update 很慢..

MAINTAINER fa11ing1eaf fa11ing1eaf@aliyun.com

#RUN set -ex \
        #&& apt-get update \
        #&& rm -r /var/lib/apt/lists/*

ARG SOURCE_URL=https://files.phpmyadmin.net/phpMyAdmin/4.8.1/phpMyAdmin-4.8.1-all-languages.zip
#https://github.com/phpmyadmin/phpmyadmin/archive/RELEASE_4_8_1.tar.gz
        #&& curl -#SL ${SOURCE_URL}  | tar zx -C /var/www/html --strip-components=1

RUN set -ex \
        && apt-get update \
        && apt-get install -y --no-install-recommends unzip \
        && docker-php-ext-install iconv mbstring mysqli \
        && rm -r /var/lib/apt/lists/*

RUN set -ex \
        && curl -#SL ${SOURCE_URL} -o /tmp/phpmyadmin_4.8.1.zip \
        && unzip -q /tmp/phpmyadmin_4.8.1.zip \
        && /bin/cp -r /tmp/phpMyadmin-*/* /var/www/html/ \
        && rm -rf /tmp/*


