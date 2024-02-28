<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source;

use AlibabaCloud\Tea\Model;

class sourceRocketMQParameters extends Model
{
    /**
     * @description The authentication method.
     *
     * @example ACL
     *
     * @var string
     */
    public $authType;

    /**
     * @description The SQL statement that you want to use to filter messages.
     *
     * @example index > 10
     *
     * @var string
     */
    public $filterSql;

    /**
     * @description The method that you want to use to filter messages.
     *
     * @example Tag
     *
     * @var string
     */
    public $filterType;

    /**
     * @description The ID of the consumer group on the Message Queue for Apache RocketMQ instance.
     *
     * @example GID_group1
     *
     * @var string
     */
    public $groupID;

    /**
     * @description The instance endpoint.
     *
     * @example registry-vpc.cn-zhangjiakou.aliyuncs.com
     *
     * @var string
     */
    public $instanceEndpoint;

    /**
     * @description The ID of the Message Queue for Apache RocketMQ instance.
     *
     * @example default_C56C360261515
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The network type of the Message Queue for Apache RocketMQ instance. Valid values:
     *
     *   PublicNetwork
     *   PrivateNetwork
     *
     * @example PublicNetwork
     *
     * @var string
     */
    public $instanceNetwork;

    /**
     * @description The instance password.
     *
     * @example admin
     *
     * @var string
     */
    public $instancePassword;

    /**
     * @description The security group ID of the Message Queue for Apache RocketMQ instance.
     *
     * @example sg-m5edtu24f123456789
     *
     * @var string
     */
    public $instanceSecurityGroupId;

    /**
     * @description The instance type.
     *
     * @example 2
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The instance username.
     *
     * @example admin
     *
     * @var string
     */
    public $instanceUsername;

    /**
     * @description The vSwitch ID of the Message Queue for Apache RocketMQ instance.
     *
     * @example vsw-m5ev8asdc6h123456789
     *
     * @var string
     */
    public $instanceVSwitchIds;

    /**
     * @description The VPC ID of the Message Queue for Apache RocketMQ instance.
     *
     * @example vpc-m5e3sv4b123456789
     *
     * @var string
     */
    public $instanceVpcId;

    /**
     * @description The network type. Valid values: PublicNetwork and PrivateNetwork.
     *
     * @example PrivateNetwork
     *
     * @var string
     */
    public $network;

    /**
     * @description The offset from which messages are consumed. Valid values:
     *
     *   CONSUME_FROM_LAST_OFFSET: Messages are consumed from the latest offset.
     *   CONSUME_FROM_FIRST_OFFSET: Messages are consumed from the earliest offset.
     *   CONSUME_FROM_TIMESTAMP: Messages are consumed from the offset at the specified point in time.
     *
     * Default value: CONSUME_FROM_LAST_OFFSET.
     * @example CONSUMEFROMLAST_OFFSET
     *
     * @var string
     */
    public $offset;

    /**
     * @description The ID of the region where the Message Queue for Apache RocketMQ instance resides.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The security group ID of the cross-border task.
     *
     * @example sg-m5edtu24f123456789
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The tag that you want to use to filter messages.
     *
     * @example test
     *
     * @var string
     */
    public $tag;

    /**
     * @description The timestamp that specifies the time from which messages are consumed. This parameter is valid only if you set Offset to CONSUME_FROM_TIMESTAMP.
     *
     * @example 1670656652009
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The name of the topic on the Message Queue for Apache RocketMQ instance.
     *
     * @example Topic_publicRule_api_1667273421288
     *
     * @var string
     */
    public $topic;

    /**
     * @description The vSwitch ID of the cross-border task.
     *
     * @example vsw-m5ev8asdc6h123456789
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @description The VPC ID of the cross-border task.
     *
     * @example vpc-m5e3sv4b123456789
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'authType'                => 'AuthType',
        'filterSql'               => 'FilterSql',
        'filterType'              => 'FilterType',
        'groupID'                 => 'GroupID',
        'instanceEndpoint'        => 'InstanceEndpoint',
        'instanceId'              => 'InstanceId',
        'instanceNetwork'         => 'InstanceNetwork',
        'instancePassword'        => 'InstancePassword',
        'instanceSecurityGroupId' => 'InstanceSecurityGroupId',
        'instanceType'            => 'InstanceType',
        'instanceUsername'        => 'InstanceUsername',
        'instanceVSwitchIds'      => 'InstanceVSwitchIds',
        'instanceVpcId'           => 'InstanceVpcId',
        'network'                 => 'Network',
        'offset'                  => 'Offset',
        'regionId'                => 'RegionId',
        'securityGroupId'         => 'SecurityGroupId',
        'tag'                     => 'Tag',
        'timestamp'               => 'Timestamp',
        'topic'                   => 'Topic',
        'vSwitchIds'              => 'VSwitchIds',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->filterSql) {
            $res['FilterSql'] = $this->filterSql;
        }
        if (null !== $this->filterType) {
            $res['FilterType'] = $this->filterType;
        }
        if (null !== $this->groupID) {
            $res['GroupID'] = $this->groupID;
        }
        if (null !== $this->instanceEndpoint) {
            $res['InstanceEndpoint'] = $this->instanceEndpoint;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceNetwork) {
            $res['InstanceNetwork'] = $this->instanceNetwork;
        }
        if (null !== $this->instancePassword) {
            $res['InstancePassword'] = $this->instancePassword;
        }
        if (null !== $this->instanceSecurityGroupId) {
            $res['InstanceSecurityGroupId'] = $this->instanceSecurityGroupId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceUsername) {
            $res['InstanceUsername'] = $this->instanceUsername;
        }
        if (null !== $this->instanceVSwitchIds) {
            $res['InstanceVSwitchIds'] = $this->instanceVSwitchIds;
        }
        if (null !== $this->instanceVpcId) {
            $res['InstanceVpcId'] = $this->instanceVpcId;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceRocketMQParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
        if (isset($map['FilterSql'])) {
            $model->filterSql = $map['FilterSql'];
        }
        if (isset($map['FilterType'])) {
            $model->filterType = $map['FilterType'];
        }
        if (isset($map['GroupID'])) {
            $model->groupID = $map['GroupID'];
        }
        if (isset($map['InstanceEndpoint'])) {
            $model->instanceEndpoint = $map['InstanceEndpoint'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceNetwork'])) {
            $model->instanceNetwork = $map['InstanceNetwork'];
        }
        if (isset($map['InstancePassword'])) {
            $model->instancePassword = $map['InstancePassword'];
        }
        if (isset($map['InstanceSecurityGroupId'])) {
            $model->instanceSecurityGroupId = $map['InstanceSecurityGroupId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceUsername'])) {
            $model->instanceUsername = $map['InstanceUsername'];
        }
        if (isset($map['InstanceVSwitchIds'])) {
            $model->instanceVSwitchIds = $map['InstanceVSwitchIds'];
        }
        if (isset($map['InstanceVpcId'])) {
            $model->instanceVpcId = $map['InstanceVpcId'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
