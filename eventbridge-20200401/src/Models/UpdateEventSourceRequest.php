<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceHttpEventParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceScheduledEventParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceSLSParameters;
use AlibabaCloud\Tea\Model;

class UpdateEventSourceRequest extends Model
{
    /**
     * @description The description of the event source.
     *
     * @var string
     */
    public $description;

    /**
     * @description The associated event bus.
     *
     * @example my-event-bus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The name of the event source.
     *
     * @example myrabbitmq.source
     *
     * @var string
     */
    public $eventSourceName;

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
     * @description The parameters that are configured if the event source is Message Service (MNS).
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
     * @description SourceSLSParameters
     *
     * @var sourceSLSParameters
     */
    public $sourceSLSParameters;

    /**
     * @description The parameters that are configured if the event source is scheduled events.
     *
     * @var sourceScheduledEventParameters
     */
    public $sourceScheduledEventParameters;
    protected $_name = [
        'description'                    => 'Description',
        'eventBusName'                   => 'EventBusName',
        'eventSourceName'                => 'EventSourceName',
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
     * @return UpdateEventSourceRequest
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
