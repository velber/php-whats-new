FROM php
WORKDIR /app
#COPY . .
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#RUN composer install
EXPOSE 8000
CMD [ "php", "-S", "0.0.0.0:8000" ]