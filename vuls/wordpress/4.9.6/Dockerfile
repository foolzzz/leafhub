
FROM leafhub/httpd:php5

MAINTAINER fa11ing1eaf <fa11ingeaf@aliyun.com>

WORKDIR /var/www/html/

RUN set -ex; \
    mkdir -p /usr/src/wordpress; \
    wget -qO- https://github.com/WordPress/WordPress/archive/4.9.6.tar.gz | \
    tar zx -C /usr/src/wordpress --strip-components=1; \
    chown -R www-data:www-data /usr/src/wordpress; \
    rm -rf /usr/local/bin/docker-entrypoint.sh

ADD docker-entrypoint.sh /docker-entrypoint.sh
RUN chmod +x /docker-entrypoint.sh 



