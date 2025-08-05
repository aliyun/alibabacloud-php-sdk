<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceApacheRocketMQCheckpointParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceCustomizedKafkaConnectorParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceCustomizedKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceDTSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceEventBusParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceMQTTParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceOpenSourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceOSSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourcePrometheusParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceRocketMQCheckpointParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source\sourceSLSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SourceMySQLParameters;
use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description The parameters that are returned if Apache RocketMQ (Offset Data) is specified as the event source.
     *
     * @var sourceApacheRocketMQCheckpointParameters
     */
    public $sourceApacheRocketMQCheckpointParameters;

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
     * @var sourceEventBusParameters
     */
    public $sourceEventBusParameters;

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
     * @description The parameters that are returned if ApsaraMQ for MQTT is specified as the event source.
     *
     * @var sourceMQTTParameters
     */
    public $sourceMQTTParameters;

    /**
     * @var SourceMySQLParameters
     */
    public $sourceMySQLParameters;

    /**
     * @var sourceOSSParameters
     */
    public $sourceOSSParameters;

    /**
     * @var sourceOpenSourceRabbitMQParameters
     */
    public $sourceOpenSourceRabbitMQParameters;

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
     * @var sourceRocketMQCheckpointParameters
     */
    public $sourceRocketMQCheckpointParameters;

    /**
     * @description The parameters that are returned if ApsaraMQ for RocketMQ is specified as the event source.
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
        'sourceApacheRocketMQCheckpointParameters' => 'SourceApacheRocketMQCheckpointParameters',
        'sourceCustomizedKafkaConnectorParameters' => 'SourceCustomizedKafkaConnectorParameters',
        'sourceCustomizedKafkaParameters' => 'SourceCustomizedKafkaParameters',
        'sourceDTSParameters' => 'SourceDTSParameters',
        'sourceEventBusParameters' => 'SourceEventBusParameters',
        'sourceKafkaParameters' => 'SourceKafkaParameters',
        'sourceMNSParameters' => 'SourceMNSParameters',
        'sourceMQTTParameters' => 'SourceMQTTParameters',
        'sourceMySQLParameters' => 'SourceMySQLParameters',
        'sourceOSSParameters' => 'SourceOSSParameters',
        'sourceOpenSourceRabbitMQParameters' => 'SourceOpenSourceRabbitMQParameters',
        'sourcePrometheusParameters' => 'SourcePrometheusParameters',
        'sourceRabbitMQParameters' => 'SourceRabbitMQParameters',
        'sourceRocketMQCheckpointParameters' => 'SourceRocketMQCheckpointParameters',
        'sourceRocketMQParameters' => 'SourceRocketMQParameters',
        'sourceSLSParameters' => 'SourceSLSParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceApacheRocketMQCheckpointParameters) {
            $res['SourceApacheRocketMQCheckpointParameters'] = null !== $this->sourceApacheRocketMQCheckpointParameters ? $this->sourceApacheRocketMQCheckpointParameters->toMap() : null;
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
        if (null !== $this->sourceEventBusParameters) {
            $res['SourceEventBusParameters'] = null !== $this->sourceEventBusParameters ? $this->sourceEventBusParameters->toMap() : null;
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
        if (null !== $this->sourceMySQLParameters) {
            $res['SourceMySQLParameters'] = null !== $this->sourceMySQLParameters ? $this->sourceMySQLParameters->toMap() : null;
        }
        if (null !== $this->sourceOSSParameters) {
            $res['SourceOSSParameters'] = null !== $this->sourceOSSParameters ? $this->sourceOSSParameters->toMap() : null;
        }
        if (null !== $this->sourceOpenSourceRabbitMQParameters) {
            $res['SourceOpenSourceRabbitMQParameters'] = null !== $this->sourceOpenSourceRabbitMQParameters ? $this->sourceOpenSourceRabbitMQParameters->toMap() : null;
        }
        if (null !== $this->sourcePrometheusParameters) {
            $res['SourcePrometheusParameters'] = null !== $this->sourcePrometheusParameters ? $this->sourcePrometheusParameters->toMap() : null;
        }
        if (null !== $this->sourceRabbitMQParameters) {
            $res['SourceRabbitMQParameters'] = null !== $this->sourceRabbitMQParameters ? $this->sourceRabbitMQParameters->toMap() : null;
        }
        if (null !== $this->sourceRocketMQCheckpointParameters) {
            $res['SourceRocketMQCheckpointParameters'] = null !== $this->sourceRocketMQCheckpointParameters ? $this->sourceRocketMQCheckpointParameters->toMap() : null;
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
        if (isset($map['SourceApacheRocketMQCheckpointParameters'])) {
            $model->sourceApacheRocketMQCheckpointParameters = sourceApacheRocketMQCheckpointParameters::fromMap($map['SourceApacheRocketMQCheckpointParameters']);
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
        if (isset($map['SourceEventBusParameters'])) {
            $model->sourceEventBusParameters = sourceEventBusParameters::fromMap($map['SourceEventBusParameters']);
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
        if (isset($map['SourceMySQLParameters'])) {
            $model->sourceMySQLParameters = SourceMySQLParameters::fromMap($map['SourceMySQLParameters']);
        }
        if (isset($map['SourceOSSParameters'])) {
            $model->sourceOSSParameters = sourceOSSParameters::fromMap($map['SourceOSSParameters']);
        }
        if (isset($map['SourceOpenSourceRabbitMQParameters'])) {
            $model->sourceOpenSourceRabbitMQParameters = sourceOpenSourceRabbitMQParameters::fromMap($map['SourceOpenSourceRabbitMQParameters']);
        }
        if (isset($map['SourcePrometheusParameters'])) {
            $model->sourcePrometheusParameters = sourcePrometheusParameters::fromMap($map['SourcePrometheusParameters']);
        }
        if (isset($map['SourceRabbitMQParameters'])) {
            $model->sourceRabbitMQParameters = sourceRabbitMQParameters::fromMap($map['SourceRabbitMQParameters']);
        }
        if (isset($map['SourceRocketMQCheckpointParameters'])) {
            $model->sourceRocketMQCheckpointParameters = sourceRocketMQCheckpointParameters::fromMap($map['SourceRocketMQCheckpointParameters']);
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
