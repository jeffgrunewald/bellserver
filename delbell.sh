#!/bin/bash
echo "Enter name of user to delete:"
read deluser
htpasswd -D /etc/apache2/security/.htpasswd $deluser
