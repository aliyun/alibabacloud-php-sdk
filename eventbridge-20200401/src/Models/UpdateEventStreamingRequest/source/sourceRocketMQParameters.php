<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source;

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
     * @description The ID of the consumer group on the ApsaraMQ for RocketMQ instance.
     *
     * @example GID_test
     *
     * @var string
     */
    public $groupID;

    /**
     * @description The endpoint that is used to access the ApsaraMQ for RocketMQ instance.
     *
     * @example reg****-vpc.cn-zhangjiakou.aliyuncs.com
     *
     * @var string
     */
    public $instanceEndpoint;

    /**
     * @description The ID of the ApsaraMQ for RocketMQ instance.
     *
     * @example i-f8z9a9mcgwri1c1idd0e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The network type of the ApsaraMQ for RocketMQ instance. Valid values:
     *
     * PublicNetwork and PrivateNetwork.
     * @example PublicNetwork
     *
     * @var string
     */
    public $instanceNetwork;

    /**
     * @description The password that is used to access the ApsaraMQ for RocketMQ instance.
     *
     * @example admin
     *
     * @var string
     */
    public $instancePassword;

    /**
     * @description The ID of the security group to which the ApsaraMQ for RocketMQ instance belongs.
     *
     * @example sg-m5edtu24f12345****
     *
     * @var string
     */
    public $instanceSecurityGroupId;

    /**
     * @description The type of the ApsaraMQ for RocketMQ instance.
     *
     * @example 2
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The username that is used to access the ApsaraMQ for RocketMQ instance.
     *
     * @example admin
     *
     * @var string
     */
    public $instanceUsername;

    /**
     * @description The ID of the vSwitch with which the ApsaraMQ for RocketMQ instance is associated.
     *
     * @example vsw-m5ev8asdc6h12****
     *
     * @var string
     */
    public $instanceVSwitchIds;

    /**
     * @description The ID of the VPC to which the ApsaraMQ for RocketMQ instance belongs.
     *
     * @example vpc-m5e3sv4b12345****
     *
     * @var string
     */
    public $instanceVpcId;

    /**
     * @description The offset from which messages are consumed. Valid values:
     *
     *   CONSUMEFROMLASTOFFSET: Messages are consumed from the latest offset.
     *   CONSUMEFROMFIRSTOFFSET: Messages are consumed from the earliest offset.
     *   CONSUMEFROMTIMESTAMP: Messages are consumed from the offset at the specified point in time.
     *
     * Default value: CONSUMEFROMLASTOFFSET.
     * @example CONSUMEFROMLASTOFFSET
     *
     * @var string
     */
    public $offset;

    /**
     * @description The ID of the region where the ApsaraMQ for RocketMQ instance resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tag that you want to use to filter messages.
     *
     * @example test
     *
     * @var string
     */
    public $tag;

    /**
     * @description The timestamp that specifies the time from which messages are consumed. This parameter is valid only if you set Offset to CONSUMEFROMTIMESTAMP.
     *
     * @example 1670656652009
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The name of the topic on the ApsaraMQ for RocketMQ instance.
     *
     * @example TOPIC-cainiao-pcs-order-process-inBoundConditionCheck
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
