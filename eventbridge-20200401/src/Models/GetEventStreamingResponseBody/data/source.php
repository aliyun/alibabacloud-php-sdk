<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceApacheKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceCustomizedKafkaConnectorParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceCustomizedKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceDTSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceMQTTParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourcePrometheusParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceSLSParameters;
use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @var sourceApacheKafkaParameters
     */
    public $sourceApacheKafkaParameters;

    /**
     * @var sourceCustomizedKafkaConnectorParameters
     */
    public $sourceCustomizedKafkaConnectorParameters;

    /**
     * @var sourceCustomizedKafkaParameters
     */
    public $sourceCustomizedKafkaParameters;

    /**
     * @description The parameters that are returned if the event source is Data Transmission Service (DTS).
     *
     * @var sourceDTSParameters
     */
    public $sourceDTSParameters;

    /**
     * @description The parameters that are returned if ApsaraMQ for Kafka is specified as the event source.
     *
     * @var sourceKafkaParameters
     */
    public $sourceKafkaParameters;

    /**
     * @description Source MNS Parameters
     *
     * @var sourceMNSParameters
     */
    public $sourceMNSParameters;

    /**
     * @description The parameters that are returned if the event source is Message Queue for MQTT.
     *
     * @var sourceMQTTParameters
     */
    public $sourceMQTTParameters;

    /**
     * @var sourcePrometheusParameters
     */
    public $sourcePrometheusParameters;

    /**
     * @description Source RabbitMQ Parameters
     *
     * @var sourceRabbitMQParameters
     */
    public $sourceRabbitMQParameters;

    /**
     * @description Source RocketMQ Parameters
     *
     * @var sourceRocketMQParameters
     */
    public $sourceRocketMQParameters;

    /**
     * @description The parameters that are returned if the event provider is Simple Log Service.
     *
     * @var sourceSLSParameters
     */
    public $sourceSLSParameters;
    protected $_name = [
        'sourceApacheKafkaParameters'              => 'SourceApacheKafkaParameters',
        'sourceCustomizedKafkaConnectorParameters' => 'SourceCustomizedKafkaConnectorParameters',
        'sourceCustomizedKafkaParameters'          => 'SourceCustomizedKafkaParameters',
        'sourceDTSParameters'                      => 'SourceDTSParameters',
        'sourceKafkaParameters'                    => 'SourceKafkaParameters',
        'sourceMNSParameters'                      => 'SourceMNSParameters',
        'sourceMQTTParameters'                     => 'SourceMQTTParameters',
        'sourcePrometheusParameters'               => 'SourcePrometheusParameters',
        'sourceRabbitMQParameters'                 => 'SourceRabbitMQParameters',
        'sourceRocketMQParameters'                 => 'SourceRocketMQParameters',
        'sourceSLSParameters'                      => 'SourceSLSParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceApacheKafkaParameters) {
            $res['SourceApacheKafkaParameters'] = null !== $this->sourceApacheKafkaParameters ? $this->sourceApacheKafkaParameters->toMap() : null;
        }
        if (null !== $this->sourceCustomizedKafkaConnectorParameters) {
            $res['SourceCustomizedKafkaConnectorParameters'] = null !== $this->sourceCustomizedKafkaConnectorParameters ? $this->sourceCustomizedKafkaConnectorParameters->toMap() : null;
        }
        if (null !== $this->sourceCustomizedKafkaParameters) {
            $res['SourceCustomizedKafkaParameters'] = null !== $this->sourceCustomizedKafkaParameters ? $this->sourceCustomizedKafkaParameters->toMap() : null;
        }
        if (null !== $this->sourceDTSParameters) {
            $res['SourceDTSParameters'] = null !== $this->sourceDTSParameters ? $this->sourceDTSParameters->toMap() : null;
        }
        if (null !== $this->sourceKafkaParameters) {
            $res['SourceKafkaParameters'] = null !== $this->sourceKafkaParameters ? $this->sourceKafkaParameters->toMap() : null;
        }
        if (null !== $this->sourceMNSParameters) {
            $res['SourceMNSParameters'] = null !== $this->sourceMNSParameters ? $this->sourceMNSParameters->toMap() : null;
        }
        if (null !== $this->sourceMQTTParameters) {
            $res['SourceMQTTParameters'] = null !== $this->sourceMQTTParameters ? $this->sourceMQTTParameters->toMap() : null;
        }
        if (null !== $this->sourcePrometheusParameters) {
            $res['SourcePrometheusParameters'] = null !== $this->sourcePrometheusParameters ? $this->sourcePrometheusParameters->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceApacheKafkaParameters'])) {
            $model->sourceApacheKafkaParameters = sourceApacheKafkaParameters::fromMap($map['SourceApacheKafkaParameters']);
        }
        if (isset($map['SourceCustomizedKafkaConnectorParameters'])) {
            $model->sourceCustomizedKafkaConnectorParameters = sourceCustomizedKafkaConnectorParameters::fromMap($map['SourceCustomizedKafkaConnectorParameters']);
        }
        if (isset($map['SourceCustomizedKafkaParameters'])) {
            $model->sourceCustomizedKafkaParameters = sourceCustomizedKafkaParameters::fromMap($map['SourceCustomizedKafkaParameters']);
        }
        if (isset($map['SourceDTSParameters'])) {
            $model->sourceDTSParameters = sourceDTSParameters::fromMap($map['SourceDTSParameters']);
        }
        if (isset($map['SourceKafkaParameters'])) {
            $model->sourceKafkaParameters = sourceKafkaParameters::fromMap($map['SourceKafkaParameters']);
        }
        if (isset($map['SourceMNSParameters'])) {
            $model->sourceMNSParameters = sourceMNSParameters::fromMap($map['SourceMNSParameters']);
        }
        if (isset($map['SourceMQTTParameters'])) {
            $model->sourceMQTTParameters = sourceMQTTParameters::fromMap($map['SourceMQTTParameters']);
        }
        if (isset($map['SourcePrometheusParameters'])) {
            $model->sourcePrometheusParameters = sourcePrometheusParameters::fromMap($map['SourcePrometheusParameters']);
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

        return $model;
    }
}
