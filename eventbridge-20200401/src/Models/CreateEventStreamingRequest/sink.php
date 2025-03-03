<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkApacheRocketMQCheckpointParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkCustomizedKafkaConnectorParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkCustomizedKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDashVectorParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDataHubParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkFcParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkFnfParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkOpenSourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkPrometheusParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQCheckpointParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkSLSParameters;

class sink extends Model
{
    /**
     * @var sinkApacheRocketMQCheckpointParameters
     */
    public $sinkApacheRocketMQCheckpointParameters;
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
     * @var sinkFcParameters
     */
    public $sinkFcParameters;
    /**
     * @var sinkFnfParameters
     */
    public $sinkFnfParameters;
    /**
     * @var sinkKafkaParameters
     */
    public $sinkKafkaParameters;
    /**
     * @var sinkMNSParameters
     */
    public $sinkMNSParameters;
    /**
     * @var sinkOpenSourceRabbitMQParameters
     */
    public $sinkOpenSourceRabbitMQParameters;
    /**
     * @var sinkPrometheusParameters
     */
    public $sinkPrometheusParameters;
    /**
     * @var sinkRabbitMQParameters
     */
    public $sinkRabbitMQParameters;
    /**
     * @var sinkRocketMQCheckpointParameters
     */
    public $sinkRocketMQCheckpointParameters;
    /**
     * @var sinkRocketMQParameters
     */
    public $sinkRocketMQParameters;
    /**
     * @var sinkSLSParameters
     */
    public $sinkSLSParameters;
    protected $_name = [
        'sinkApacheRocketMQCheckpointParameters' => 'SinkApacheRocketMQCheckpointParameters',
        'sinkCustomizedKafkaConnectorParameters' => 'SinkCustomizedKafkaConnectorParameters',
        'sinkCustomizedKafkaParameters'          => 'SinkCustomizedKafkaParameters',
        'sinkDashVectorParameters'               => 'SinkDashVectorParameters',
        'sinkDataHubParameters'                  => 'SinkDataHubParameters',
        'sinkFcParameters'                       => 'SinkFcParameters',
        'sinkFnfParameters'                      => 'SinkFnfParameters',
        'sinkKafkaParameters'                    => 'SinkKafkaParameters',
        'sinkMNSParameters'                      => 'SinkMNSParameters',
        'sinkOpenSourceRabbitMQParameters'       => 'SinkOpenSourceRabbitMQParameters',
        'sinkPrometheusParameters'               => 'SinkPrometheusParameters',
        'sinkRabbitMQParameters'                 => 'SinkRabbitMQParameters',
        'sinkRocketMQCheckpointParameters'       => 'SinkRocketMQCheckpointParameters',
        'sinkRocketMQParameters'                 => 'SinkRocketMQParameters',
        'sinkSLSParameters'                      => 'SinkSLSParameters',
    ];

    public function validate()
    {
        if (null !== $this->sinkApacheRocketMQCheckpointParameters) {
            $this->sinkApacheRocketMQCheckpointParameters->validate();
        }
        if (null !== $this->sinkCustomizedKafkaConnectorParameters) {
            $this->sinkCustomizedKafkaConnectorParameters->validate();
        }
        if (null !== $this->sinkCustomizedKafkaParameters) {
            $this->sinkCustomizedKafkaParameters->validate();
        }
        if (null !== $this->sinkDashVectorParameters) {
            $this->sinkDashVectorParameters->validate();
        }
        if (null !== $this->sinkDataHubParameters) {
            $this->sinkDataHubParameters->validate();
        }
        if (null !== $this->sinkFcParameters) {
            $this->sinkFcParameters->validate();
        }
        if (null !== $this->sinkFnfParameters) {
            $this->sinkFnfParameters->validate();
        }
        if (null !== $this->sinkKafkaParameters) {
            $this->sinkKafkaParameters->validate();
        }
        if (null !== $this->sinkMNSParameters) {
            $this->sinkMNSParameters->validate();
        }
        if (null !== $this->sinkOpenSourceRabbitMQParameters) {
            $this->sinkOpenSourceRabbitMQParameters->validate();
        }
        if (null !== $this->sinkPrometheusParameters) {
            $this->sinkPrometheusParameters->validate();
        }
        if (null !== $this->sinkRabbitMQParameters) {
            $this->sinkRabbitMQParameters->validate();
        }
        if (null !== $this->sinkRocketMQCheckpointParameters) {
            $this->sinkRocketMQCheckpointParameters->validate();
        }
        if (null !== $this->sinkRocketMQParameters) {
            $this->sinkRocketMQParameters->validate();
        }
        if (null !== $this->sinkSLSParameters) {
            $this->sinkSLSParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sinkApacheRocketMQCheckpointParameters) {
            $res['SinkApacheRocketMQCheckpointParameters'] = null !== $this->sinkApacheRocketMQCheckpointParameters ? $this->sinkApacheRocketMQCheckpointParameters->toArray($noStream) : $this->sinkApacheRocketMQCheckpointParameters;
        }

        if (null !== $this->sinkCustomizedKafkaConnectorParameters) {
            $res['SinkCustomizedKafkaConnectorParameters'] = null !== $this->sinkCustomizedKafkaConnectorParameters ? $this->sinkCustomizedKafkaConnectorParameters->toArray($noStream) : $this->sinkCustomizedKafkaConnectorParameters;
        }

        if (null !== $this->sinkCustomizedKafkaParameters) {
            $res['SinkCustomizedKafkaParameters'] = null !== $this->sinkCustomizedKafkaParameters ? $this->sinkCustomizedKafkaParameters->toArray($noStream) : $this->sinkCustomizedKafkaParameters;
        }

        if (null !== $this->sinkDashVectorParameters) {
            $res['SinkDashVectorParameters'] = null !== $this->sinkDashVectorParameters ? $this->sinkDashVectorParameters->toArray($noStream) : $this->sinkDashVectorParameters;
        }

        if (null !== $this->sinkDataHubParameters) {
            $res['SinkDataHubParameters'] = null !== $this->sinkDataHubParameters ? $this->sinkDataHubParameters->toArray($noStream) : $this->sinkDataHubParameters;
        }

        if (null !== $this->sinkFcParameters) {
            $res['SinkFcParameters'] = null !== $this->sinkFcParameters ? $this->sinkFcParameters->toArray($noStream) : $this->sinkFcParameters;
        }

        if (null !== $this->sinkFnfParameters) {
            $res['SinkFnfParameters'] = null !== $this->sinkFnfParameters ? $this->sinkFnfParameters->toArray($noStream) : $this->sinkFnfParameters;
        }

        if (null !== $this->sinkKafkaParameters) {
            $res['SinkKafkaParameters'] = null !== $this->sinkKafkaParameters ? $this->sinkKafkaParameters->toArray($noStream) : $this->sinkKafkaParameters;
        }

        if (null !== $this->sinkMNSParameters) {
            $res['SinkMNSParameters'] = null !== $this->sinkMNSParameters ? $this->sinkMNSParameters->toArray($noStream) : $this->sinkMNSParameters;
        }

        if (null !== $this->sinkOpenSourceRabbitMQParameters) {
            $res['SinkOpenSourceRabbitMQParameters'] = null !== $this->sinkOpenSourceRabbitMQParameters ? $this->sinkOpenSourceRabbitMQParameters->toArray($noStream) : $this->sinkOpenSourceRabbitMQParameters;
        }

        if (null !== $this->sinkPrometheusParameters) {
            $res['SinkPrometheusParameters'] = null !== $this->sinkPrometheusParameters ? $this->sinkPrometheusParameters->toArray($noStream) : $this->sinkPrometheusParameters;
        }

        if (null !== $this->sinkRabbitMQParameters) {
            $res['SinkRabbitMQParameters'] = null !== $this->sinkRabbitMQParameters ? $this->sinkRabbitMQParameters->toArray($noStream) : $this->sinkRabbitMQParameters;
        }

        if (null !== $this->sinkRocketMQCheckpointParameters) {
            $res['SinkRocketMQCheckpointParameters'] = null !== $this->sinkRocketMQCheckpointParameters ? $this->sinkRocketMQCheckpointParameters->toArray($noStream) : $this->sinkRocketMQCheckpointParameters;
        }

        if (null !== $this->sinkRocketMQParameters) {
            $res['SinkRocketMQParameters'] = null !== $this->sinkRocketMQParameters ? $this->sinkRocketMQParameters->toArray($noStream) : $this->sinkRocketMQParameters;
        }

        if (null !== $this->sinkSLSParameters) {
            $res['SinkSLSParameters'] = null !== $this->sinkSLSParameters ? $this->sinkSLSParameters->toArray($noStream) : $this->sinkSLSParameters;
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
        if (isset($map['SinkApacheRocketMQCheckpointParameters'])) {
            $model->sinkApacheRocketMQCheckpointParameters = sinkApacheRocketMQCheckpointParameters::fromMap($map['SinkApacheRocketMQCheckpointParameters']);
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

        if (isset($map['SinkPrometheusParameters'])) {
            $model->sinkPrometheusParameters = sinkPrometheusParameters::fromMap($map['SinkPrometheusParameters']);
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
