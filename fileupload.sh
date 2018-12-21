#!/bin/bash
inotifywait -m /var/www/html/reports -e create -e moved_to |
    while read path action file; do
        echo "The file '$file' appeared in directory '$path' via '$action'"
        #echo "file" $filename "uploaded by"  | mail -s "a subject" km656@njit.edu;
    done
