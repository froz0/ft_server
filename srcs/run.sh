# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    run.sh                                             :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmatis <tmatis@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/12/24 19:07:37 by tmatis            #+#    #+#              #
#    Updated: 2020/12/28 17:05:18 by tmatis           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

if [ -z ${index+x} ]; then
	sed -i 's/#//' /etc/nginx/sites-available/default
fi
service mysql start
service nginx start
service php7.3-fpm start
tail -f /var/log/nginx/access.log
