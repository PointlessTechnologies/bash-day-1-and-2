chmod u+x bash.sh


var=1
echo rainbow
tput setab var




until [ $i -gt 300 ]
do
  echo 
  tput setab $i

  ((i=i+1))
done


