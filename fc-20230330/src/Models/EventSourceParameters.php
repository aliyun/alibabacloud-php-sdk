<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class EventSourceParameters extends Model
{
    /**
     * @var SourceDTSParameters
     */
    public $sourceDTSParameters;

    /**
     * @var SourceKafkaParameters
     */
    public $sourceKafkaParameters;

    /**
     * @var SourceMNSParameters
     */
    public $sourceMNSParameters;

    /**
     * @var SourceMQTTParameters
     */
    public $sourceMQTTParameters;

    /**
     * @var SourceRabbitMQParameters
     */
    public $sourceRabbitMQParameters;

    /**
     * @var SourceRocketMQParameters
     */
    public $sourceRocketMQParameters;
    protected $_name = [
        'sourceDTSParameters' => 'sourceDTSParameters',
        'sourceKafkaParameters' => 'sourceKafkaParameters',
        'sourceMNSParameters' => 'sourceMNSParameters',
        'sourceMQTTParameters' => 'sourceMQTTParameters',
        'sourceRabbitMQParameters' => 'sourceRabbitMQParameters',
        'sourceRocketMQParameters' => 'sourceRocketMQParameters',
    ];

    public function validate()
    {
        if (null !== $this->sourceDTSParameters) {
            $this->sourceDTSParameters->validate();
        }
        if (null !== $this->sourceKafkaParameters) {
            $this->sourceKafkaParameters->validate();
        }
        if (null !== $this->sourceMNSParameters) {
            $this->sourceMNSParameters->validate();
        }
        if (null !== $this->sourceMQTTParameters) {
            $this->sourceMQTTParameters->validate();
        }
        if (null !== $this->sourceRabbitMQParameters) {
            $this->sourceRabbitMQParameters->validate();
        }
        if (null !== $this->sourceRocketMQParameters) {
            $this->sourceRocketMQParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceDTSParameters) {
            $res['sourceDTSParameters'] = null !== $this->sourceDTSParameters ? $this->sourceDTSParameters->toArray($noStream) : $this->sourceDTSParameters;
        }

        if (null !== $this->sourceKafkaParameters) {
            $res['sourceKafkaParameters'] = null !== $this->sourceKafkaParameters ? $this->sourceKafkaParameters->toArray($noStream) : $this->sourceKafkaParameters;
        }

        if (null !== $this->sourceMNSParameters) {
            $res['sourceMNSParameters'] = null !== $this->sourceMNSParameters ? $this->sourceMNSParameters->toArray($noStream) : $this->sourceMNSParameters;
        }

        if (null !== $this->sourceMQTTParameters) {
            $res['sourceMQTTParameters'] = null !== $this->sourceMQTTParameters ? $this->sourceMQTTParameters->toArray($noStream) : $this->sourceMQTTParameters;
        }

        if (null !== $this->sourceRabbitMQParameters) {
            $res['sourceRabbitMQParameters'] = null !== $this->sourceRabbitMQParameters ? $this->sourceRabbitMQParameters->toArray($noStream) : $this->sourceRabbitMQParameters;
        }

        if (null !== $this->sourceRocketMQParameters) {
            $res['sourceRocketMQParameters'] = null !== $this->sourceRocketMQParameters ? $this->sourceRocketMQParameters->toArray($noStream) : $this->sourceRocketMQParameters;
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
        if (isset($map['sourceDTSParameters'])) {
            $model->sourceDTSParameters = SourceDTSParameters::fromMap($map['sourceDTSParameters']);
        }

        if (isset($map['sourceKafkaParameters'])) {
            $model->sourceKafkaParameters = SourceKafkaParameters::fromMap($map['sourceKafkaParameters']);
        }

        if (isset($map['sourceMNSParameters'])) {
            $model->sourceMNSParameters = SourceMNSParameters::fromMap($map['sourceMNSParameters']);
        }

        if (isset($map['sourceMQTTParameters'])) {
            $model->sourceMQTTParameters = SourceMQTTParameters::fromMap($map['sourceMQTTParameters']);
        }

        if (isset($map['sourceRabbitMQParameters'])) {
            $model->sourceRabbitMQParameters = SourceRabbitMQParameters::fromMap($map['sourceRabbitMQParameters']);
        }

        if (isset($map['sourceRocketMQParameters'])) {
            $model->sourceRocketMQParameters = SourceRocketMQParameters::fromMap($map['sourceRocketMQParameters']);
        }

        return $model;
    }
}
