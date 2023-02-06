FROM php
WORKDIR /app
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
EXPOSE 8000
CMD [ "php", "-S", "0.0.0.0:8000" ]