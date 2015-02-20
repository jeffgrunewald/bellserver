#!/bin/bash
echo "Enter name of user to add or change:"
read newuser
htpasswd /etc/apache2/security/.htpasswd $newuser
