<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class AddControlPolicyRequest extends Model
{
    /**
     * @description The action that Cloud Firewall performs on the traffic. Valid values:
     *
     * **accept**: allows the traffic.
     * **drop**: denies the traffic.
     * **log**: monitors the traffic.
     *
     * @example accept
     *
     * @var string
     */
    public $aclAction;

    /**
     * @description The type of the application that the access control policy supports. Valid values:
     *
     * **FTP**
     * **HTTP**
     * **HTTPS**
     * **Memcache**
     * **MongoDB**
     * **MQTT**
     * **MySQL**
     * **RDP**
     * **Redis**
     * **SMTP**
     * **SMTPS**
     * **SSH**
     * **SSL_No_Cert**
     * **SSL**
     * **VNC**
     * **ANY**: all types of applications
     *
     * > The value of this parameter depends on the value of Proto. If Proto is set to TCP, you can set ApplicationName to any valid value. If Proto is set to UDP, ICMP, or ANY, you can set ApplicationName only to ANY.
     * @example ANY
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The types of the application that the access control policy supports.
     *
     * @var string[]
     */
    public $applicationNameList;

    /**
     * @description The description of the access control policy.
     *
     * @example allow access
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination port in the access control policy. Valid values:
     *
     * If Proto is set to ICMP, the value of DestPort is empty.
     *
     * > If Proto is set to ICMP, access control does not take effect on the destination port.
     *
     * If Proto is set to TCP, UDP, or ANY and DestPortType is set to group, the value of DestPort is empty.
     *
     * > If DestPortType is set to group, you do not need to specify the destination port number. All ports that the access control policy controls are included in the destination port address book.
     *
     * If Proto is set to TCP, UDP, or ANY and DestPortType is set to port, the value of DestPort is the destination port number.
     *
     * @example 80
     *
     * @var string
     */
    public $destPort;

    /**
     * @description The name of the destination port address book in the access control policy.
     *
     * >  If DestPortType is set to group, you must specify the name of the destination port address book.
     * @example my_port_group
     *
     * @var string
     */
    public $destPortGroup;

    /**
     * @description The type of the destination port in the access control policy.
     *
     * Valid values:
     *
     *   **port**: port
     *   **group**: port address book
     *
     * @example port
     *
     * @var string
     */
    public $destPortType;

    /**
     * @description The destination address in the access control policy.
     *
     * Valid values:
     *
     * If DestinationType is set to net, the value of this parameter is a CIDR block.
     *
     * Example: 1.2.XX.XX/24
     *
     * If DestinationType is set to group, the value of this parameter is an address book.
     *
     * Example: db_group
     *
     * If DestinationType is set to domain, the value of this parameter is a domain name.
     *
     * Example: \*.aliyuncs.com
     *
     * If DestinationType is set to location, the value of this parameter is a location.
     *
     * Example: \["BJ11", "ZB"]
     * @example 192.0.XX.XX/24
     *
     * @var string
     */
    public $destination;

    /**
     * @description The type of the destination address in the access control policy. Valid values:
     *
     * **net**: destination CIDR block
     * **group**: destination address book
     * **domain**: destination domain name
     * **location**: destination location
     *
     * @example net
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The direction of the traffic to which the access control policy applies. Valid values:
     *
     * **in**: inbound traffic
     * **out**: outbound traffic
     *
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @description The IP version of the address in the access control policy.
     *
     * Valid values:
     *
     * **4**: IPv4
     * **6**: IPv6
     *
     * @example 6
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     * **zh**: Chinese (default)
     * **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The priority of the access control policy. The priority value starts from 1. A small priority value indicates a high priority.
     *
     * @example 1
     *
     * @var string
     */
    public $newOrder;

    /**
     * @description The type of the protocol in the access control policy. Valid values:
     *
     * **ANY**: any protocol type
     * **TCP**
     * **UDP**
     * **ICMP**
     *
     * @example ANY
     *
     * @var string
     */
    public $proto;

    /**
     * @description Specifies whether the access control policy is enabled. By default, an access control policy is enabled after it is created. Valid values:
     *
     *   **true**: The access control policy is enabled.
     *   **false**: The access control policy is disabled.
     *
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @description The source address in the access control policy. Valid values:
     *
     * If SourceType is set to net, the value of this parameter is a CIDR block.
     *
     * Example: 1.1.XX.XX/24
     *
     * If SourceType is set to group, the value of this parameter is an address book.
     *
     * Example: db_group
     *
     * If SourceType is set to location, the value of this parameter is a location.
     *
     * Example: \["BJ11", "ZB"]
     * @example 192.0.XX.XX/24
     *
     * @var string
     */
    public $source;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the source address book in the access control policy. Valid values:
     *
     * **net**: source CIDR block
     * **group**: source address book
     * **location**: source location
     *
     * @example net
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'aclAction'           => 'AclAction',
        'applicationName'     => 'ApplicationName',
        'applicationNameList' => 'ApplicationNameList',
        'description'         => 'Description',
        'destPort'            => 'DestPort',
        'destPortGroup'       => 'DestPortGroup',
        'destPortType'        => 'DestPortType',
        'destination'         => 'Destination',
        'destinationType'     => 'DestinationType',
        'direction'           => 'Direction',
        'ipVersion'           => 'IpVersion',
        'lang'                => 'Lang',
        'newOrder'            => 'NewOrder',
        'proto'               => 'Proto',
        'release'             => 'Release',
        'source'              => 'Source',
        'sourceIp'            => 'SourceIp',
        'sourceType'          => 'SourceType',
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
        if (null !== $this->applicationNameList) {
            $res['ApplicationNameList'] = $this->applicationNameList;
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
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddControlPolicyRequest
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
        if (isset($map['ApplicationNameList'])) {
            if (!empty($map['ApplicationNameList'])) {
                $model->applicationNameList = $map['ApplicationNameList'];
            }
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
