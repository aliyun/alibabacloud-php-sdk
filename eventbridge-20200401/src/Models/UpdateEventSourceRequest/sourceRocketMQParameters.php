<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest;

use AlibabaCloud\Tea\Model;

class sourceRocketMQParameters extends Model
{
    /**
     * @description The authentication type. You can set this parameter to ACL or leave this parameter empty.
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
    public $groupID;

    /**
     * @description The endpoint that is used to access the Message Queue for Apache RocketMQ instance.
     *
     * @example registry-vpc****.aliyuncs.com
     *
     * @var string
     */
    public $instanceEndpoint;

    /**
     * @description The ID of the Message Queue for Apache RocketMQ instance. For more information, see [Limits](https://help.aliyun.com/document_detail/163289.html).
     *
     * @example dbaudit-cn-i7m2nx2or01
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description None.
     *
     * @example None
     *
     * @var string
     */
    public $instanceNetwork;

    /**
     * @description The password that is used to access the Message Queue for Apache RocketMQ instance.
     *
     * @example ******
     *
     * @var string
     */
    public $instancePassword;

    /**
     * @description The ID of the security group to which the Message Queue for Apache RocketMQ instance belongs.
     *
     * @example sg-catalog-eventlistener
     *
     * @var string
     */
    public $instanceSecurityGroupId;

    /**
     * @description The type of the Message Queue for Apache RocketMQ instance. Valid values:
     *
     *   Cloud_4: Message Queue for Apache RocketMQ 4.0 instance.
     *   Cloud_5: Message Queue for Apache RocketMQ 5.0 instance.
     *
     * @example Cloud_4
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The username that is used to access the Message Queue for Apache RocketMQ instance.
     *
     * @example root
     *
     * @var string
     */
    public $instanceUsername;

    /**
     * @description The ID of the vSwitch with which the Message Queue for Apache RocketMQ instance is associated.
     *
     * @example vsw-bp10rbrt6rb6vrd89****
     *
     * @var string
     */
    public $instanceVSwitchIds;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the Message Queue for Apache RocketMQ instance resides.
     *
     * @example vpc-bp1a4gmlk31hyg6ptl3ss
     *
     * @var string
     */
    public $instanceVpcId;

    /**
     * @description The offset from which message consumption starts. Valid values:
     *
     *   CONSUME_FROM_LAST_OFFSET: Start message consumption from the latest offset.
     *   CONSUME_FROM_FIRST_OFFSET: Start message consumption from the earliest offset.
     *   CONSUME_FROM_TIMESTAMP: Start message consumption from the offset at the specified point in time.
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
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tag that is used to filter messages.
     *
     * @example KEY2
     *
     * @var string
     */
    public $tag;

    /**
     * @description The timestamp that specifies the time from which messages are consumed. This parameter is valid only if you set Offset to CONSUME_FROM_TIMESTAMP.
     *
     * @example 1663555399032
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The name of the topic on the Message Queue for Apache RocketMQ instance. For more information, see [Limits](https://help.aliyun.com/document_detail/163289.html).
     *
     * @example topic_default_195820716552192
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'authType'                => 'AuthType',
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
