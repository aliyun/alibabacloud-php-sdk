<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallControlPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class policys extends Model
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
     * @description The UUID of the access control policy.
     *
     * @example 4037fbf7-3e39-4634-92a4-d0155247****
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The application ID in the access control policy.
     *
     * @example 10**
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The application types supported by the access control policy. We recommend that you specify ApplicationNameList. Valid values:
     *
     *   **HTTP**
     *   **HTTPS**
     *   **MySQL**
     *   **SMTP**
     *   **SMTPS**
     *   **RDP**
     *   **VNC**
     *   **SSH**
     *   **Redis**
     *   **MQTT**
     *   **MongoDB**
     *   **Memcache**
     *   **SSL**
     *   **ANY**: all application types
     *
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
     * @description The time when the access control policy was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1761062400
     *
     * @var int
     */
    public $createTime;

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
     * @example 80
     *
     * @var string
     */
    public $destPort;

    /**
     * @description The name of the destination port address book in the access control policy.
     *
     * @example my_port_group
     *
     * @var string
     */
    public $destPortGroup;

    /**
     * @description The ports in the destination port address book of the access control policy.
     *
     * @var string[]
     */
    public $destPortGroupPorts;

    /**
     * @description The type of the destination port in the access control policy. Valid values:
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
     * @description The destination address in the access control policy. Valid values:
     *
     *   If **DestinationType** is set to `net`, the value of this parameter is a CIDR block.
     *   If **DestinationType** is set to `domain`, the value of this parameter is a domain name.
     *   If **DestinationType** is set to `group`, the value of this parameter is an address book name.
     *
     * @example 192.0.XX.XX/24
     *
     * @var string
     */
    public $destination;

    /**
     * @description The CIDR blocks in the destination address book of the access control policy.
     *
     * @var string[]
     */
    public $destinationGroupCidrs;

    /**
     * @description The type of the destination address book in the access control policy. Valid values:
     *
     *   **ip**: an address book that includes one or more CIDR blocks
     *   **domain**: an address book that includes one or more domain names
     *
     * @example ip
     *
     * @var string
     */
    public $destinationGroupType;

    /**
     * @description The type of the destination address in the access control policy. Valid values:
     *
     *   **net**: CIDR block
     *   **group**: address book
     *   **domain**: domain name
     *
     * @example net
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The time when the access control policy stops taking effect. The value is a UNIX timestamp. Unit: seconds. The value must be on the hour or on the half hour, and at least 30 minutes later than the value of StartTime.
     *
     * >  If RepeatType is set to Permanent, EndTime is left empty. If RepeatType is set to None, Daily, Weekly, or Monthly, EndTime must be specified.
     * @example 1694764800
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time when the access control policy was last hit. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1579261141
     *
     * @var int
     */
    public $hitLastTime;

    /**
     * @description The number of hits for the access control policy.
     *
     * @example 100
     *
     * @var int
     */
    public $hitTimes;

    /**
     * @description The UID of the member that is managed by your Alibaba Cloud account.
     *
     * @example 258039427902****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The time when the access control policy was modified. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1761062400
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The priority of the access control policy.
     *
     * The priority value starts from 1. A smaller priority value indicates a higher priority.
     * @example 1
     *
     * @var int
     */
    public $order;

    /**
     * @description The protocol type in the access control policy. Valid values:
     *
     *   **TCP**
     *   **UDP**
     *   **ICMP**
     *   **ANY**: all protocol types
     *
     * @example TCP
     *
     * @var string
     */
    public $proto;

    /**
     * @description Indicates whether the access control policy is enabled. By default, an access control policy is enabled after it is created. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @description The days of a week or of a month on which the access control policy takes effect.
     *
     *   If RepeatType is set to `Permanent`, `None`, or `Daily`, RepeatDays is left empty. Example: \[].
     *   If RepeatType is set to Weekly, RepeatDays must be specified. Example: \[0, 6].
     *
     * >  If RepeatType is set to Weekly, the fields in the value of RepeatDays cannot be repeated.
     *
     *   If RepeatType is set to `Monthly`, RepeatDays must be specified. Example: \[1, 31].
     *
     * >  If RepeatType is set to Monthly, the fields in the value of RepeatDays cannot be repeated.
     * @var int[]
     */
    public $repeatDays;

    /**
     * @description The point in time when the recurrence ends. Example: 23:30. The value must be on the hour or on the half hour, and at least 30 minutes later than the value of RepeatStartTime.
     *
     * >  If RepeatType is set to Permanent or None, RepeatEndTime is left empty. If RepeatType is set to Daily, Weekly, or Monthly, RepeatEndTime must be specified.
     * @example 23:30
     *
     * @var string
     */
    public $repeatEndTime;

    /**
     * @description The point in time when the recurrence starts. Example: 08:00. The value must be on the hour or on the half hour, and at least 30 minutes earlier than the value of RepeatEndTime.
     *
     * >  If RepeatType is set to Permanent or None, RepeatStartTime is left empty. If RepeatType is set to Daily, Weekly, or Monthly, this parameter must be specified.
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
     *   If **SourceType** is set to `net`, the value of this parameter is a CIDR block.
     *   If **SourceType** is set to `group`, the value of this parameter is an address book name.
     *
     * @example 192.0.XX.XX/24
     *
     * @var string
     */
    public $source;

    /**
     * @description The CIDR blocks in the source address book of the access control policy.
     *
     * @var string[]
     */
    public $sourceGroupCidrs;

    /**
     * @description The type of the source address book in the access control policy. The value is fixed as **ip**. The value indicates an address book that includes one or more CIDR blocks.
     *
     * @example ip
     *
     * @var string
     */
    public $sourceGroupType;

    /**
     * @description The type of the source address in the access control policy. Valid values:
     *
     *   **net**: CIDR block
     *   **group**: address book
     *
     * @example net
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The total quota consumed by the returned access control policies, which is the sum of the quota consumed by each policy. The quota that is consumed by an access control policy is calculated by using the following formula: Quota that is consumed by an access control policy = Number of source addresses × Number of destination addresses (number of CIDR blocks or domain names) × Number of applications × Number of port ranges.
     *
     * @example 10,000
     *
     * @var int
     */
    public $spreadCnt;

    /**
     * @description The time when the access control policy starts to take effect. The value is a UNIX timestamp. Unit: seconds. The value must be on the hour or on the half hour, and at least 30 minutes earlier than the value of EndTime.
     *
     * >  If RepeatType is set to Permanent, StartTime is left empty. If RepeatType is set to None, Daily, Weekly, or Monthly, StartTime must be specified.
     * @example 1694761200
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'aclAction'             => 'AclAction',
        'aclUuid'               => 'AclUuid',
        'applicationId'         => 'ApplicationId',
        'applicationName'       => 'ApplicationName',
        'applicationNameList'   => 'ApplicationNameList',
        'createTime'            => 'CreateTime',
        'description'           => 'Description',
        'destPort'              => 'DestPort',
        'destPortGroup'         => 'DestPortGroup',
        'destPortGroupPorts'    => 'DestPortGroupPorts',
        'destPortType'          => 'DestPortType',
        'destination'           => 'Destination',
        'destinationGroupCidrs' => 'DestinationGroupCidrs',
        'destinationGroupType'  => 'DestinationGroupType',
        'destinationType'       => 'DestinationType',
        'endTime'               => 'EndTime',
        'hitLastTime'           => 'HitLastTime',
        'hitTimes'              => 'HitTimes',
        'memberUid'             => 'MemberUid',
        'modifyTime'            => 'ModifyTime',
        'order'                 => 'Order',
        'proto'                 => 'Proto',
        'release'               => 'Release',
        'repeatDays'            => 'RepeatDays',
        'repeatEndTime'         => 'RepeatEndTime',
        'repeatStartTime'       => 'RepeatStartTime',
        'repeatType'            => 'RepeatType',
        'source'                => 'Source',
        'sourceGroupCidrs'      => 'SourceGroupCidrs',
        'sourceGroupType'       => 'SourceGroupType',
        'sourceType'            => 'SourceType',
        'spreadCnt'             => 'SpreadCnt',
        'startTime'             => 'StartTime',
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
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->applicationNameList) {
            $res['ApplicationNameList'] = $this->applicationNameList;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->destPortGroupPorts) {
            $res['DestPortGroupPorts'] = $this->destPortGroupPorts;
        }
        if (null !== $this->destPortType) {
            $res['DestPortType'] = $this->destPortType;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationGroupCidrs) {
            $res['DestinationGroupCidrs'] = $this->destinationGroupCidrs;
        }
        if (null !== $this->destinationGroupType) {
            $res['DestinationGroupType'] = $this->destinationGroupType;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->hitLastTime) {
            $res['HitLastTime'] = $this->hitLastTime;
        }
        if (null !== $this->hitTimes) {
            $res['HitTimes'] = $this->hitTimes;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
        if (null !== $this->sourceGroupCidrs) {
            $res['SourceGroupCidrs'] = $this->sourceGroupCidrs;
        }
        if (null !== $this->sourceGroupType) {
            $res['SourceGroupType'] = $this->sourceGroupType;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->spreadCnt) {
            $res['SpreadCnt'] = $this->spreadCnt;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclAction'])) {
            $model->aclAction = $map['AclAction'];
        }
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ApplicationNameList'])) {
            if (!empty($map['ApplicationNameList'])) {
                $model->applicationNameList = $map['ApplicationNameList'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['DestPortGroupPorts'])) {
            if (!empty($map['DestPortGroupPorts'])) {
                $model->destPortGroupPorts = $map['DestPortGroupPorts'];
            }
        }
        if (isset($map['DestPortType'])) {
            $model->destPortType = $map['DestPortType'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationGroupCidrs'])) {
            if (!empty($map['DestinationGroupCidrs'])) {
                $model->destinationGroupCidrs = $map['DestinationGroupCidrs'];
            }
        }
        if (isset($map['DestinationGroupType'])) {
            $model->destinationGroupType = $map['DestinationGroupType'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HitLastTime'])) {
            $model->hitLastTime = $map['HitLastTime'];
        }
        if (isset($map['HitTimes'])) {
            $model->hitTimes = $map['HitTimes'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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
        if (isset($map['SourceGroupCidrs'])) {
            if (!empty($map['SourceGroupCidrs'])) {
                $model->sourceGroupCidrs = $map['SourceGroupCidrs'];
            }
        }
        if (isset($map['SourceGroupType'])) {
            $model->sourceGroupType = $map['SourceGroupType'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SpreadCnt'])) {
            $model->spreadCnt = $map['SpreadCnt'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
