<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\instanceEndpoint;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\instanceId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\instancePassword;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\instanceType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\instanceUsername;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\keys;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\network;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\properties;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\securityGroupId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\tags;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\topic;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\vpcId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters\vSwitchIds;
use AlibabaCloud\Tea\Model;

class sinkRocketMQParameters extends Model
{
    /**
     * @description The message content.
     *
     * @var body
     */
    public $body;

    /**
     * @description The endpoint that is used to access the ApsaraMQ for RocketMQ instance.
     *
     * @var instanceEndpoint
     */
    public $instanceEndpoint;

    /**
     * @description The ID of the ApsaraMQ for RocketMQ instance.
     *
     * @var instanceId
     */
    public $instanceId;

    /**
     * @description The password that is used to access the ApsaraMQ for RocketMQ instance.
     *
     * @var instancePassword
     */
    public $instancePassword;

    /**
     * @description The type of the ApsaraMQ for RocketMQ instance.
     *
     * @var instanceType
     */
    public $instanceType;

    /**
     * @description The username that is used to access the ApsaraMQ for RocketMQ instance.
     *
     * @var instanceUsername
     */
    public $instanceUsername;

    /**
     * @description The keys that you want to use to filter messages.
     *
     * @var keys
     */
    public $keys;

    /**
     * @description The network type. Valid values:
     *
     *   PublicNetwork and
     *   PrivateNetwork.
     *
     * @var network
     */
    public $network;

    /**
     * @description The properties that you want to use to filter messages.
     *
     * @var properties
     */
    public $properties;

    /**
     * @description The ID of the security group to which the ApsaraMQ for RocketMQ instance belongs.
     *
     * @var securityGroupId
     */
    public $securityGroupId;

    /**
     * @description The tags that you want to use to filter messages.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The name of the topic on the ApsaraMQ for RocketMQ instance.
     *
     * @var topic
     */
    public $topic;

    /**
     * @description The ID of the vSwitch with which the ApsaraMQ for RocketMQ instance is associated.
     *
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @description The ID of the VPC to which the ApsaraMQ for RocketMQ instance belongs.
     *
     * @var vpcId
     */
    public $vpcId;
    protected $_name = [
        'body'             => 'Body',
        'instanceEndpoint' => 'InstanceEndpoint',
        'instanceId'       => 'InstanceId',
        'instancePassword' => 'InstancePassword',
        'instanceType'     => 'InstanceType',
        'instanceUsername' => 'InstanceUsername',
        'keys'             => 'Keys',
        'network'          => 'Network',
        'properties'       => 'Properties',
        'securityGroupId'  => 'SecurityGroupId',
        'tags'             => 'Tags',
        'topic'            => 'Topic',
        'vSwitchIds'       => 'VSwitchIds',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->instanceEndpoint) {
            $res['InstanceEndpoint'] = null !== $this->instanceEndpoint ? $this->instanceEndpoint->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = null !== $this->instanceId ? $this->instanceId->toMap() : null;
        }
        if (null !== $this->instancePassword) {
            $res['InstancePassword'] = null !== $this->instancePassword ? $this->instancePassword->toMap() : null;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = null !== $this->instanceType ? $this->instanceType->toMap() : null;
        }
        if (null !== $this->instanceUsername) {
            $res['InstanceUsername'] = null !== $this->instanceUsername ? $this->instanceUsername->toMap() : null;
        }
        if (null !== $this->keys) {
            $res['Keys'] = null !== $this->keys ? $this->keys->toMap() : null;
        }
        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toMap() : null;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = null !== $this->securityGroupId ? $this->securityGroupId->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->topic) {
            $res['Topic'] = null !== $this->topic ? $this->topic->toMap() : null;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = null !== $this->vpcId ? $this->vpcId->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkRocketMQParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
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
