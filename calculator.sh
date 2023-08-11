#!/bin/bash

#chmod u+x b3.sh


i="0"
echo "input first number"
read num1
 if [ -z "$num1" ] 
then 
num1="0"
fi
echo "input second number"
read num2
if [ -z "$num2" ]
then 
num2="0"
fi

echo "Do you want to add, subtract, multiply or divide?"
read symbol


case $symbol in

  add)
    expr $num1 + $num2
    ((i=i+1))
    ;;

  subtract)
    expr $num1 - $num2
     ((i=i+1))
    ;;

  multiply)
    echo $(( $num1 * $num2))
    ((i=i+1))
    ;;

  divide)
     echo $(( $num1 / $num2))
    ((i=i+1))

    ;;
esac


if [ $i -ne 1 ]
then

echo "You didnt fill out every prompt"
fi
