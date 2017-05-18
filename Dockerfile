# This dockerfile extend's Google Cloud Platform's base php image.
FROM gcr.io/google-appengine/php:latest

RUN composer run-script post-install-cmd

ENV DOCUMENT_ROOT /app/web
