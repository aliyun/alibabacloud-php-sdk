<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkApacheRocketMQCheckpointParameters\consumeTimestamp;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkApacheRocketMQCheckpointParameters\group;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkApacheRocketMQCheckpointParameters\topic;
use AlibabaCloud\Tea\Model;

class sinkApacheRocketMQCheckpointParameters extends Model
{
    /**
     * @description The timestamp that specifies the time from which messages are consumed.
     *
     * @var consumeTimestamp
     */
    public $consumeTimestamp;

    /**
     * @description The ID of the consumer group.
     *
     * @var group
     */
    public $group;

    /**
     * @description The endpoint that is used to access the Apache RocketMQ instance.
     *
     * @example 192.168.1.1:9876
     *
     * @var string
     */
    public $instanceEndpoint;

    /**
     * @description The password that is used to access the Apache RocketMQ instance.
     *
     * @example ****
     *
     * @var string
     */
    public $instancePassword;

    /**
     * @description The username that is used to access the Apache RocketMQ instance.
     *
     * @example admin
     *
     * @var string
     */
    public $instanceUsername;

    /**
     * @description The network type.
     *
     *   PublicNetwork
     *   PrivateNetwork
     *
     * @example PrivateNetwork
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The ID of the security group.
     *
     * @example sg-2ze5bmpw6adn0q******
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The name of the topic on the Apache RocketMQ instance.
     *
     * @var topic
     */
    public $topic;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-uf62oqt1twuevrt******
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-2zeccak5pb0j3ay******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'consumeTimestamp' => 'ConsumeTimestamp',
        'group' => 'Group',
        'instanceEndpoint' => 'InstanceEndpoint',
        'instancePassword' => 'InstancePassword',
        'instanceUsername' => 'InstanceUsername',
        'networkType' => 'NetworkType',
        'securityGroupId' => 'SecurityGroupId',
        'topic' => 'Topic',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumeTimestamp) {
            $res['ConsumeTimestamp'] = null !== $this->consumeTimestamp ? $this->consumeTimestamp->toMap() : null;
        }
        if (null !== $this->group) {
            $res['Group'] = null !== $this->group ? $this->group->toMap() : null;
        }
        if (null !== $this->instanceEndpoint) {
            $res['InstanceEndpoint'] = $this->instanceEndpoint;
        }
        if (null !== $this->instancePassword) {
            $res['InstancePassword'] = $this->instancePassword;
        }
        if (null !== $this->instanceUsername) {
            $res['InstanceUsername'] = $this->instanceUsername;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = null !== $this->topic ? $this->topic->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkApacheRocketMQCheckpointParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumeTimestamp'])) {
            $model->consumeTimestamp = consumeTimestamp::fromMap($map['ConsumeTimestamp']);
        }
        if (isset($map['Group'])) {
            $model->group = group::fromMap($map['Group']);
        }
        if (isset($map['InstanceEndpoint'])) {
            $model->instanceEndpoint = $map['InstanceEndpoint'];
        }
        if (isset($map['InstancePassword'])) {
            $model->instancePassword = $map['InstancePassword'];
        }
        if (isset($map['InstanceUsername'])) {
            $model->instanceUsername = $map['InstanceUsername'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = topic::fromMap($map['Topic']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
