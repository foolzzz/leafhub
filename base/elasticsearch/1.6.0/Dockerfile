FROM openjdk:8-jre

MAINTAINER fa11ign1eaf <fa11ing1eaf@aliyun.com>

RUN set -ex \
    && apt-get update \
    && apt-get install -y wget \
    && mkdir -p /usr/share/elasticsearch \
    && wget -qO- https://download.elastic.co/elasticsearch/elasticsearch/elasticsearch-1.6.0.tar.gz \
        | tar zx --strip-components 1 -C /usr/share/elasticsearch

WORKDIR /usr/share/elasticsearch

ENV PATH /usr/share/elasticsearch/bin:$PATH

COPY logging.yml elasticsearch.yml ./config/

COPY docker-entrypoint.sh /

RUN set -ex \
    && chmod +x /docker-entrypoint.sh \
    && mkdir ./repo \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false wget

EXPOSE 9200 9300

ENTRYPOINT ["/docker-entrypoint.sh"]

CMD ["elasticsearch"]
