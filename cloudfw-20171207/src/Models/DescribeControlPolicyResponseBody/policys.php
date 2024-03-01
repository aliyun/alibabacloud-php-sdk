<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeControlPolicyResponseBody;

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
     * @example 00281255-d220-4db1-8f4f-c4df221a****
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The application ID in the access control policy.
     *
     * @example 10***
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description The application type supported by the access control policy. We recommend that you specify ApplicationNameList. Valid values:
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
     *   **SSL**
     *   **VNC**
     *   **ANY**: all types of applications
     *
     * @example HTTP
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The application names.
     *
     * @var string[]
     */
    public $applicationNameList;

    /**
     * @description The time when the access control policy was created.
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
     * @description The ports in the destination port address book.
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
     * @description The destination address in the access control policy. The value of this parameter varies based on the value of DestinationType. Valid values:
     *
     *   If **DestinationType** is set to **net**, the value of Destination is a CIDR block. Example: 192.0.XX.XX/24.
     *   If **DestinationType** is set to **domain**, the value of Destination is a domain name. Example: aliyuncs.com.
     *   If **DestinationType** is set to **group**, the value of Destination is the name of an address book. Example: db_group.
     *   If **DestinationType** is set to **location**, the value of Destination is a location. For more information about location codes, see [AddControlPolicy](~~138867~~). Example: \["BJ11", "ZB"].
     *
     * @example 192.0.XX.XX/24
     *
     * @var string
     */
    public $destination;

    /**
     * @description The CIDR blocks in the destination address book.
     *
     * @var string[]
     */
    public $destinationGroupCidrs;

    /**
     * @description The type of the destination address book in the access control policy. Valid values:
     *
     *   **ip**: an address book that includes one or more IP addresses
     *   **tag**: an ECS tag-based address book that includes the IP addresses of the ECS instances with one or more specific tags
     *   **domain**: an address book that includes one or more domain names
     *   **threat**: an address book that includes one or more malicious IP addresses or domain names
     *   **backsrc**: an address book that includes one or more back-to-origin addresses of Anti-DDoS Pro or Anti-DDoS Premium instances or WAF instances
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
     * @description The DNS resolution result.
     *
     * @example 192.0.XX.XX,192.0.XX.XX
     *
     * @var string
     */
    public $dnsResult;

    /**
     * @description The time when the Domain Name System (DNS) resolution was performed. The value is a timestamp. Unit: seconds.
     *
     * @example 1579261141
     *
     * @var int
     */
    public $dnsResultTime;

    /**
     * @description The time when the access control policy stops taking effect. The value is a timestamp. Unit: seconds. The end time must be on the hour or on the half hour, and at least 30 minutes later than the start time.
     *
     * >  If RepeatType is set to Permanent, this parameter is left empty. If RepeatType is set to None, Daily, Weekly, or Monthly, this parameter must be specified.
     * @example 1694764800
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time when the access control policy was last hit. The value is a timestamp. Unit: seconds.
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
     * @description The IP version used in the access control policy. Valid values:
     *
     *   **4**: IPv4
     *   **6**: IPv6
     *
     * @example 6
     *
     * @var int
     */
    public $ipVersion;

    /**
     * @description The time when the access control policy was modified.
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
     *   **ANY**
     *   **TCP**
     *   **UDP**
     *   **ICMP**
     *
     * @example TCP
     *
     * @var string
     */
    public $proto;

    /**
     * @description The status of the access control policy. By default, an access control policy is enabled after it is created. Valid values:
     *
     *   **true**: enabled
     *   **false**: disabled
     *
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @description The days of a week or of a month on which the access control policy takes effect.
     *
     *   If RepeatType is set to `Permanent`, `None`, or `Daily`, this parameter is left empty. Example: \[].
     *   If RepeatType is set to Weekly, this parameter must be specified. Example: \[0, 6].
     *
     * >  If RepeatType is set to Weekly, the fields in the value of RepeatDays cannot be repeated.
     *
     *   If RepeatType is set to `Monthly`, this parameter must be specified. Example: \[1, 31].
     *
     * >  If RepeatType is set to Monthly, the fields in the value of RepeatDays cannot be repeated.
     * @var int[]
     */
    public $repeatDays;

    /**
     * @description The point in time when the recurrence ends. Example: 23:30. The value must be on the hour or on the half hour, and at least 30 minutes later than the start time.
     *
     * >  If RepeatType is set to Permanent or None, this parameter is left empty. If RepeatType is set to Daily, Weekly, or Monthly, this parameter must be specified.
     * @example 23:30
     *
     * @var string
     */
    public $repeatEndTime;

    /**
     * @description The point in time when the recurrence starts. Example: 08:00. The value must be on the hour or on the half hour, and at least 30 minutes earlier than the end time.
     *
     * >  If RepeatType is set to Permanent or None, this parameter is left empty. If RepeatType is set to Daily, Weekly, or Monthly, this parameter must be specified.
     * @example 08:00
     *
     * @var string
     */
    public $repeatStartTime;

    /**
     * @description The recurrence type based on which the access control policy takes effect. Valid values:
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
     *   If **SourceType** is set to `net`, the value of Source is a CIDR block. Example: 192.0.XX.XX/24.
     *   If **SourceType** is set to `group`, the value of Source is the name of an address book. Example: db_group.
     *   If **SourceType** is set to `location`, the value of Source is a location. For more information about location codes, see [AddControlPolicy](~~138867~~). Example: \["BJ11", "ZB"].
     *
     * @example 192.0.XX.XX/24
     *
     * @var string
     */
    public $source;

    /**
     * @description The CIDR blocks in the source address book.
     *
     * @var string[]
     */
    public $sourceGroupCidrs;

    /**
     * @description The type of the source address book in the access control policy. Valid values:
     *
     *   **ip**: an address book that includes one or more IP addresses
     *   **tag**: an Elastic Compute Service (ECS) tag-based address book that includes the IP addresses of the ECS instances with one or more specific tags
     *   **domain**: an address book that includes one or more domain names
     *   **threat**: an address book that includes one or more malicious IP addresses or domain names
     *   **backsrc**: an address book that includes one or more back-to-origin addresses of Anti-DDoS Pro or Anti-DDoS Premium instances or Web Application Firewall (WAF) instances
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
     *   **location**: location
     *
     * @example net
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The total quota consumed by the returned access control policies, which is the sum of the quota consumed by each policy. The quota that is consumed by an access control policy is calculated by using the following formula: Quota that is consumed by an access control policy = Number of source addresses (number of CIDR blocks or regions) × Number of destination addresses (number of CIDR blocks, regions, or domain names) × Number of port ranges × Number of applications.
     *
     * @example 10,000
     *
     * @var int
     */
    public $spreadCnt;

    /**
     * @description The time when the access control policy starts to take effect. The value is a timestamp. Unit: seconds. The start time must be on the hour or on the half hour, and at least 30 minutes earlier than the end time.
     *
     * >  If RepeatType is set to Permanent, this parameter is left empty. If RepeatType is set to None, Daily, Weekly, or Monthly, this parameter must be specified.
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
        'direction'             => 'Direction',
        'dnsResult'             => 'DnsResult',
        'dnsResultTime'         => 'DnsResultTime',
        'endTime'               => 'EndTime',
        'hitLastTime'           => 'HitLastTime',
        'hitTimes'              => 'HitTimes',
        'ipVersion'             => 'IpVersion',
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
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->dnsResult) {
            $res['DnsResult'] = $this->dnsResult;
        }
        if (null !== $this->dnsResultTime) {
            $res['DnsResultTime'] = $this->dnsResultTime;
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
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['DnsResult'])) {
            $model->dnsResult = $map['DnsResult'];
        }
        if (isset($map['DnsResultTime'])) {
            $model->dnsResultTime = $map['DnsResultTime'];
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
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
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
