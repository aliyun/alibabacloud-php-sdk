<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source;

use AlibabaCloud\Tea\Model;

class sourceKafkaParameters extends Model
{
    /**
     * @description The ID of the consumer group that subscribes to the topic.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $consumerGroup;

    /**
     * @description The ID of the Message Queue for Apache Kafka instance.
     *
     * @example i-8vbh4a5b9yfhgkkzm98f
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The network. Default value: Default. The value PublicNetwork specifies a virtual private cloud (VPC).
     *
     * @example Default
     *
     * @var string
     */
    public $network;

    /**
     * @description The offset.
     *
     * @example latest
     *
     * @var string
     */
    public $offsetReset;

    /**
     * @description The ID of the region where the Message Queue for Apache Kafka instance resides.
     *
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the security group to which the Message Queue for Apache Kafka instance belongs.
     *
     * @example sg-uf6jcm3y5hcs7hklytxh
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The name of the topic in the Message Queue for Apache Kafka instance.
     *
     * @example topic_empower_1641539400786
     *
     * @var string
     */
    public $topic;

    /**
     * @description The ID of the vSwitch with which the Message Queue for Apache Kafka instance is associated.
     *
     * @example vsw-wz9t1l1e8eu2omwjazmtm
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @description The ID of the VPC to which the Message Queue for Apache Kafka instance belongs.
     *
     * @example vpc-2ze6p0o345nykmekxtuop
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'consumerGroup'   => 'ConsumerGroup',
        'instanceId'      => 'InstanceId',
        'network'         => 'Network',
        'offsetReset'     => 'OffsetReset',
        'regionId'        => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
        'topic'           => 'Topic',
        'vSwitchIds'      => 'VSwitchIds',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerGroup) {
            $res['ConsumerGroup'] = $this->consumerGroup;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->offsetReset) {
            $res['OffsetReset'] = $this->offsetReset;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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
     * @return sourceKafkaParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerGroup'])) {
            $model->consumerGroup = $map['ConsumerGroup'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['OffsetReset'])) {
            $model->offsetReset = $map['OffsetReset'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
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
