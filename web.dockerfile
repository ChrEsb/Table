FROM nginx:1.13.6

ADD config/nginx/vhost.conf /etc/nginx/conf.d/default.conf