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
     *
     * This parameter is required.
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
     * @description The application types supported by the access control policy.
     *
     * @var string[]
     */
    public $applicationNameList;

    /**
     * @description The description of the access control policy.
     *
     * This parameter is required.
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
     *
     * This parameter is required.
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
     *
     * This parameter is required.
     * @example net
     *
     * @var string
     */
    public $destinationType;

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
     * This parameter is required.
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
     *
     * This parameter is required.
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
     * @description The days of a week or of a month on which the access control policy takes effect.
     *
     *   If you set RepeatType to `Permanent`, `None`, or `Daily`, leave this parameter empty. Example: [].
     *   If you set RepeatType to Weekly, you must specify this parameter. Example: [0, 6].
     *
     * >  If you set RepeatType to Weekly, the fields in the value of this parameter cannot be repeated.
     *
     *   If you set RepeatType to `Monthly`, you must specify this parameter. Example: [1, 31].
     *
     * >  If you set RepeatType to Monthly, the fields in the value of this parameter cannot be repeated.
     * @var int[]
     */
    public $repeatDays;

    /**
     * @description The point in time when the recurrence ends. Example: 23:30. The value must be on the hour or on the half hour, and at least 30 minutes later than the start time.
     *
     * >  If you set RepeatType to Permanent or None, leave this parameter empty. If you set RepeatType to Daily, Weekly, or Monthly, you must specify this parameter.
     * @example 23:30
     *
     * @var string
     */
    public $repeatEndTime;

    /**
     * @description The point in time when the recurrence starts. Example: 08:00. The value must be on the hour or on the half hour, and at least 30 minutes earlier than the end time.
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
     * @description The source address in the access control policy.
     *
     * This parameter is required.
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
     *
     * This parameter is required.
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

    /**
     * @description The ID of the policy group in which you want to create the access control policy.
     *
     * This parameter is required.
     * @example vfw-a42bbb7b887148c9****
     *
     * @var string
     */
    public $vpcFirewallId;
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
        'endTime'             => 'EndTime',
        'lang'                => 'Lang',
        'memberUid'           => 'MemberUid',
        'newOrder'            => 'NewOrder',
        'proto'               => 'Proto',
        'release'             => 'Release',
        'repeatDays'          => 'RepeatDays',
        'repeatEndTime'       => 'RepeatEndTime',
        'repeatStartTime'     => 'RepeatStartTime',
        'repeatType'          => 'RepeatType',
        'source'              => 'Source',
        'sourceType'          => 'SourceType',
        'startTime'           => 'StartTime',
        'vpcFirewallId'       => 'VpcFirewallId',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
