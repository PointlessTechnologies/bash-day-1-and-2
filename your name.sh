chmod u+x bash2.sh
if [ -z $1 ]
then
i=0
Askforname(){

echo "Username:"
read Username
 if [ -z $Username ]
then
((i=i+1))
echo "Enter your name" 
Askforname
else
if [ $i -eq 0 ]
then

echo "Hello," $Username
else
echo  $Username "it took you," $i "attempts to enter your username, you idiot"
fi
fi
}
Askforname

else
echo "Hello," $1


fi
