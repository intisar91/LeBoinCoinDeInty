# 1st stage : build js & css
FROM node:14-alpine as builder

ENV NODE_ENV=production
WORKDIR /app

ADD package.json package-lock.json webpack.config.js ./
ADD assets ./assets

RUN mkdir -p public && \
    NODE_ENV=development yarn install && \
    yarn run build

FROM php:7.4-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apt-get update \
    && apt-get install -y --no-install-recommends locales apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev libpq-dev;

RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
    mv composer.phar /usr/local/bin/composer

RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo pdo_pgsql gd opcache intl zip calendar dom mbstring zip gd xsl
RUN pecl install apcu && docker-php-ext-enable apcu

WORKDIR /var/www/

COPY . .
COPY --from=builder /app/public/build /var/www/public/build