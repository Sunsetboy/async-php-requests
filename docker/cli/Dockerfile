FROM php:8.1-cli-alpine3.17

RUN apk add --no-cache bash
RUN curl https://raw.githubusercontent.com/composer/getcomposer.org/76a7060ccb93902cd7576b67264ad91c8a2700e2/web/installer 2>/dev/null | php -- --install-dir=/usr/bin --filename=composer

WORKDIR /var/www