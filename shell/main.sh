#!/usr/bin/bash
CUSER=username
CPASS=password
CENDPOINT=https://grid5.mif.vu.lt/cloud3/RPC2

VM_TEMPLATE_STRING=template_string
VM_NAME=name-vm

# sukuria VM'ą naudojant OpenNebula-tools paketą
CVMREZ=$(onetemplate instantiate $VM_TEMPLATE_STRING --name $VM_NAME  --user $CUSER --password $CPASS --endpoint $CENDPOINT)
CVMID=$(echo $CVMREZ |cut -d ' ' -f 3) 
# palaukia 30s kol pasileis VM
echo $CVMID
echo "Waiting for VM to RUN 30 sec."
sleep 30

# surandą VM'ą pagal sukurto VM ID, ir surašo visus to VM duomenis į txt failą
$(onevm show $CVMID --user $CUSER --password $CPASS  --endpoint $CENDPOINT >$CVMID.txt)
# iš txt failo ištraukia prisijungimui reikiamus duomenis
CSSH_CON=$(cat $CVMID.txt | grep CONNECT\_INFO1| cut -d '=' -f 2 | tr -d '"'|sed 's/'$CUSER'/root/')
CSSH_PRIP=$(cat $CVMID.txt | grep PRIVATE\_IP| cut -d '=' -f 2 | tr -d '"')

# Connection IPs
echo "Connection string: $CSSH_CON"
echo "Local IP: $CSSH_PRIP"

# List VMs
SHOW_VMS=$(onevm list --user $CUSER --password $CPASS --endpoint $CENDPOINT)
echo "$SHOW_VMS"
exit 0
