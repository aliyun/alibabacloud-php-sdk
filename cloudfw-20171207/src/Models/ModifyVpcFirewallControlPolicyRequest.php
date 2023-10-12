<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcFirewallControlPolicyRequest extends Model
{
    /**
     * @description The action that Cloud Firewall performs on the traffic.
     *
     * Valid values:
     *
     *   **accept**: allows the traffic.
     *   **drop**: blocks the traffic.
     *   **log**: monitors the traffic.
     *
     * @example accept
     *
     * @var string
     */
    public $aclAction;

    /**
     * @description The unique ID of the access control policy.
     *
     * If you want to modify the configurations of an access control policy, you must provide the unique ID of the policy. You can call the [DescribeVpcFirewallControlPolicy](~~159758~~) operation to query the ID.
     * @example 00281255-d220-4db1-8f4f-c4df221a****
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The application type in the access control policy.
     *
     * Valid values:
     *
     *   ANY
     *   FTP
     *   HTTP
     *   HTTPS
     *   MySQL
     *   SMTP
     *   SMTPS
     *   RDP
     *   VNC
     *   SSH
     *   Redis
     *   MQTT
     *   MongoDB
     *   Memcache
     *   SSL
     *   ANY: all application types
     *
     * @example HTTP
     *
     * @var string
     */
    public $applicationName;

    /**
     * @var string[]
     */
    public $applicationNameList;

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
     * @description The type of the destination port in the access control policy.
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
     *   If **DestinationType** is set to `net`, the value of this parameter must be a CIDR block.
     *
     * Example: 10.2.3.0/24
     *
     *   If **DestinationType** is set to `group`, the value of this parameter must be an address book name.
     *
     * Example: db_group
     *
     *   If **DestinationType** is set to `domain`, the value of this parameter must be a domain name.
     *
     * Example: \*.aliyuncs.com
     * @example 10.2.X.X/XX
     *
     * @var string
     */
    public $destination;

    /**
     * @description The type of the destination address in the access control policy.
     *
     * Valid values:
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
     * @var int
     */
    public $endTime;

    /**
     * @description The language of the content within the response.
     *
     * Valid values:
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
     * @description The protocol type in the access control policy.
     *
     * Valid values:
     *
     *   ANY: all protocol types
     *   TCP
     *   UDP
     *   ICMP
     *
     * @example TCP
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
     *   If **SourceType** is set to `net`, the value of this parameter must be a CIDR block.
     *
     * Example: 10.2.4.0/24
     *
     *   If **SourceType** is set to `group`, the value of this parameter must be an address book name.
     *
     * Example: db_group
     * @example 10.2.X.X/XX
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

    /**
     * @description The instance ID of the VPC firewall. You can call the [DescribeVpcFirewallAclGroupList](~~159760~~) operation to query the ID.
     *
     *   If the VPC firewall is used to protect a CEN instance, the value of this parameter must be the ID of the CEN instance.
     *
     * Example: cen-ervw0g12b5jbw\*\*\*\*
     *
     *   If the VPC firewall is used to protect an Express Connect circuit, the value of this parameter must be the instance ID of the VPC firewall.
     *
     * Example: vfw-a42bbb7b887148c9\*\*\*\*
     * @example vfw-a42bbb7b887148c9****
     *
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'aclAction'           => 'AclAction',
        'aclUuid'             => 'AclUuid',
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
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
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
     * @return ModifyVpcFirewallControlPolicyRequest
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
