
FROM ubuntu:trusty

MAINTAINER fa11ing1eaf <fa11ing1eaf@aliyun.com>

RUN set -ex \
        && apt-get update \
        && apt-get install -y apache2 php5 php5-gd php5-curl php5-mysqlnd exim4 wget curl \
        && rm -rf /var/lib/apt/lists/* 

RUN a2enmod rewrite expires

ADD docker-entrypoint.sh /docker-entrypoint.sh

RUN chmod +x /docker-entrypoint.sh \
        && rm -rf /var/www/html/*

ENTRYPOINT ["/docker-entrypoint.sh"]

EXPOSE 80

CMD ["apache2ctl","-DFOREGROUND"]

