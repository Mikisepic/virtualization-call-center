#!/bin/sh
echo "Please enter password for your SSH key:"
ssh-add
CUSER=linb
echo "Please enter password for your VU MIF cloud infrastructure"
CPASS=`ssh-askpass`
CENDPOINT=https://grid5.mif.vu.lt/cloud3/RPC2
CVMREZ=$(onetemplate instantiate "ubuntu-16.04"  --user $CUSER --password $CPASS  --endpoint $CENDPOINT)
CVMID=$(echo $CVMREZ |cut -d ' ' -f 3) 
echo $CVMID
echo "Waiting for VM to RUN 60 sec."
sleep 60
$(onevm show $CVMID --user $CUSER --password $CPASS  --endpoint $CENDPOINT >$CVMID.txt)
CSSH_CON=$(cat $CVMID.txt | grep CONNECT\_INFO1| cut -d '=' -f 2 | tr -d '"'|sed 's/'$CUSER'/root/')
CSSH_PRIP=$(cat $CVMID.txt | grep PRIVATE\_IP| cut -d '=' -f 2 | tr -d '"')
echo "Connection string: $CSSH_CON"
echo "Local IP: $CSSH_PRIP"
#echo "Will delete VM $CVMID"
#$(onevm delete $CVMID --user $CUSER --password $CPASS --endpoint $CENDPOINT )
exit 0