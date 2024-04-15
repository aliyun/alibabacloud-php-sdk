<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

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
        'sourceDTSParameters'      => 'sourceDTSParameters',
        'sourceKafkaParameters'    => 'sourceKafkaParameters',
        'sourceMNSParameters'      => 'sourceMNSParameters',
        'sourceMQTTParameters'     => 'sourceMQTTParameters',
        'sourceRabbitMQParameters' => 'sourceRabbitMQParameters',
        'sourceRocketMQParameters' => 'sourceRocketMQParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceDTSParameters) {
            $res['sourceDTSParameters'] = null !== $this->sourceDTSParameters ? $this->sourceDTSParameters->toMap() : null;
        }
        if (null !== $this->sourceKafkaParameters) {
            $res['sourceKafkaParameters'] = null !== $this->sourceKafkaParameters ? $this->sourceKafkaParameters->toMap() : null;
        }
        if (null !== $this->sourceMNSParameters) {
            $res['sourceMNSParameters'] = null !== $this->sourceMNSParameters ? $this->sourceMNSParameters->toMap() : null;
        }
        if (null !== $this->sourceMQTTParameters) {
            $res['sourceMQTTParameters'] = null !== $this->sourceMQTTParameters ? $this->sourceMQTTParameters->toMap() : null;
        }
        if (null !== $this->sourceRabbitMQParameters) {
            $res['sourceRabbitMQParameters'] = null !== $this->sourceRabbitMQParameters ? $this->sourceRabbitMQParameters->toMap() : null;
        }
        if (null !== $this->sourceRocketMQParameters) {
            $res['sourceRocketMQParameters'] = null !== $this->sourceRocketMQParameters ? $this->sourceRocketMQParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EventSourceParameters
     */
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
