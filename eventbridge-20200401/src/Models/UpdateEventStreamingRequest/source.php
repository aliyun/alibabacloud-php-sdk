<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourceApacheKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourceCustomizedKafkaConnectorParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourceCustomizedKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourceDTSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourceKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourceMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourceMQTTParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourcePrometheusParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourceRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\source\sourceSLSParameters;
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
     * @description The parameters that are configured if you specify Data Transmission Service (DTS) as the event source.
     *
     * @var sourceDTSParameters
     */
    public $sourceDTSParameters;

    /**
     * @description The parameters that are configured if you specify ApsaraMQ for Kafka as the event source.
     *
     * @var sourceKafkaParameters
     */
    public $sourceKafkaParameters;

    /**
     * @description The parameters that are configured if you specify Message Service (MNS) as the event source.
     *
     * @var sourceMNSParameters
     */
    public $sourceMNSParameters;

    /**
     * @description The parameters that are configured if you specify ApsaraMQ for MQTT as the event source.
     *
     * @var sourceMQTTParameters
     */
    public $sourceMQTTParameters;

    /**
     * @description The parameters that are configured if you specify Managed Service for Prometheus as the event source.
     *
     * @var sourcePrometheusParameters
     */
    public $sourcePrometheusParameters;

    /**
     * @description The parameters that are configured if you specify ApsaraMQ for RabbitMQ as the event source.
     *
     * @var sourceRabbitMQParameters
     */
    public $sourceRabbitMQParameters;

    /**
     * @description The parameters that are configured if you specify ApsaraMQ for RocketMQ as the event source.
     *
     * @var sourceRocketMQParameters
     */
    public $sourceRocketMQParameters;

    /**
     * @description The parameters that are configured if you specify Simple Log Service as the event source.
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
