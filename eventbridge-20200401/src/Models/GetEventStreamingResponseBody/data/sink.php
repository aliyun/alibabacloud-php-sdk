<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkCustomizedKafkaConnectorParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkCustomizedKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDataHubParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkFcParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkFnfParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkSLSParameters;
use AlibabaCloud\Tea\Model;

class sink extends Model
{
    /**
     * @var sinkCustomizedKafkaConnectorParameters
     */
    public $sinkCustomizedKafkaConnectorParameters;

    /**
     * @var sinkCustomizedKafkaParameters
     */
    public $sinkCustomizedKafkaParameters;

    /**
     * @var sinkDataHubParameters
     */
    public $sinkDataHubParameters;

    /**
     * @description The parameters that are returned if the event target is Function Compute.
     *
     * @var sinkFcParameters
     */
    public $sinkFcParameters;

    /**
     * @description The Sink Fnf parameters.
     *
     * @var sinkFnfParameters
     */
    public $sinkFnfParameters;

    /**
     * @description The parameters that are returned if the event target is Message Queue for Apache Kafka.
     *
     * @var sinkKafkaParameters
     */
    public $sinkKafkaParameters;

    /**
     * @description The parameters that are returned if the event target is Message Service (MNS).
     *
     * @var sinkMNSParameters
     */
    public $sinkMNSParameters;

    /**
     * @description The parameters that are returned if the event target is Message Queue for RabbitMQ.
     *
     * @var sinkRabbitMQParameters
     */
    public $sinkRabbitMQParameters;

    /**
     * @description Sink RocketMQ Parameters
     *
     * @var sinkRocketMQParameters
     */
    public $sinkRocketMQParameters;

    /**
     * @description Sink SLS Parameters
     *
     * @var sinkSLSParameters
     */
    public $sinkSLSParameters;
    protected $_name = [
        'sinkCustomizedKafkaConnectorParameters' => 'SinkCustomizedKafkaConnectorParameters',
        'sinkCustomizedKafkaParameters'          => 'SinkCustomizedKafkaParameters',
        'sinkDataHubParameters'                  => 'SinkDataHubParameters',
        'sinkFcParameters'                       => 'SinkFcParameters',
        'sinkFnfParameters'                      => 'SinkFnfParameters',
        'sinkKafkaParameters'                    => 'SinkKafkaParameters',
        'sinkMNSParameters'                      => 'SinkMNSParameters',
        'sinkRabbitMQParameters'                 => 'SinkRabbitMQParameters',
        'sinkRocketMQParameters'                 => 'SinkRocketMQParameters',
        'sinkSLSParameters'                      => 'SinkSLSParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sinkCustomizedKafkaConnectorParameters) {
            $res['SinkCustomizedKafkaConnectorParameters'] = null !== $this->sinkCustomizedKafkaConnectorParameters ? $this->sinkCustomizedKafkaConnectorParameters->toMap() : null;
        }
        if (null !== $this->sinkCustomizedKafkaParameters) {
            $res['SinkCustomizedKafkaParameters'] = null !== $this->sinkCustomizedKafkaParameters ? $this->sinkCustomizedKafkaParameters->toMap() : null;
        }
        if (null !== $this->sinkDataHubParameters) {
            $res['SinkDataHubParameters'] = null !== $this->sinkDataHubParameters ? $this->sinkDataHubParameters->toMap() : null;
        }
        if (null !== $this->sinkFcParameters) {
            $res['SinkFcParameters'] = null !== $this->sinkFcParameters ? $this->sinkFcParameters->toMap() : null;
        }
        if (null !== $this->sinkFnfParameters) {
            $res['SinkFnfParameters'] = null !== $this->sinkFnfParameters ? $this->sinkFnfParameters->toMap() : null;
        }
        if (null !== $this->sinkKafkaParameters) {
            $res['SinkKafkaParameters'] = null !== $this->sinkKafkaParameters ? $this->sinkKafkaParameters->toMap() : null;
        }
        if (null !== $this->sinkMNSParameters) {
            $res['SinkMNSParameters'] = null !== $this->sinkMNSParameters ? $this->sinkMNSParameters->toMap() : null;
        }
        if (null !== $this->sinkRabbitMQParameters) {
            $res['SinkRabbitMQParameters'] = null !== $this->sinkRabbitMQParameters ? $this->sinkRabbitMQParameters->toMap() : null;
        }
        if (null !== $this->sinkRocketMQParameters) {
            $res['SinkRocketMQParameters'] = null !== $this->sinkRocketMQParameters ? $this->sinkRocketMQParameters->toMap() : null;
        }
        if (null !== $this->sinkSLSParameters) {
            $res['SinkSLSParameters'] = null !== $this->sinkSLSParameters ? $this->sinkSLSParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sink
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SinkCustomizedKafkaConnectorParameters'])) {
            $model->sinkCustomizedKafkaConnectorParameters = sinkCustomizedKafkaConnectorParameters::fromMap($map['SinkCustomizedKafkaConnectorParameters']);
        }
        if (isset($map['SinkCustomizedKafkaParameters'])) {
            $model->sinkCustomizedKafkaParameters = sinkCustomizedKafkaParameters::fromMap($map['SinkCustomizedKafkaParameters']);
        }
        if (isset($map['SinkDataHubParameters'])) {
            $model->sinkDataHubParameters = sinkDataHubParameters::fromMap($map['SinkDataHubParameters']);
        }
        if (isset($map['SinkFcParameters'])) {
            $model->sinkFcParameters = sinkFcParameters::fromMap($map['SinkFcParameters']);
        }
        if (isset($map['SinkFnfParameters'])) {
            $model->sinkFnfParameters = sinkFnfParameters::fromMap($map['SinkFnfParameters']);
        }
        if (isset($map['SinkKafkaParameters'])) {
            $model->sinkKafkaParameters = sinkKafkaParameters::fromMap($map['SinkKafkaParameters']);
        }
        if (isset($map['SinkMNSParameters'])) {
            $model->sinkMNSParameters = sinkMNSParameters::fromMap($map['SinkMNSParameters']);
        }
        if (isset($map['SinkRabbitMQParameters'])) {
            $model->sinkRabbitMQParameters = sinkRabbitMQParameters::fromMap($map['SinkRabbitMQParameters']);
        }
        if (isset($map['SinkRocketMQParameters'])) {
            $model->sinkRocketMQParameters = sinkRocketMQParameters::fromMap($map['SinkRocketMQParameters']);
        }
        if (isset($map['SinkSLSParameters'])) {
            $model->sinkSLSParameters = sinkSLSParameters::fromMap($map['SinkSLSParameters']);
        }

        return $model;
    }
}
