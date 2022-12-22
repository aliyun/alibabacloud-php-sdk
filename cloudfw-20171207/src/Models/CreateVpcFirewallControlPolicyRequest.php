<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcFirewallControlPolicyRequest extends Model
{
    /**
     * @description The action that Cloud Firewall performs on the traffic. Valid values:
     *
     * - **accept**: allows the traffic.
     * - **drop**: blocks the traffic.
     * - **log**: monitors the traffic.
     * @example accept
     *
     * @var string
     */
    public $aclAction;

    /**
     * @description The type of the applications that the access control policy supports. Valid values:
     *
     * - **FTP**
     * - **HTTP**
     * - **HTTPS**
     * - **MySQL**
     * - **SMTP**
     * - **SMTPS**
     * - **RDP**
     * - **VNC**
     * - **SSH**
     * - **Redis**
     * - **MQTT**
     * - **MongoDB**
     * - **Memcache**
     * - **SSL**
     * - **ANY**: all types of applications
     * @example HTTP
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The description of the access control policy.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination port in the access control policy.
     *
     * >  If **DestPortType** is set to `port`, you must specify this parameter.
     * @example 80
     *
     * @var string
     */
    public $destPort;

    /**
     * @description The name of the destination port address book in the access control policy.
     *
     * >  If **DestPortType** is set to `group`, you must specify this parameter.
     * @example my_port_group
     *
     * @var string
     */
    public $destPortGroup;

    /**
     * @description The type of the destination port in the access control policy. Valid values:
     *
     * - **port**: port
     * - **group**: port address book
     * @example port
     *
     * @var string
     */
    public $destPortType;

    /**
     * @description The destination address in the access control policy. Valid values:
     *
     * - If **DestinationType** is set to `net`, the value of **Destination** must be a CIDR block.
     * - If **DestinationType** is set to `group`, the value of **Destination** must be an address book.
     * - If **DestinationType** is set to `domain`, the value of **Destination** must be a domain name.
     * @example 10.2.XX.XX/24
     *
     * @var string
     */
    public $destination;

    /**
     * @description The type of the destination address in the access control policy. Valid values:
     *
     * - **net**: CIDR block
     * - **group**: address book
     * - **domain**: domain name
     * @example net
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     * - **zh**: Chinese (default)
     * - **en**: English
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The UID of the member that is managed by your Alibaba Cloud account.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The priority of the access control policy.
     *
     * The priority value starts from 1. A smaller priority value indicates a higher priority.
     * @example 1
     *
     * @var string
     */
    public $newOrder;

    /**
     * @description The type of the protocol in the access control policy. Valid values:
     *
     * - **ANY** (If you are not sure about the protocol type, you can set this parameter to ANY.)
     * - **TCP**
     * - **UDP**
     * - **ICMP**
     * @example TCP
     *
     * @var string
     */
    public $proto;

    /**
     * @description Specifies whether to enable the access control policy. By default, an access control policy is enabled after the policy is created. Valid values:
     *
     * - **true**: enables the access control policy.
     * - **false**: disables the access control policy.
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @description The source address in the access control policy.
     *
     * - If SourceType is set to `group`, the value of Source must be an address book.
     * @example 10.2.XX.XX/24
     *
     * @var string
     */
    public $source;

    /**
     * @description The type of the source address in the access control policy. Valid values:
     *
     * - **net**: CIDR block
     * - **group**: address book
     * @example net
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The ID of the policy group in which you want to create the access control policy.
     *
     * >  You can call the [DescribeVpcFirewallAclGroupList](https://www.alibabacloud.com/help/en/cloud-firewall/latest/describevpcfirewallaclgrouplist) operation to query the IDs.
     * @example vfw-a42bbb7b887148c9****
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'aclAction'       => 'AclAction',
        'applicationName' => 'ApplicationName',
        'description'     => 'Description',
        'destPort'        => 'DestPort',
        'destPortGroup'   => 'DestPortGroup',
        'destPortType'    => 'DestPortType',
        'destination'     => 'Destination',
        'destinationType' => 'DestinationType',
        'lang'            => 'Lang',
        'memberUid'       => 'MemberUid',
        'newOrder'        => 'NewOrder',
        'proto'           => 'Proto',
        'release'         => 'Release',
        'source'          => 'Source',
        'sourceType'      => 'SourceType',
        'vpcFirewallId'   => 'VpcFirewallId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclAction) {
            $res['AclAction'] = $this->aclAction;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destPort) {
            $res['DestPort'] = $this->destPort;
        }
        if (null !== $this->destPortGroup) {
            $res['DestPortGroup'] = $this->destPortGroup;
        }
        if (null !== $this->destPortType) {
            $res['DestPortType'] = $this->destPortType;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->newOrder) {
            $res['NewOrder'] = $this->newOrder;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->release) {
            $res['Release'] = $this->release;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcFirewallControlPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestPort'])) {
            $model->destPort = $map['DestPort'];
        }
        if (isset($map['DestPortGroup'])) {
            $model->destPortGroup = $map['DestPortGroup'];
        }
        if (isset($map['DestPortType'])) {
            $model->destPortType = $map['DestPortType'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['NewOrder'])) {
            $model->newOrder = $map['NewOrder'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['Release'])) {
            $model->release = $map['Release'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
