<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class AddControlPolicyRequest extends Model
{
    /**
     * @description The action that Cloud Firewall performs on the traffic. Valid values:
     *
     *   **accept**: allows the traffic.
     *   **drop**: denies the traffic.
     *   **log**: monitors the traffic.
     *
     * @example accept
     *
     * @var string
     */
    public $aclAction;

    /**
     * @description The application type supported by the access control policy. Valid values:
     *
     *   **FTP**
     *   **HTTP**
     *   **HTTPS**
     *   **Memcache**
     *   **MongoDB**
     *   **MQTT**
     *   **MySQL**
     *   **RDP**
     *   **Redis**
     *   **SMTP**
     *   **SMTPS**
     *   **SSH**
     *   **SSL_No_Cert**
     *   **SSL**
     *   **VNC**
     *   **ANY**
     *
     * > The value of this parameter is based on the value of Proto. If Proto is set to TCP, you can set ApplicationName to any valid value. If Proto is set to UDP, ICMP, or ANY, you can set ApplicationName only to ANY. You must specify at least one of the ApplicationNameList and ApplicationName parameters.
     * @example ANY
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The application types supported by the access control policy.
     *
     * @var string[]
     */
    public $applicationNameList;

    /**
     * @description The description of the access control policy.
     *
     * @example Allows traffic
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination port in the access control policy. Valid values:
     *
     *   If Proto is set to ICMP, DestPort is automatically left empty.
     *
     * > If Proto is set to ICMP, access control does not take effect on the destination port.
     *
     *   If Proto is set to TCP, UDP, or ANY and DestPortType is set to group, DestPort is empty.
     *
     * > If DestPortType is set to group, you do not need to specify the destination port number. All ports on which the access control policy takes effect are included in the destination port address book.
     *
     *   If Proto is set to TCP, UDP, or ANY and DestPortType is set to port, the value of DestPort is the destination port number.
     *
     * @example 80
     *
     * @var string
     */
    public $destPort;

    /**
     * @description The name of the destination port address book in the access control policy.
     *
     * > If DestPortType is set to group, you must specify the name of the destination port address book.
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
     *   If DestinationType is set to net, the value of this parameter is a CIDR block.
     *
     * Example: 1.2.XX.XX/24
     *
     *   If DestinationType is set to group, the value of this parameter is an address book name.
     *
     * Example: db_group
     *
     *   If DestinationType is set to domain, the value of this parameter is a domain name.
     *
     * Example: \*.aliyuncs.com
     *
     *   If DestinationType is set to location, the value of this parameter is a location.
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
     *   **net**: CIDR block
     *   **group**: address book
     *   **domain**: domain name
     *   **location**: location
     *
     * @example net
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The direction of the traffic to which the access control policy applies. Valid values:
     *
     *   **in**: inbound traffic
     *   **out**: outbound traffic
     *
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @description The time when the access control policy stops taking effect. The value is a UNIX timestamp. Unit: seconds. The value must be on the hour or on the half hour, and at least 30 minutes later than the start time.
     *
     * >  If you set RepeatType to Permanent, leave this parameter empty. If you set RepeatType to None, Daily, Weekly, or Monthly, you must specify this parameter.
     * @example 1694764800
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The IP version supported by the access control policy.
     *
     * Valid values:
     *
     *   **4**: IPv4
     *   **6**: IPv6
     *
     * @example 6
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The priority of the access control policy. The priority value starts from 1. A smaller priority value indicates a higher priority.
     *
     * @example 1
     *
     * @var string
     */
    public $newOrder;

    /**
     * @description The protocol type supported by the access control policy. Valid values:
     *
     *   **ANY**
     *   **TCP**
     *   **UDP**
     *   **ICMP**
     *
     * @example ANY
     *
     * @var string
     */
    public $proto;

    /**
     * @description Specifies whether to enable the access control policy. By default, an access control policy is enabled after the policy is created. Valid values:
     *
     *   **true**: enables the access control policy.
     *   **false**: disables the access control policy.
     *
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @description The days of a week or of a month on which the access control policy takes effect.
     *
     *   If you set RepeatType to `Permanent`, `None`, or `Daily`, leave this parameter empty. Example: \[].
     *   If you set RepeatType to Weekly, you must specify this parameter. Example: \[0, 6].
     *
     * >  If you set RepeatType to Weekly, the fields in the value of this parameter cannot be repeated.
     *
     *   If you set RepeatType to `Monthly`, you must specify this parameter. Example: \[1, 31].
     *
     * >  If you set RepeatType to Monthly, the fields in the value of this parameter cannot be repeated.
     * @var int[]
     */
    public $repeatDays;

    /**
     * @description The point in time when the recurrence ends. Example: 23:30. The end time must be on the hour or on the half hour, and at least 30 minutes later than the start time.
     *
     * >  If you set RepeatType to Permanent or None, leave this parameter empty. If you set RepeatType to Daily, Weekly, or Monthly, you must specify this parameter.
     * @example 23:30
     *
     * @var string
     */
    public $repeatEndTime;

    /**
     * @description The point in time when the recurrence starts. Example: 08:00. The start time must be on the hour or on the half hour, and at least 30 minutes earlier than the end time.
     *
     * >  If you set RepeatType to Permanent or None, leave this parameter empty. If you set RepeatType to Daily, Weekly, or Monthly, you must specify this parameter.
     * @example 08:00
     *
     * @var string
     */
    public $repeatStartTime;

    /**
     * @description The recurrence type for the access control policy to take effect. Valid values:
     *
     *   **Permanent** (default): The policy always takes effect.
     *   **None**: The policy takes effect for only once.
     *   **Daily**: The policy takes effect on a daily basis.
     *   **Weekly**: The policy takes effect on a weekly basis.
     *   **Monthly**: The policy takes effect on a monthly basis.
     *
     * @example Permanent
     *
     * @var string
     */
    public $repeatType;

    /**
     * @description The source address in the access control policy. Valid values:
     *
     *   If SourceType is set to net, the value of this parameter is a CIDR block.
     *
     * Example: 1.1.XX.XX/24
     *
     *   If SourceType is set to group, the value of this parameter is an address book name.
     *
     * Example: db_group
     *
     *   If SourceType is set to location, the value of this parameter is a location.
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
     * @deprecated
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the source address in the access control policy. Valid values:
     *
     *   **net**: CIDR block
     *   **group**: address book
     *   **location**: location
     *
     * @example net
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The time when the access control policy starts to take effect. The value is a UNIX timestamp. Unit: seconds. The value must be on the hour or on the half hour, and at least 30 minutes earlier than the end time.
     *
     * >  If you set RepeatType to Permanent, leave this parameter empty. If you set RepeatType to None, Daily, Weekly, or Monthly, you must specify this parameter.
     * @example 1694761200
     *
     * @var int
     */
    public $startTime;
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
        'endTime'             => 'EndTime',
        'ipVersion'           => 'IpVersion',
        'lang'                => 'Lang',
        'newOrder'            => 'NewOrder',
        'proto'               => 'Proto',
        'release'             => 'Release',
        'repeatDays'          => 'RepeatDays',
        'repeatEndTime'       => 'RepeatEndTime',
        'repeatStartTime'     => 'RepeatStartTime',
        'repeatType'          => 'RepeatType',
        'source'              => 'Source',
        'sourceIp'            => 'SourceIp',
        'sourceType'          => 'SourceType',
        'startTime'           => 'StartTime',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->repeatDays) {
            $res['RepeatDays'] = $this->repeatDays;
        }
        if (null !== $this->repeatEndTime) {
            $res['RepeatEndTime'] = $this->repeatEndTime;
        }
        if (null !== $this->repeatStartTime) {
            $res['RepeatStartTime'] = $this->repeatStartTime;
        }
        if (null !== $this->repeatType) {
            $res['RepeatType'] = $this->repeatType;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['RepeatDays'])) {
            if (!empty($map['RepeatDays'])) {
                $model->repeatDays = $map['RepeatDays'];
            }
        }
        if (isset($map['RepeatEndTime'])) {
            $model->repeatEndTime = $map['RepeatEndTime'];
        }
        if (isset($map['RepeatStartTime'])) {
            $model->repeatStartTime = $map['RepeatStartTime'];
        }
        if (isset($map['RepeatType'])) {
            $model->repeatType = $map['RepeatType'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
