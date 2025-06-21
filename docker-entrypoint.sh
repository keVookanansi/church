#!/bin/bash
# Badilisha Apache port kulingana na environment variable PORT

if [ -n "$PORT" ]; then
    echo "Setting Apache to listen on port $PORT"
    sed -i "s/Listen 80/Listen $PORT/" /etc/apache2/ports.conf
    sed -i "s/:80/:$PORT/" /etc/apache2/sites-available/000-default.conf
fi

# Start Apache in foreground
apache2-foreground
