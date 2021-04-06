FROM ubuntu:20.04
MAINTAINER Jamie

RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive && \
    apt-get install -y --no-install-recommends tzdata && \
    ln -snf /usr/share/zoneinfo/Asia/Taipei /etc/localtime && \
    dpkg-reconfigure -f noninteractive tzdata

RUN apt-get install -y nginx

COPY test.conf /etc/nginx/sites-available/my-ele-project.conf

RUN ln -s /etc/nginx/sites-available/my-ele-project.conf /etc/nginx/sites-enabled/my-ele-project.conf

EXPOSE 80 443

CMD ["nginx", "-g", "daemon off;"]
