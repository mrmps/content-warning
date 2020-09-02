FROM php:7.2-apache
COPY link-protector.php /var/www/html/link-protector.php
EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
