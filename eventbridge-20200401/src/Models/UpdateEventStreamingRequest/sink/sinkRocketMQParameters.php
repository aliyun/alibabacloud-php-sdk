<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\deliveryOrderType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\instanceEndpoint;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\instanceId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\instancePassword;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\instanceType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\instanceUsername;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\keys;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\network;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\properties;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\securityGroupId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\shardingKey;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\tags;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\topic;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\vpcId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkRocketMQParameters\vSwitchIds;

class sinkRocketMQParameters extends Model
{
    /**
     * @var body
     */
    public $body;

    /**
     * @var deliveryOrderType
     */
    public $deliveryOrderType;

    /**
     * @var instanceEndpoint
     */
    public $instanceEndpoint;

    /**
     * @var instanceId
     */
    public $instanceId;

    /**
     * @var instancePassword
     */
    public $instancePassword;

    /**
     * @var instanceType
     */
    public $instanceType;

    /**
     * @var instanceUsername
     */
    public $instanceUsername;

    /**
     * @var keys
     */
    public $keys;

    /**
     * @var network
     */
    public $network;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @var securityGroupId
     */
    public $securityGroupId;

    /**
     * @var shardingKey
     */
    public $shardingKey;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var topic
     */
    public $topic;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @var vpcId
     */
    public $vpcId;
    protected $_name = [
        'body' => 'Body',
        'deliveryOrderType' => 'DeliveryOrderType',
        'instanceEndpoint' => 'InstanceEndpoint',
        'instanceId' => 'InstanceId',
        'instancePassword' => 'InstancePassword',
        'instanceType' => 'InstanceType',
        'instanceUsername' => 'InstanceUsername',
        'keys' => 'Keys',
        'network' => 'Network',
        'properties' => 'Properties',
        'securityGroupId' => 'SecurityGroupId',
        'shardingKey' => 'ShardingKey',
        'tags' => 'Tags',
        'topic' => 'Topic',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (null !== $this->deliveryOrderType) {
            $this->deliveryOrderType->validate();
        }
        if (null !== $this->instanceEndpoint) {
            $this->instanceEndpoint->validate();
        }
        if (null !== $this->instanceId) {
            $this->instanceId->validate();
        }
        if (null !== $this->instancePassword) {
            $this->instancePassword->validate();
        }
        if (null !== $this->instanceType) {
            $this->instanceType->validate();
        }
        if (null !== $this->instanceUsername) {
            $this->instanceUsername->validate();
        }
        if (null !== $this->keys) {
            $this->keys->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (null !== $this->properties) {
            $this->properties->validate();
        }
        if (null !== $this->securityGroupId) {
            $this->securityGroupId->validate();
        }
        if (null !== $this->shardingKey) {
            $this->shardingKey->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->topic) {
            $this->topic->validate();
        }
        if (null !== $this->vSwitchIds) {
            $this->vSwitchIds->validate();
        }
        if (null !== $this->vpcId) {
            $this->vpcId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->deliveryOrderType) {
            $res['DeliveryOrderType'] = null !== $this->deliveryOrderType ? $this->deliveryOrderType->toArray($noStream) : $this->deliveryOrderType;
        }

        if (null !== $this->instanceEndpoint) {
            $res['InstanceEndpoint'] = null !== $this->instanceEndpoint ? $this->instanceEndpoint->toArray($noStream) : $this->instanceEndpoint;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = null !== $this->instanceId ? $this->instanceId->toArray($noStream) : $this->instanceId;
        }

        if (null !== $this->instancePassword) {
            $res['InstancePassword'] = null !== $this->instancePassword ? $this->instancePassword->toArray($noStream) : $this->instancePassword;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = null !== $this->instanceType ? $this->instanceType->toArray($noStream) : $this->instanceType;
        }

        if (null !== $this->instanceUsername) {
            $res['InstanceUsername'] = null !== $this->instanceUsername ? $this->instanceUsername->toArray($noStream) : $this->instanceUsername;
        }

        if (null !== $this->keys) {
            $res['Keys'] = null !== $this->keys ? $this->keys->toArray($noStream) : $this->keys;
        }

        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toArray($noStream) : $this->properties;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = null !== $this->securityGroupId ? $this->securityGroupId->toArray($noStream) : $this->securityGroupId;
        }

        if (null !== $this->shardingKey) {
            $res['ShardingKey'] = null !== $this->shardingKey ? $this->shardingKey->toArray($noStream) : $this->shardingKey;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->topic) {
            $res['Topic'] = null !== $this->topic ? $this->topic->toArray($noStream) : $this->topic;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toArray($noStream) : $this->vSwitchIds;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = null !== $this->vpcId ? $this->vpcId->toArray($noStream) : $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }

        if (isset($map['DeliveryOrderType'])) {
            $model->deliveryOrderType = deliveryOrderType::fromMap($map['DeliveryOrderType']);
        }

        if (isset($map['InstanceEndpoint'])) {
            $model->instanceEndpoint = instanceEndpoint::fromMap($map['InstanceEndpoint']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = instanceId::fromMap($map['InstanceId']);
        }

        if (isset($map['InstancePassword'])) {
            $model->instancePassword = instancePassword::fromMap($map['InstancePassword']);
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = instanceType::fromMap($map['InstanceType']);
        }

        if (isset($map['InstanceUsername'])) {
            $model->instanceUsername = instanceUsername::fromMap($map['InstanceUsername']);
        }

        if (isset($map['Keys'])) {
            $model->keys = keys::fromMap($map['Keys']);
        }

        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = securityGroupId::fromMap($map['SecurityGroupId']);
        }

        if (isset($map['ShardingKey'])) {
            $model->shardingKey = shardingKey::fromMap($map['ShardingKey']);
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['Topic'])) {
            $model->topic = topic::fromMap($map['Topic']);
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = vpcId::fromMap($map['VpcId']);
        }

        return $model;
    }
}
