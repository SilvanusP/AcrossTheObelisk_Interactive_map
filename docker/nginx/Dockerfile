# documents a runtime based on dotnet sdk image (the server our app is running in)
FROM nginx

RUN mkdir /etc/nginx/logs && touch /etc/nginx/logs/static.log

COPY docker/nginx/site.conf /etc/nginx/conf.d/default.conf
COPY app /usr/share/nginx/html