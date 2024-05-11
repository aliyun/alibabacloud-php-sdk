<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source;

use AlibabaCloud\Tea\Model;

class sourceKafkaParameters extends Model
{
    /**
     * @description The ID of the consumer group that subscribes to the topic.
     *
     * @example GID_TEST
     *
     * @var string
     */
    public $consumerGroup;

    /**
     * @description The instance ID.
     *
     * @example i-bp1fbtrnqmjvgq66ajdw
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
     * @description The region ID of the Message Queue for Apache Kafka instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The security group ID.
     *
     * @example sg-2vcgdxz7o1n9zappuimt
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The name of the topic.
     *
     * @example topic_empower_1642473600414
     *
     * @var string
     */
    public $topic;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-wz9qqeovkwjxlu9uc8rst
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @description The encoding or decoding format. Valid values: Json, Text, and Binary. The value Json indicates that bytes are decoded into UTF-8 strings and then parsed into JSON format. The value Text indicates that bytes are decoded into UTF-8 strings and then put into the payload. The value Binary indicates that bytes are encoded into Base64 strings and put into the payload.
     *
     * @example Text
     *
     * @var string
     */
    public $valueDataType;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-2zehizpoendb3nwwu9w5o
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
