#!/usr/bin/bash
CUSER=username
CPASS=password
CENDPOINT=https://grid5.mif.vu.lt/cloud3/RPC2

ANSIBLE_VM_TEMPLATE_ID=template_id

ANSIBLE_VM_NAME=name-vm

CVMREZ=$(onetemplate instantiate $OTHER_VMS_TEMPLATE_ID --name $DATABASE_VM_NAME  --user $CUSER --password $CPASS --endpoint $CENDPOINT)
CVMID=$(echo $CVMREZ |cut -d ' ' -f 3) 

echo $CVMID
echo "Waiting for VM to RUN 20 sec."
sleep 20

$(onevm show $CVMID --user $CUSER --password $CPASS  --endpoint $CENDPOINT >$CVMID.txt)

CSSH_CON=$(cat $CVMID.txt | grep CONNECT\_INFO1| cut -d '=' -f 2 | tr -d '"'|sed 's/'$CUSER'/root/')
CSSH_PRIP=$(cat $CVMID.txt | grep PRIVATE\_IP| cut -d '=' -f 2 | tr -d '"')

# Connection IPs
echo "Connection string: $CSSH_CON"
echo "Local IP: $CSSH_PRIP"

# List VMs
SHOW_VMS=$(onevm list --user $CUSER --password $CPASS --endpoint $CENDPOINT)
echo "$SHOW_VMS"
exit 0
