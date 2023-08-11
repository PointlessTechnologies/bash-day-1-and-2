#!/bin/bash

for inhalt in $(ls)
 do
 if [[ "$inhalt" =~ ^[a-zA-Z0-9\.]{4,20}$ ]]; then
	 if [ -f "$inhalt" ]
	 then
		echo "$inhalt is a file"
	 elif [ -d "$inhalt" ]
  	then
 		echo "$inhalt is a directory"

  	fi
 else
	echo "File or directory $inhalt name exceeds 20 characters"
 fi
 
done
