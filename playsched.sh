#!/bin/bash

day=`date +%A`
time=`date +%H:%M`

sound=`grep $time /var/www/cowbell/$day.txt | cut -d" " -f2`

aplay /var/www/cowbell/sounds/$sound.wav > /var/www/cowbell/bell.log
