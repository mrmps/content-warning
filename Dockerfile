FROM composer:latest as vendor

WORKDIR /tmp/

@@ -14,5 +14,7 @@ RUN composer install \

FROM php:7.2-apache-stretch

EXPOSE 80


COPY --from=vendor /tmp/vendor /var/www/html/vendor
COPY . /var/www/html
