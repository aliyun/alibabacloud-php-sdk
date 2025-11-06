<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\QueryMessageByMessageIdResponseBody\data;

use AlibabaCloud\Dara\Model;

class voList extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $contentEncoding;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $correlationId;

    /**
     * @var int
     */
    public $deliveryMode;

    /**
     * @var string
     */
    public $exchangeName;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var string
     */
    public $headers;

    /**
     * @var bool
     */
    public $immediate;

    /**
     * @var bool
     */
    public $mandatory;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $processToken;

    /**
     * @var int
     */
    public $reconsumeTimes;

    /**
     * @var string
     */
    public $replyTo;

    /**
     * @var string
     */
    public $routingKey;

    /**
     * @var int
     */
    public $storeTimestamp;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'body' => 'Body',
        'clusterId' => 'ClusterId',
        'contentEncoding' => 'ContentEncoding',
        'contentType' => 'ContentType',
        'correlationId' => 'CorrelationId',
        'deliveryMode' => 'DeliveryMode',
        'exchangeName' => 'ExchangeName',
        'expiration' => 'Expiration',
        'headers' => 'Headers',
        'immediate' => 'Immediate',
        'mandatory' => 'Mandatory',
        'messageId' => 'MessageId',
        'priority' => 'Priority',
        'processToken' => 'ProcessToken',
        'reconsumeTimes' => 'ReconsumeTimes',
        'replyTo' => 'ReplyTo',
        'routingKey' => 'RoutingKey',
        'storeTimestamp' => 'StoreTimestamp',
        'timestamp' => 'Timestamp',
        'type' => 'Type',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->correlationId) {
            $res['CorrelationId'] = $this->correlationId;
        }

        if (null !== $this->deliveryMode) {
            $res['DeliveryMode'] = $this->deliveryMode;
        }

        if (null !== $this->exchangeName) {
            $res['ExchangeName'] = $this->exchangeName;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->headers) {
            $res['Headers'] = $this->headers;
        }

        if (null !== $this->immediate) {
            $res['Immediate'] = $this->immediate;
        }

        if (null !== $this->mandatory) {
            $res['Mandatory'] = $this->mandatory;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->processToken) {
            $res['ProcessToken'] = $this->processToken;
        }

        if (null !== $this->reconsumeTimes) {
            $res['ReconsumeTimes'] = $this->reconsumeTimes;
        }

        if (null !== $this->replyTo) {
            $res['ReplyTo'] = $this->replyTo;
        }

        if (null !== $this->routingKey) {
            $res['RoutingKey'] = $this->routingKey;
        }

        if (null !== $this->storeTimestamp) {
            $res['StoreTimestamp'] = $this->storeTimestamp;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['CorrelationId'])) {
            $model->correlationId = $map['CorrelationId'];
        }

        if (isset($map['DeliveryMode'])) {
            $model->deliveryMode = $map['DeliveryMode'];
        }

        if (isset($map['ExchangeName'])) {
            $model->exchangeName = $map['ExchangeName'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['Headers'])) {
            $model->headers = $map['Headers'];
        }

        if (isset($map['Immediate'])) {
            $model->immediate = $map['Immediate'];
        }

        if (isset($map['Mandatory'])) {
            $model->mandatory = $map['Mandatory'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ProcessToken'])) {
            $model->processToken = $map['ProcessToken'];
        }

        if (isset($map['ReconsumeTimes'])) {
            $model->reconsumeTimes = $map['ReconsumeTimes'];
        }

        if (isset($map['ReplyTo'])) {
            $model->replyTo = $map['ReplyTo'];
        }

        if (isset($map['RoutingKey'])) {
            $model->routingKey = $map['RoutingKey'];
        }

        if (isset($map['StoreTimestamp'])) {
            $model->storeTimestamp = $map['StoreTimestamp'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
