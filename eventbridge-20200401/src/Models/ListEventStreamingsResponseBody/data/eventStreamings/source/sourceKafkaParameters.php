<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source;

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
     * @description The ID of the Message Queue for Apache Kafka instance.
     *
     * @example bastionhost-cn-i7m2gwt7z1n
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The network type. Valid values: Default and PublicNetwork. Default value: Default. The value PublicNetwork indicates a VPC.
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
     * @example cn-chengdu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The security group ID.
     *
     * @example sg-5ud5f3p0rqqis69tpp8eho7cp
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The name of the topic on the Message Queue for Apache Kafka instance.
     *
     * @example topic_empower_1642473600414
     *
     * @var string
     */
    public $topic;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1rmi8rind7eo50cbied
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
     * @example vpc-wz9ki1qdlx3cx5cbbhowf
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
