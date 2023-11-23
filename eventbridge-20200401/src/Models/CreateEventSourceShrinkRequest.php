<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class CreateEventSourceShrinkRequest extends Model
{
    /**
     * @description The description of the event source.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the event bus with which the event source is associated.
     *
     * @example my-event-bus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The name of the event source.
     *
     * @example myrabbitmq.sourc
     *
     * @var string
     */
    public $eventSourceName;

    /**
     * @description The parameters that are configured if the event source is HTTP events.
     *
     * @var string
     */
    public $sourceHttpEventParametersShrink;

    /**
     * @description The parameters that are configured if the event source is Message Queue for Apache Kafka.
     *
     * @var string
     */
    public $sourceKafkaParametersShrink;

    /**
     * @description The parameters that are configured if the event source is Message Service (MNS). If you specify MNS as the event source, you must configure RegionId, IsBase64Decode, and QueueName.
     *
     * @var string
     */
    public $sourceMNSParametersShrink;

    /**
     * @description The parameters that are configured if the event source is Message Queue for RabbitMQ.
     *
     * @var string
     */
    public $sourceRabbitMQParametersShrink;

    /**
     * @description The parameters that are configured if the event source is Message Queue for Apache RocketMQ.
     *
     * @var string
     */
    public $sourceRocketMQParametersShrink;

    /**
     * @description The parameters that are configured if the event source is Log Service.
     *
     * @var string
     */
    public $sourceSLSParametersShrink;

    /**
     * @description The parameters that are configured if the event source is scheduled events.
     *
     * @var string
     */
    public $sourceScheduledEventParametersShrink;
    protected $_name = [
        'description'                          => 'Description',
        'eventBusName'                         => 'EventBusName',
        'eventSourceName'                      => 'EventSourceName',
        'sourceHttpEventParametersShrink'      => 'SourceHttpEventParameters',
        'sourceKafkaParametersShrink'          => 'SourceKafkaParameters',
        'sourceMNSParametersShrink'            => 'SourceMNSParameters',
        'sourceRabbitMQParametersShrink'       => 'SourceRabbitMQParameters',
        'sourceRocketMQParametersShrink'       => 'SourceRocketMQParameters',
        'sourceSLSParametersShrink'            => 'SourceSLSParameters',
        'sourceScheduledEventParametersShrink' => 'SourceScheduledEventParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->eventSourceName) {
            $res['EventSourceName'] = $this->eventSourceName;
        }
        if (null !== $this->sourceHttpEventParametersShrink) {
            $res['SourceHttpEventParameters'] = $this->sourceHttpEventParametersShrink;
        }
        if (null !== $this->sourceKafkaParametersShrink) {
            $res['SourceKafkaParameters'] = $this->sourceKafkaParametersShrink;
        }
        if (null !== $this->sourceMNSParametersShrink) {
            $res['SourceMNSParameters'] = $this->sourceMNSParametersShrink;
        }
        if (null !== $this->sourceRabbitMQParametersShrink) {
            $res['SourceRabbitMQParameters'] = $this->sourceRabbitMQParametersShrink;
        }
        if (null !== $this->sourceRocketMQParametersShrink) {
            $res['SourceRocketMQParameters'] = $this->sourceRocketMQParametersShrink;
        }
        if (null !== $this->sourceSLSParametersShrink) {
            $res['SourceSLSParameters'] = $this->sourceSLSParametersShrink;
        }
        if (null !== $this->sourceScheduledEventParametersShrink) {
            $res['SourceScheduledEventParameters'] = $this->sourceScheduledEventParametersShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEventSourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['EventSourceName'])) {
            $model->eventSourceName = $map['EventSourceName'];
        }
        if (isset($map['SourceHttpEventParameters'])) {
            $model->sourceHttpEventParametersShrink = $map['SourceHttpEventParameters'];
        }
        if (isset($map['SourceKafkaParameters'])) {
            $model->sourceKafkaParametersShrink = $map['SourceKafkaParameters'];
        }
        if (isset($map['SourceMNSParameters'])) {
            $model->sourceMNSParametersShrink = $map['SourceMNSParameters'];
        }
        if (isset($map['SourceRabbitMQParameters'])) {
            $model->sourceRabbitMQParametersShrink = $map['SourceRabbitMQParameters'];
        }
        if (isset($map['SourceRocketMQParameters'])) {
            $model->sourceRocketMQParametersShrink = $map['SourceRocketMQParameters'];
        }
        if (isset($map['SourceSLSParameters'])) {
            $model->sourceSLSParametersShrink = $map['SourceSLSParameters'];
        }
        if (isset($map['SourceScheduledEventParameters'])) {
            $model->sourceScheduledEventParametersShrink = $map['SourceScheduledEventParameters'];
        }

        return $model;
    }
}
