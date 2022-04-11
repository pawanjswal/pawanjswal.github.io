FROM mattrayner/lamp:latest-1404
#FROM tutum/lamp

COPY mysql-setup.sh .
COPY create_mysql_users.sh .
RUN rm -rf /app/*
COPY WordPress /app/
RUN chmod -R 755 /app/
RUN chown -R www-data:www-data /app/

CMD ["/run.sh"]
