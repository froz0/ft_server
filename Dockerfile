# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmatis <tmatis@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/20 14:16:31 by tmatis            #+#    #+#              #
#    Updated: 2020/12/28 17:03:21 by tmatis           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

### UPDATE ###
RUN apt-get update && apt-get upgrade -y && apt-get install -y wget nginx mariadb-server mariadb-client \
	php7.3 php7.3-mysql php7.3-fpm php7.3-curl php7.3-gd php7.3-intl php7.3-mbstring \
	php7.3-soap php7.3-xml php7.3-xmlrpc php7.3-zip php7.3-bz2
WORKDIR "/home"
COPY ./srcs/run.sh ./run.sh
COPY ./srcs/nginx-selfsigned.key /etc/ssl/private/nginx-selfsigned.key
COPY ./srcs/nginx-selfsigned.crt /etc/ssl/certs/nginx-selfsigned.crt
COPY ./srcs/default.conf /etc/nginx/sites-available/default
RUN wget https://wordpress.org/latest.tar.gz && wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz && \
	rm -rf /var/www/html/*
COPY ./srcs/index.php /var/www/html/index.php
RUN tar -xzf latest.tar.gz && rm -f latest.tar.gz && \
	tar -xzf phpMyAdmin-5.0.4-english.tar.gz && rm -f phpMyAdmin-5.0.4-english.tar.gz && \
	mv wordpress /var/www/html/wordpress && mv phpMyAdmin-5.0.4-english /var/www/html/phpmyadmin && \
	mkdir /var/www/html/test
COPY ./srcs/wp-config.php /var/www/html/wordpress/wp-config.php
RUN chmod 755 /var/www/* && chown -R www-data:www-data /var/www/html/
RUN service mysql start && \
	echo "CREATE DATABASE wordpress_site;" | mysql -u root && \
	echo "CREATE USER 'wordpress'@'localhost' IDENTIFIED BY '1234';" | mysql -u root && \
	echo "GRANT ALL PRIVILEGES ON wordpress_site.* TO 'wordpress'@'localhost';FLUSH PRIVILEGES;" | mysql -u root
CMD bash ./run.sh
