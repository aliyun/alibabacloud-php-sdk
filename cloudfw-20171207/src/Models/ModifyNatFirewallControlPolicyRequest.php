<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyNatFirewallControlPolicyRequest extends Model
{
    /**
     * @description The action that Cloud Firewall performs on the traffic. Valid values:
     *
     *   **accept**: allows the traffic.
     *   **drop**: denies the traffic.
     *   **log**: monitors the traffic.
     *
     * @example log
     *
     * @var string
     */
    public $aclAction;

    /**
     * @description The UUID of the access control policy.
     *
     * To modify the configurations of an access control policy, you must provide the UUID of the policy. You can call the DescribeNatFirewallControlPolicy operation to query the UUIDs of access control policies.
     * @example 61ab1c02-926a-4d1b-9ef7-595eed8c4226
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The name of the application.
     *
     * @var string[]
     */
    public $applicationNameList;

    /**
     * @description The description of the access control policy. Fuzzy match is supported.
     *
     * > If you do not specify this parameter, the descriptions of all policies are queried.
     * @var string
     */
    public $description;

    /**
     * @description The destination port in the access control policy.
     *
     * > If **DestPortType** is set to `port`, you must specify this parameter.
     * @example 80
     *
     * @var string
     */
    public $destPort;

    /**
     * @description The name of the destination port address book in the access control policy.
     *
     * @example my_dest_port_group
     *
     * @var string
     */
    public $destPortGroup;

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
     * @description The destination address in the access control policy.
     *
     *   If **DestinationType** is set to net, the value of **Destination** is a CIDR block. Example: 1.2.3.4/24
     *   If **DestinationType** is set to group, the value of **Destination** is an address book. Example: db_group
     *   If **DestinationType** is set to domain, the value of **Destination** is a domain name. Example: \*.aliyuncs.com
     *   If **DestinationType** is set to location, the value of **Destination** is a location. For more information about the location codes, see the "AddControlPolicy" topic. Example: \["BJ11", "ZB"]
     *
     * @example x.x.x.x/32
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
     *   **location**
     *
     * @example net
     *
     * @var string
     */
    public $destinationType;

    /**
     * @description The domain name resolution method of the access control policy. By default, an access control policy is enabled after it is created. Valid values:
     *
     *   **0**: Fully qualified domain name (FQDN)-based resolution
     *   **1**: Domain Name System (DNS)-based dynamic resolution
     *   **2**: FQDN and DNS-based dynamic resolution
     *
     * @example 0
     *
     * @var string
     */
    public $domainResolveType;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @description The language of the content within the request and the response. Valid values:
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
     * @description The ID of the NAT gateway.
     *
     * @example ngw-xxxxxx
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The protocol type supported by the access control policy. Valid values:
     *
     *   **ANY**
     *   **TCP**
     *   **UDP**
     *   **ICMP**
     *
     * > The value **ANY** indicates all types of protocols.
     * @example TCP
     *
     * @var string
     */
    public $proto;

    /**
     * @description The status of the access control policy. Valid values:
     *
     *   true: enabled
     *   false: disabled
     *
     * @example true
     *
     * @var string
     */
    public $release;

    /**
     * @var int[]
     */
    public $repeatDays;

    /**
     * @var string
     */
    public $repeatEndTime;

    /**
     * @var string
     */
    public $repeatStartTime;

    /**
     * @var string
     */
    public $repeatType;

    /**
     * @description The source address in the access control policy.
     *
     * Valid values:
     *
     *   If **SourceType** is set to `net`, the value of Source is a CIDR block.
     *
     * Example: 10.2.4.0/24
     *
     *   If **SourceType** is set to `group`, the value of this parameter is an address book.
     *
     * Example: db_group
     * @example 192.168.0.25/32
     *
     * @var string
     */
    public $source;

    /**
     * @description The type of the source address in the access control policy.
     *
     * Valid values:
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
     * @var int
     */
    public $startTime;
    protected $_name = [
        'aclAction'           => 'AclAction',
        'aclUuid'             => 'AclUuid',
        'applicationNameList' => 'ApplicationNameList',
        'description'         => 'Description',
        'destPort'            => 'DestPort',
        'destPortGroup'       => 'DestPortGroup',
        'destPortType'        => 'DestPortType',
        'destination'         => 'Destination',
        'destinationType'     => 'DestinationType',
        'domainResolveType'   => 'DomainResolveType',
        'endTime'             => 'EndTime',
        'lang'                => 'Lang',
        'natGatewayId'        => 'NatGatewayId',
        'proto'               => 'Proto',
        'release'             => 'Release',
        'repeatDays'          => 'RepeatDays',
        'repeatEndTime'       => 'RepeatEndTime',
        'repeatStartTime'     => 'RepeatStartTime',
        'repeatType'          => 'RepeatType',
        'source'              => 'Source',
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
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
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
        if (null !== $this->domainResolveType) {
            $res['DomainResolveType'] = $this->domainResolveType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNatFirewallControlPolicyRequest
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
        if (isset($map['DomainResolveType'])) {
            $model->domainResolveType = $map['DomainResolveType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
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

        return $model;
    }
}
