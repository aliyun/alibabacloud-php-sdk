<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceHttpEventParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceScheduledEventParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest\sourceSLSParameters;

class UpdateEventSourceRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventBusName;

    /**
     * @var string
     */
    public $eventSourceName;

    /**
     * @var mixed[]
     */
    public $externalSourceConfig;

    /**
     * @var string
     */
    public $externalSourceType;

    /**
     * @var bool
     */
    public $linkedExternalSource;

    /**
     * @var sourceHttpEventParameters
     */
    public $sourceHttpEventParameters;

    /**
     * @var sourceKafkaParameters
     */
    public $sourceKafkaParameters;

    /**
     * @var sourceMNSParameters
     */
    public $sourceMNSParameters;

    /**
     * @var sourceRabbitMQParameters
     */
    public $sourceRabbitMQParameters;

    /**
     * @var sourceRocketMQParameters
     */
    public $sourceRocketMQParameters;

    /**
     * @var sourceSLSParameters
     */
    public $sourceSLSParameters;

    /**
     * @var sourceScheduledEventParameters
     */
    public $sourceScheduledEventParameters;
    protected $_name = [
        'description' => 'Description',
        'eventBusName' => 'EventBusName',
        'eventSourceName' => 'EventSourceName',
        'externalSourceConfig' => 'ExternalSourceConfig',
        'externalSourceType' => 'ExternalSourceType',
        'linkedExternalSource' => 'LinkedExternalSource',
        'sourceHttpEventParameters' => 'SourceHttpEventParameters',
        'sourceKafkaParameters' => 'SourceKafkaParameters',
        'sourceMNSParameters' => 'SourceMNSParameters',
        'sourceRabbitMQParameters' => 'SourceRabbitMQParameters',
        'sourceRocketMQParameters' => 'SourceRocketMQParameters',
        'sourceSLSParameters' => 'SourceSLSParameters',
        'sourceScheduledEventParameters' => 'SourceScheduledEventParameters',
    ];

    public function validate()
    {
        if (\is_array($this->externalSourceConfig)) {
            Model::validateArray($this->externalSourceConfig);
        }
        if (null !== $this->sourceHttpEventParameters) {
            $this->sourceHttpEventParameters->validate();
        }
        if (null !== $this->sourceKafkaParameters) {
            $this->sourceKafkaParameters->validate();
        }
        if (null !== $this->sourceMNSParameters) {
            $this->sourceMNSParameters->validate();
        }
        if (null !== $this->sourceRabbitMQParameters) {
            $this->sourceRabbitMQParameters->validate();
        }
        if (null !== $this->sourceRocketMQParameters) {
            $this->sourceRocketMQParameters->validate();
        }
        if (null !== $this->sourceSLSParameters) {
            $this->sourceSLSParameters->validate();
        }
        if (null !== $this->sourceScheduledEventParameters) {
            $this->sourceScheduledEventParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->externalSourceConfig)) {
                $res['ExternalSourceConfig'] = [];
                foreach ($this->externalSourceConfig as $key1 => $value1) {
                    $res['ExternalSourceConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->externalSourceType) {
            $res['ExternalSourceType'] = $this->externalSourceType;
        }

        if (null !== $this->linkedExternalSource) {
            $res['LinkedExternalSource'] = $this->linkedExternalSource;
        }

        if (null !== $this->sourceHttpEventParameters) {
            $res['SourceHttpEventParameters'] = null !== $this->sourceHttpEventParameters ? $this->sourceHttpEventParameters->toArray($noStream) : $this->sourceHttpEventParameters;
        }

        if (null !== $this->sourceKafkaParameters) {
            $res['SourceKafkaParameters'] = null !== $this->sourceKafkaParameters ? $this->sourceKafkaParameters->toArray($noStream) : $this->sourceKafkaParameters;
        }

        if (null !== $this->sourceMNSParameters) {
            $res['SourceMNSParameters'] = null !== $this->sourceMNSParameters ? $this->sourceMNSParameters->toArray($noStream) : $this->sourceMNSParameters;
        }

        if (null !== $this->sourceRabbitMQParameters) {
            $res['SourceRabbitMQParameters'] = null !== $this->sourceRabbitMQParameters ? $this->sourceRabbitMQParameters->toArray($noStream) : $this->sourceRabbitMQParameters;
        }

        if (null !== $this->sourceRocketMQParameters) {
            $res['SourceRocketMQParameters'] = null !== $this->sourceRocketMQParameters ? $this->sourceRocketMQParameters->toArray($noStream) : $this->sourceRocketMQParameters;
        }

        if (null !== $this->sourceSLSParameters) {
            $res['SourceSLSParameters'] = null !== $this->sourceSLSParameters ? $this->sourceSLSParameters->toArray($noStream) : $this->sourceSLSParameters;
        }

        if (null !== $this->sourceScheduledEventParameters) {
            $res['SourceScheduledEventParameters'] = null !== $this->sourceScheduledEventParameters ? $this->sourceScheduledEventParameters->toArray($noStream) : $this->sourceScheduledEventParameters;
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
            if (!empty($map['ExternalSourceConfig'])) {
                $model->externalSourceConfig = [];
                foreach ($map['ExternalSourceConfig'] as $key1 => $value1) {
                    $model->externalSourceConfig[$key1] = $value1;
                }
            }
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
