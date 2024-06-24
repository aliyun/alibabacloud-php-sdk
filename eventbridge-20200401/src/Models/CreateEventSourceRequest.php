<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest\sourceHttpEventParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest\sourceKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest\sourceMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest\sourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest\sourceRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest\sourceScheduledEventParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventSourceRequest\sourceSLSParameters;
use AlibabaCloud\Tea\Model;

class CreateEventSourceRequest extends Model
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
     * This parameter is required.
     * @example my-event-bus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The name of the event source.
     *
     * This parameter is required.
     * @example myrabbitmq.sourc
     *
     * @var string
     */
    public $eventSourceName;

    /**
     * @var mixed[]
     */
    public $externalSourceConfig;

    /**
     * @var int[]
     */
    public $externalSourceType;

    /**
     * @var bool
     */
    public $linkedExternalSource;

    /**
     * @description The parameters that are configured if the event source is HTTP events.
     *
     * @var sourceHttpEventParameters
     */
    public $sourceHttpEventParameters;

    /**
     * @description The parameters that are configured if the event source is Message Queue for Apache Kafka.
     *
     * @var sourceKafkaParameters
     */
    public $sourceKafkaParameters;

    /**
     * @description The parameters that are configured if the event source is Message Service (MNS). If you specify MNS as the event source, you must configure RegionId, IsBase64Decode, and QueueName.
     *
     * @var sourceMNSParameters
     */
    public $sourceMNSParameters;

    /**
     * @description The parameters that are configured if the event source is Message Queue for RabbitMQ.
     *
     * @var sourceRabbitMQParameters
     */
    public $sourceRabbitMQParameters;

    /**
     * @description The parameters that are configured if the event source is Message Queue for Apache RocketMQ.
     *
     * @var sourceRocketMQParameters
     */
    public $sourceRocketMQParameters;

    /**
     * @description The parameters that are configured if the event source is Log Service.
     *
     * @var sourceSLSParameters
     */
    public $sourceSLSParameters;

    /**
     * @description The parameters that are configured if you specify scheduled events as the event source.
     *
     * @var sourceScheduledEventParameters
     */
    public $sourceScheduledEventParameters;
    protected $_name = [
        'description'                    => 'Description',
        'eventBusName'                   => 'EventBusName',
        'eventSourceName'                => 'EventSourceName',
        'externalSourceConfig'           => 'ExternalSourceConfig',
        'externalSourceType'             => 'ExternalSourceType',
        'linkedExternalSource'           => 'LinkedExternalSource',
        'sourceHttpEventParameters'      => 'SourceHttpEventParameters',
        'sourceKafkaParameters'          => 'SourceKafkaParameters',
        'sourceMNSParameters'            => 'SourceMNSParameters',
        'sourceRabbitMQParameters'       => 'SourceRabbitMQParameters',
        'sourceRocketMQParameters'       => 'SourceRocketMQParameters',
        'sourceSLSParameters'            => 'SourceSLSParameters',
        'sourceScheduledEventParameters' => 'SourceScheduledEventParameters',
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
        if (null !== $this->externalSourceConfig) {
            $res['ExternalSourceConfig'] = $this->externalSourceConfig;
        }
        if (null !== $this->externalSourceType) {
            $res['ExternalSourceType'] = $this->externalSourceType;
        }
        if (null !== $this->linkedExternalSource) {
            $res['LinkedExternalSource'] = $this->linkedExternalSource;
        }
        if (null !== $this->sourceHttpEventParameters) {
            $res['SourceHttpEventParameters'] = null !== $this->sourceHttpEventParameters ? $this->sourceHttpEventParameters->toMap() : null;
        }
        if (null !== $this->sourceKafkaParameters) {
            $res['SourceKafkaParameters'] = null !== $this->sourceKafkaParameters ? $this->sourceKafkaParameters->toMap() : null;
        }
        if (null !== $this->sourceMNSParameters) {
            $res['SourceMNSParameters'] = null !== $this->sourceMNSParameters ? $this->sourceMNSParameters->toMap() : null;
        }
        if (null !== $this->sourceRabbitMQParameters) {
            $res['SourceRabbitMQParameters'] = null !== $this->sourceRabbitMQParameters ? $this->sourceRabbitMQParameters->toMap() : null;
        }
        if (null !== $this->sourceRocketMQParameters) {
            $res['SourceRocketMQParameters'] = null !== $this->sourceRocketMQParameters ? $this->sourceRocketMQParameters->toMap() : null;
        }
        if (null !== $this->sourceSLSParameters) {
            $res['SourceSLSParameters'] = null !== $this->sourceSLSParameters ? $this->sourceSLSParameters->toMap() : null;
        }
        if (null !== $this->sourceScheduledEventParameters) {
            $res['SourceScheduledEventParameters'] = null !== $this->sourceScheduledEventParameters ? $this->sourceScheduledEventParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEventSourceRequest
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
        if (isset($map['ExternalSourceConfig'])) {
            $model->externalSourceConfig = $map['ExternalSourceConfig'];
        }
        if (isset($map['ExternalSourceType'])) {
            $model->externalSourceType = $map['ExternalSourceType'];
        }
        if (isset($map['LinkedExternalSource'])) {
            $model->linkedExternalSource = $map['LinkedExternalSource'];
        }
        if (isset($map['SourceHttpEventParameters'])) {
            $model->sourceHttpEventParameters = sourceHttpEventParameters::fromMap($map['SourceHttpEventParameters']);
        }
        if (isset($map['SourceKafkaParameters'])) {
            $model->sourceKafkaParameters = sourceKafkaParameters::fromMap($map['SourceKafkaParameters']);
        }
        if (isset($map['SourceMNSParameters'])) {
            $model->sourceMNSParameters = sourceMNSParameters::fromMap($map['SourceMNSParameters']);
        }
        if (isset($map['SourceRabbitMQParameters'])) {
            $model->sourceRabbitMQParameters = sourceRabbitMQParameters::fromMap($map['SourceRabbitMQParameters']);
        }
        if (isset($map['SourceRocketMQParameters'])) {
            $model->sourceRocketMQParameters = sourceRocketMQParameters::fromMap($map['SourceRocketMQParameters']);
        }
        if (isset($map['SourceSLSParameters'])) {
            $model->sourceSLSParameters = sourceSLSParameters::fromMap($map['SourceSLSParameters']);
        }
        if (isset($map['SourceScheduledEventParameters'])) {
            $model->sourceScheduledEventParameters = sourceScheduledEventParameters::fromMap($map['SourceScheduledEventParameters']);
        }

        return $model;
    }
}
