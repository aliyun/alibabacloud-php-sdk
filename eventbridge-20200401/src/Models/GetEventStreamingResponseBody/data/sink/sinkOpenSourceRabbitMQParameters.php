<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkOpenSourceRabbitMQParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkOpenSourceRabbitMQParameters\messageId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkOpenSourceRabbitMQParameters\networkType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkOpenSourceRabbitMQParameters\properties;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkOpenSourceRabbitMQParameters\routingKey;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkOpenSourceRabbitMQParameters\securityGroupId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkOpenSourceRabbitMQParameters\vpcId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkOpenSourceRabbitMQParameters\vSwitchIds;

class sinkOpenSourceRabbitMQParameters extends Model
{
    /**
     * @var body
     */
    public $body;
    /**
     * @var string
     */
    public $endpoint;
    /**
     * @var string
     */
    public $exchange;
    /**
     * @var messageId
     */
    public $messageId;
    /**
     * @var networkType
     */
    public $networkType;
    /**
     * @var string
     */
    public $password;
    /**
     * @var properties
     */
    public $properties;
    /**
     * @var string
     */
    public $queueName;
    /**
     * @var routingKey
     */
    public $routingKey;
    /**
     * @var securityGroupId
     */
    public $securityGroupId;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var string
     */
    public $username;
    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;
    /**
     * @var string
     */
    public $virtualHostName;
    /**
     * @var vpcId
     */
    public $vpcId;
    protected $_name = [
        'body'            => 'Body',
        'endpoint'        => 'Endpoint',
        'exchange'        => 'Exchange',
        'messageId'       => 'MessageId',
        'networkType'     => 'NetworkType',
        'password'        => 'Password',
        'properties'      => 'Properties',
        'queueName'       => 'QueueName',
        'routingKey'      => 'RoutingKey',
        'securityGroupId' => 'SecurityGroupId',
        'targetType'      => 'TargetType',
        'username'        => 'Username',
        'vSwitchIds'      => 'VSwitchIds',
        'virtualHostName' => 'VirtualHostName',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (null !== $this->messageId) {
            $this->messageId->validate();
        }
        if (null !== $this->networkType) {
            $this->networkType->validate();
        }
        if (null !== $this->properties) {
            $this->properties->validate();
        }
        if (null !== $this->routingKey) {
            $this->routingKey->validate();
        }
        if (null !== $this->securityGroupId) {
            $this->securityGroupId->validate();
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

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->exchange) {
            $res['Exchange'] = $this->exchange;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = null !== $this->messageId ? $this->messageId->toArray($noStream) : $this->messageId;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = null !== $this->networkType ? $this->networkType->toArray($noStream) : $this->networkType;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toArray($noStream) : $this->properties;
        }

        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        if (null !== $this->routingKey) {
            $res['RoutingKey'] = null !== $this->routingKey ? $this->routingKey->toArray($noStream) : $this->routingKey;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = null !== $this->securityGroupId ? $this->securityGroupId->toArray($noStream) : $this->securityGroupId;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toArray($noStream) : $this->vSwitchIds;
        }

        if (null !== $this->virtualHostName) {
            $res['VirtualHostName'] = $this->virtualHostName;
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

        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['Exchange'])) {
            $model->exchange = $map['Exchange'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = messageId::fromMap($map['MessageId']);
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = networkType::fromMap($map['NetworkType']);
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }

        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        if (isset($map['RoutingKey'])) {
            $model->routingKey = routingKey::fromMap($map['RoutingKey']);
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = securityGroupId::fromMap($map['SecurityGroupId']);
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }

        if (isset($map['VirtualHostName'])) {
            $model->virtualHostName = $map['VirtualHostName'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = vpcId::fromMap($map['VpcId']);
        }

        return $model;
    }
}
