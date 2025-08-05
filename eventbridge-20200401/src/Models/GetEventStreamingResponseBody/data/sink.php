<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkApacheRocketMQCheckpointParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkCustomizedKafkaConnectorParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkCustomizedKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDashVectorParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDataHubParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkFcParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkFnfParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkOpenSourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRocketMQCheckpointParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkSLSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkBaiLianParameters;
use AlibabaCloud\Tea\Model;

class sink extends Model
{
    /**
     * @description Sink Apache RocketMQ Checkpoint Parameters
     *
     * @var sinkApacheRocketMQCheckpointParameters
     */
    public $sinkApacheRocketMQCheckpointParameters;

    /**
     * @description Sink BaiLian Parameters
     *
     * @var SinkBaiLianParameters
     */
    public $sinkBaiLianParameters;

    /**
     * @var sinkCustomizedKafkaConnectorParameters
     */
    public $sinkCustomizedKafkaConnectorParameters;

    /**
     * @var sinkCustomizedKafkaParameters
     */
    public $sinkCustomizedKafkaParameters;

    /**
     * @var sinkDashVectorParameters
     */
    public $sinkDashVectorParameters;

    /**
     * @var sinkDataHubParameters
     */
    public $sinkDataHubParameters;

    /**
     * @var sinkDorisParameters
     */
    public $sinkDorisParameters;

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
     * @description Sink Open Source RabbitMQ Parameters
     *
     * @var sinkOpenSourceRabbitMQParameters
     */
    public $sinkOpenSourceRabbitMQParameters;

    /**
     * @description The parameters that are returned if the event target is Message Queue for RabbitMQ.
     *
     * @var sinkRabbitMQParameters
     */
    public $sinkRabbitMQParameters;

    /**
     * @description Sink RocketMQ Checkpoint Parameters
     *
     * @var sinkRocketMQCheckpointParameters
     */
    public $sinkRocketMQCheckpointParameters;

    /**
     * @description The parameters that are returned if ApsaraMQ for RocketMQ is specified as the event target.
     *
     * @var sinkRocketMQParameters
     */
    public $sinkRocketMQParameters;

    /**
     * @description The parameters that are returned if Simple Log Service is specified as the event target.
     *
     * @var sinkSLSParameters
     */
    public $sinkSLSParameters;
    protected $_name = [
        'sinkApacheRocketMQCheckpointParameters' => 'SinkApacheRocketMQCheckpointParameters',
        'sinkBaiLianParameters' => 'SinkBaiLianParameters',
        'sinkCustomizedKafkaConnectorParameters' => 'SinkCustomizedKafkaConnectorParameters',
        'sinkCustomizedKafkaParameters' => 'SinkCustomizedKafkaParameters',
        'sinkDashVectorParameters' => 'SinkDashVectorParameters',
        'sinkDataHubParameters' => 'SinkDataHubParameters',
        'sinkDorisParameters' => 'SinkDorisParameters',
        'sinkFcParameters' => 'SinkFcParameters',
        'sinkFnfParameters' => 'SinkFnfParameters',
        'sinkKafkaParameters' => 'SinkKafkaParameters',
        'sinkMNSParameters' => 'SinkMNSParameters',
        'sinkOpenSourceRabbitMQParameters' => 'SinkOpenSourceRabbitMQParameters',
        'sinkRabbitMQParameters' => 'SinkRabbitMQParameters',
        'sinkRocketMQCheckpointParameters' => 'SinkRocketMQCheckpointParameters',
        'sinkRocketMQParameters' => 'SinkRocketMQParameters',
        'sinkSLSParameters' => 'SinkSLSParameters',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sinkApacheRocketMQCheckpointParameters) {
            $res['SinkApacheRocketMQCheckpointParameters'] = null !== $this->sinkApacheRocketMQCheckpointParameters ? $this->sinkApacheRocketMQCheckpointParameters->toMap() : null;
        }
        if (null !== $this->sinkBaiLianParameters) {
            $res['SinkBaiLianParameters'] = null !== $this->sinkBaiLianParameters ? $this->sinkBaiLianParameters->toMap() : null;
        }
        if (null !== $this->sinkCustomizedKafkaConnectorParameters) {
            $res['SinkCustomizedKafkaConnectorParameters'] = null !== $this->sinkCustomizedKafkaConnectorParameters ? $this->sinkCustomizedKafkaConnectorParameters->toMap() : null;
        }
        if (null !== $this->sinkCustomizedKafkaParameters) {
            $res['SinkCustomizedKafkaParameters'] = null !== $this->sinkCustomizedKafkaParameters ? $this->sinkCustomizedKafkaParameters->toMap() : null;
        }
        if (null !== $this->sinkDashVectorParameters) {
            $res['SinkDashVectorParameters'] = null !== $this->sinkDashVectorParameters ? $this->sinkDashVectorParameters->toMap() : null;
        }
        if (null !== $this->sinkDataHubParameters) {
            $res['SinkDataHubParameters'] = null !== $this->sinkDataHubParameters ? $this->sinkDataHubParameters->toMap() : null;
        }
        if (null !== $this->sinkDorisParameters) {
            $res['SinkDorisParameters'] = null !== $this->sinkDorisParameters ? $this->sinkDorisParameters->toMap() : null;
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
        if (null !== $this->sinkOpenSourceRabbitMQParameters) {
            $res['SinkOpenSourceRabbitMQParameters'] = null !== $this->sinkOpenSourceRabbitMQParameters ? $this->sinkOpenSourceRabbitMQParameters->toMap() : null;
        }
        if (null !== $this->sinkRabbitMQParameters) {
            $res['SinkRabbitMQParameters'] = null !== $this->sinkRabbitMQParameters ? $this->sinkRabbitMQParameters->toMap() : null;
        }
        if (null !== $this->sinkRocketMQCheckpointParameters) {
            $res['SinkRocketMQCheckpointParameters'] = null !== $this->sinkRocketMQCheckpointParameters ? $this->sinkRocketMQCheckpointParameters->toMap() : null;
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
        if (isset($map['SinkApacheRocketMQCheckpointParameters'])) {
            $model->sinkApacheRocketMQCheckpointParameters = sinkApacheRocketMQCheckpointParameters::fromMap($map['SinkApacheRocketMQCheckpointParameters']);
        }
        if (isset($map['SinkBaiLianParameters'])) {
            $model->sinkBaiLianParameters = SinkBaiLianParameters::fromMap($map['SinkBaiLianParameters']);
        }
        if (isset($map['SinkCustomizedKafkaConnectorParameters'])) {
            $model->sinkCustomizedKafkaConnectorParameters = sinkCustomizedKafkaConnectorParameters::fromMap($map['SinkCustomizedKafkaConnectorParameters']);
        }
        if (isset($map['SinkCustomizedKafkaParameters'])) {
            $model->sinkCustomizedKafkaParameters = sinkCustomizedKafkaParameters::fromMap($map['SinkCustomizedKafkaParameters']);
        }
        if (isset($map['SinkDashVectorParameters'])) {
            $model->sinkDashVectorParameters = sinkDashVectorParameters::fromMap($map['SinkDashVectorParameters']);
        }
        if (isset($map['SinkDataHubParameters'])) {
            $model->sinkDataHubParameters = sinkDataHubParameters::fromMap($map['SinkDataHubParameters']);
        }
        if (isset($map['SinkDorisParameters'])) {
            $model->sinkDorisParameters = sinkDorisParameters::fromMap($map['SinkDorisParameters']);
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
        if (isset($map['SinkOpenSourceRabbitMQParameters'])) {
            $model->sinkOpenSourceRabbitMQParameters = sinkOpenSourceRabbitMQParameters::fromMap($map['SinkOpenSourceRabbitMQParameters']);
        }
        if (isset($map['SinkRabbitMQParameters'])) {
            $model->sinkRabbitMQParameters = sinkRabbitMQParameters::fromMap($map['SinkRabbitMQParameters']);
        }
        if (isset($map['SinkRocketMQCheckpointParameters'])) {
            $model->sinkRocketMQCheckpointParameters = sinkRocketMQCheckpointParameters::fromMap($map['SinkRocketMQCheckpointParameters']);
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
