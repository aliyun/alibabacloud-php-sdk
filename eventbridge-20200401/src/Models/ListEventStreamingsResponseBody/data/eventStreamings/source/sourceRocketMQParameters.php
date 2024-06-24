<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source;

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
     * @var string
     */
    public $bodyDataType;

    /**
     * @var string
     */
    public $filterSql;

    /**
     * @var string
     */
    public $filterType;

    /**
     * @description The ID of the group on the Message Queue for Apache RocketMQ instance.
     *
     * @example GID_group1
     *
     * @var string
     */
    public $groupID;

    /**
     * @description The instance endpoint.
     *
     * @example registry-vpc.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $instanceEndpoint;

    /**
     * @description The ID of the Message Queue for Apache RocketMQ instance.
     *
     * @example i-f8zbher64dlm58plyfte
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The network type of the instance. Valid values:
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
     * @example 123
     *
     * @var string
     */
    public $instancePassword;

    /**
     * @description The security group ID of the instance.
     *
     * @example sg-m5edtu24f12345****
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
     * @example admin**
     *
     * @var string
     */
    public $instanceUsername;

    /**
     * @description The vSwitch ID of the instance.
     *
     * @example vsw-m5ev8asdc6h123456****
     *
     * @var string
     */
    public $instanceVSwitchIds;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-bp1a4gmlk31hy***l3ss
     *
     * @var string
     */
    public $instanceVpcId;

    /**
     * @var string
     */
    public $network;

    /**
     * @description The consumer offset of the message. Valid values: CONSUMEFROMLASTOFFSET: Messages are consumed from the latest offset. CONSUMEFROMFIRSTOFFSET: Messages are consumed from the earliest offset. CONSUMEFROMTIMESTAMP: Messages are consumed from the offset at the specified point in time.
     *
     * @example CONSUMEFROMTIMESTAMP
     *
     * @var string
     */
    public $offset;

    /**
     * @description The ID of the region where the Message Queue for Apache RocketMQ instance resides.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The tag that is used to filter messages.
     *
     * @example v1
     *
     * @var string
     */
    public $tag;

    /**
     * @description The timestamp that indicates the time from which messages are consumed. This parameter is valid only if you set Offset to CONSUMEFROMTIMESTAMP.
     *
     * @example 1670742074043
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The topic in which messages are stored.
     *
     * @example topic_add_anima
     *
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'authType'                => 'AuthType',
        'bodyDataType'            => 'BodyDataType',
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
        if (null !== $this->bodyDataType) {
            $res['BodyDataType'] = $this->bodyDataType;
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
        if (isset($map['BodyDataType'])) {
            $model->bodyDataType = $map['BodyDataType'];
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
