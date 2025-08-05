<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkOpenSourceRabbitMQParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkOpenSourceRabbitMQParameters\messageId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkOpenSourceRabbitMQParameters\properties;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkOpenSourceRabbitMQParameters\routingKey;
use AlibabaCloud\Tea\Model;

class sinkOpenSourceRabbitMQParameters extends Model
{
    /**
     * @example ACL
     *
     * @var string
     */
    public $authType;

    /**
     * @var body
     */
    public $body;

    /**
     * @example 192.168.1.1:9876
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example my_exchange
     *
     * @var string
     */
    public $exchange;

    /**
     * @var messageId
     */
    public $messageId;

    /**
     * @example PrivateNetwork
     *
     * @var string
     */
    public $networkType;

    /**
     * @example ****
     *
     * @var string
     */
    public $password;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @example my_queue
     *
     * @var string
     */
    public $queueName;

    /**
     * @var routingKey
     */
    public $routingKey;

    /**
     * @example sg-2vcgdxz7o1n9zapp****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example exchange
     *
     * @var string
     */
    public $targetType;

    /**
     * @example admin
     *
     * @var string
     */
    public $username;

    /**
     * @example vsw-wz9qqeovkwjxlu9uc****
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @example Vhost1
     *
     * @var string
     */
    public $virtualHostName;

    /**
     * @description VPC ID。
     *
     * @example vpc-2zehizpoendb3****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'authType' => 'AuthType',
        'body' => 'Body',
        'endpoint' => 'Endpoint',
        'exchange' => 'Exchange',
        'messageId' => 'MessageId',
        'networkType' => 'NetworkType',
        'password' => 'Password',
        'properties' => 'Properties',
        'queueName' => 'QueueName',
        'routingKey' => 'RoutingKey',
        'securityGroupId' => 'SecurityGroupId',
        'targetType' => 'TargetType',
        'username' => 'Username',
        'vSwitchIds' => 'VSwitchIds',
        'virtualHostName' => 'VirtualHostName',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->exchange) {
            $res['Exchange'] = $this->exchange;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = null !== $this->messageId ? $this->messageId->toMap() : null;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->routingKey) {
            $res['RoutingKey'] = null !== $this->routingKey ? $this->routingKey->toMap() : null;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->virtualHostName) {
            $res['VirtualHostName'] = $this->virtualHostName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkOpenSourceRabbitMQParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }
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
            $model->networkType = $map['NetworkType'];
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
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }
        if (isset($map['VirtualHostName'])) {
            $model->virtualHostName = $map['VirtualHostName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
