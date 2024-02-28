<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source;

use AlibabaCloud\Tea\Model;

class sourceKafkaParameters extends Model
{
    /**
     * @description The group ID of the consumer that subscribes to the topic.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $consumerGroup;

    /**
     * @description The ID of the Message Queue for Apache Kafka instance.
     *
     * @example r-8vb64581862cd814
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The network setting. Default value: Default. The value PublicNetwork specifies a virtual private cloud (VPC).
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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The security group ID.
     *
     * @example sg-bp1iv19sp1msc7zot4wr
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The topic name.
     *
     * @example popvip_center_robot_order
     *
     * @var string
     */
    public $topic;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp179l3llg3jjxwrq72hh
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $valueDataType;

    /**
     * @description The VPC ID.
     *
     * @example vpc-8vblalsi0vbhizr77cbhu
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
        'valueDataType'   => 'ValueDataType',
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
        if (null !== $this->valueDataType) {
            $res['ValueDataType'] = $this->valueDataType;
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
        if (isset($map['ValueDataType'])) {
            $model->valueDataType = $map['ValueDataType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
