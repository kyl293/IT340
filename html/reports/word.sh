#!/bin/sh
echo "working";
ls  /var/log/mysql/error.log | while read line; do
  if echo "$line" | grep -q 'OK UPLOAD:'; then
    filename=$(echo "$line" | cut -d, -f2)
    user=$(echo "$line"| cut -d '[' -f3)
    usercirc=$(echo "$user"| cut -d "]" -f1)
   # print $filename;
    echo $usercirc "has uploaded file" $filename;
    #echo "file" $filename "uploaded by"  | mail -s "a subject" km656@njit.edu;
    if [ -s "$filename" ]; then
     echo $filename;
    fi
  fi
done

