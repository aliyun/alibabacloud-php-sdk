<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList;

use AlibabaCloud\Tea\Model;

class sourceRocketMQParameters extends Model
{
    /**
     * @description The authentication type. This parameter can be set to ACL or left empty.
     *
     * @example ACL
     *
     * @var string
     */
    public $authType;

    /**
     * @description The ID of the consumer group on the Message Queue for Apache RocketMQ instance.
     *
     * @example GID-test
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The instance endpoint.
     *
     * @example registry-vpc.cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $instanceEndpoint;

    /**
     * @description The ID of the Message Queue for Apache RocketMQ instance. For more information, see [Limits](~~163289~~).
     *
     * @example bastionhost-cn-7mz293s9d1p
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The network that is used by the Message Queue for Apache RocketMQ instance.
     *
     * @example PublicNetwork
     *
     * @var string
     */
    public $instanceNetwork;

    /**
     * @description The instance password.
     *
     * @example ***
     *
     * @var string
     */
    public $instancePassword;

    /**
     * @description The security group ID.
     *
     * @example eb-167adad548***
     *
     * @var string
     */
    public $instanceSecurityGroupId;

    /**
     * @description The instance type. Valid values: CLOUD\_4, CLOUD\_5, and SELF_BUILT. The value CLOUD\_4 indicates that the instance is a Message Queue for Apache RocketMQ 4.0 instance. The value CLOUD\_5 indicates that the instance is a Message Queue for Apache RocketMQ 5.0 instance. The value SELF_BUILT indicates that the instance is a self-managed RocketMQ instance.
     *
     * @example CLOUD_5
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The instance username.
     *
     * @example root
     *
     * @var string
     */
    public $instanceUsername;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1iu***
     *
     * @var string
     */
    public $instanceVSwitchIds;

    /**
     * @description The virtual private cloud (VPC) ID.
     *
     * @example vpc-***
     *
     * @var string
     */
    public $instanceVpcId;

    /**
     * @description The offset from which messages are consumed. Valid values:
     *
     *   CONSUME_FROM_LAST_OFFSET: Messages are consumed from the latest offset.
     *   CONSUME_FROM_FIRST_OFFSET: Messages are consumed from the earliest offset.
     *   CONSUME_FROM_TIMESTAMP: Messages are consumed from the offset at the specified point in time.
     *
     * Default value: CONSUME_FROM_LAST_OFFSET.
     * @example CONSUMEFROMLASTOFFSET
     *
     * @var string
     */
    public $offset;

    /**
     * @description The region where the Message Queue for Apache RocketMQ instance resides.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tag that is used to filter messages.
     *
     * @example dataact
     *
     * @var string
     */
    public $tag;

    /**
     * @description The timestamp that indicates the time from which messages are consumed. This parameter is valid only if Offset is set to CONSUME_FROM_TIMESTAMP.
     *
     * @example 1664591760
     *
     * @var float
     */
    public $timestamp;

    /**
     * @description The name of the topic on the Message Queue for Apache RocketMQ instance. For more information, see [Limits](~~163289~~).
     *
     * @example migration_instance
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'authType'                => 'AuthType',
        'groupId'                 => 'GroupId',
        'instanceEndpoint'        => 'InstanceEndpoint',
        'instanceId'              => 'InstanceId',
        'instanceNetwork'         => 'InstanceNetwork',
        'instancePassword'        => 'InstancePassword',
        'instanceSecurityGroupId' => 'InstanceSecurityGroupId',
        'instanceType'            => 'InstanceType',
        'instanceUsername'        => 'InstanceUsername',
        'instanceVSwitchIds'      => 'InstanceVSwitchIds',
        'instanceVpcId'           => 'InstanceVpcId',
        'offset'                  => 'Offset',
        'regionId'                => 'RegionId',
        'tag'                     => 'Tag',
        'timestamp'               => 'Timestamp',
        'topic'                   => 'Topic',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
