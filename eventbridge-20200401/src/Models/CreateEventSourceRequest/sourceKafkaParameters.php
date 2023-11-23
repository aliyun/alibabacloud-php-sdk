<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest;

use AlibabaCloud\Tea\Model;

class sourceKafkaParameters extends Model
{
    /**
     * @description The ID of the consumer group that subscribes to the topic.
     *
     * @example wechat_peer_prod
     *
     * @var string
     */
    public $consumerGroup;

    /**
     * @description The ID of the Message Queue for Apache Kafka instance.
     *
     * @example pc-2zehmg67txzuyuuwlxv4f
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The maximum number of consumers.
     *
     * @example 1
     *
     * @var int
     */
    public $maximumTasks;

    /**
     * @description The network. Valid values: Default and PublicNetwork. Default value: Default. The value PublicNetwork indicates a self-managed network.
     *
     * @example Default
     *
     * @var string
     */
    public $network;

    /**
     * @description The consumer offset.
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
     * @description The ID of the security group to which the Message Queue for Apache Kafka instance belongs. This parameter is required only if you set Network to PublicNetwork.
     *
     * @example sg-8vbf66aoyp0wfzrzxlmy
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The name of the topic on the Message Queue for Apache Kafka instance.
     *
     * @example prod_ma_dispatch_center_call_record
     *
     * @var string
     */
    public $topic;

    /**
     * @description The ID of the vSwitch with which the Message Queue for Apache Kafka instance is associated. This parameter is required only if you set Network to PublicNetwork.
     *
     * @example vsw-bp127azpeirmwu4q9ttqi
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @description The ID of the VPC in which the Message Queue for Apache Kafka instance resides. This parameter is required only if you set Network to PublicNetwork.
     *
     * @example vpc-2ze5ejm986a73qq3vshlk
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'consumerGroup'   => 'ConsumerGroup',
        'instanceId'      => 'InstanceId',
        'maximumTasks'    => 'MaximumTasks',
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
        if (null !== $this->maximumTasks) {
            $res['MaximumTasks'] = $this->maximumTasks;
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
        if (isset($map['MaximumTasks'])) {
            $model->maximumTasks = $map['MaximumTasks'];
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
