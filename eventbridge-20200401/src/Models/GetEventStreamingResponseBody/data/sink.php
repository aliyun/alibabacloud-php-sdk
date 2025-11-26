<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkApacheKafkaParameters;
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
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkApiDestinationParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkBaiLianParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkDataWorksTriggerParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkHttpsParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkOSSParameters;

class sink extends Model
{
    /**
     * @var sinkApacheKafkaParameters
     */
    public $sinkApacheKafkaParameters;

    /**
     * @var sinkApacheRocketMQCheckpointParameters
     */
    public $sinkApacheRocketMQCheckpointParameters;

    /**
     * @var SinkApiDestinationParameters
     */
    public $sinkApiDestinationParameters;

    /**
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
     * @var SinkDataWorksTriggerParameters
     */
    public $sinkDataWorksTriggerParameters;

    /**
     * @var sinkDorisParameters
     */
    public $sinkDorisParameters;

    /**
     * @var sinkFcParameters
     */
    public $sinkFcParameters;

    /**
     * @var sinkFnfParameters
     */
    public $sinkFnfParameters;

    /**
     * @var SinkHttpsParameters
     */
    public $sinkHttpsParameters;

    /**
     * @var sinkKafkaParameters
     */
    public $sinkKafkaParameters;

    /**
     * @var sinkMNSParameters
     */
    public $sinkMNSParameters;

    /**
     * @var SinkOSSParameters
     */
    public $sinkOSSParameters;

    /**
     * @var sinkOpenSourceRabbitMQParameters
     */
    public $sinkOpenSourceRabbitMQParameters;

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
        'sinkApacheKafkaParameters' => 'SinkApacheKafkaParameters',
        'sinkApacheRocketMQCheckpointParameters' => 'SinkApacheRocketMQCheckpointParameters',
        'sinkApiDestinationParameters' => 'SinkApiDestinationParameters',
        'sinkBaiLianParameters' => 'SinkBaiLianParameters',
        'sinkCustomizedKafkaConnectorParameters' => 'SinkCustomizedKafkaConnectorParameters',
        'sinkCustomizedKafkaParameters' => 'SinkCustomizedKafkaParameters',
        'sinkDashVectorParameters' => 'SinkDashVectorParameters',
        'sinkDataHubParameters' => 'SinkDataHubParameters',
        'sinkDataWorksTriggerParameters' => 'SinkDataWorksTriggerParameters',
        'sinkDorisParameters' => 'SinkDorisParameters',
        'sinkFcParameters' => 'SinkFcParameters',
        'sinkFnfParameters' => 'SinkFnfParameters',
        'sinkHttpsParameters' => 'SinkHttpsParameters',
        'sinkKafkaParameters' => 'SinkKafkaParameters',
        'sinkMNSParameters' => 'SinkMNSParameters',
        'sinkOSSParameters' => 'SinkOSSParameters',
        'sinkOpenSourceRabbitMQParameters' => 'SinkOpenSourceRabbitMQParameters',
        'sinkRabbitMQParameters' => 'SinkRabbitMQParameters',
        'sinkRocketMQCheckpointParameters' => 'SinkRocketMQCheckpointParameters',
        'sinkRocketMQParameters' => 'SinkRocketMQParameters',
        'sinkSLSParameters' => 'SinkSLSParameters',
    ];

    public function validate()
    {
        if (null !== $this->sinkApacheKafkaParameters) {
            $this->sinkApacheKafkaParameters->validate();
        }
        if (null !== $this->sinkApacheRocketMQCheckpointParameters) {
            $this->sinkApacheRocketMQCheckpointParameters->validate();
        }
        if (null !== $this->sinkApiDestinationParameters) {
            $this->sinkApiDestinationParameters->validate();
        }
        if (null !== $this->sinkBaiLianParameters) {
            $this->sinkBaiLianParameters->validate();
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
        if (null !== $this->sinkDataWorksTriggerParameters) {
            $this->sinkDataWorksTriggerParameters->validate();
        }
        if (null !== $this->sinkDorisParameters) {
            $this->sinkDorisParameters->validate();
        }
        if (null !== $this->sinkFcParameters) {
            $this->sinkFcParameters->validate();
        }
        if (null !== $this->sinkFnfParameters) {
            $this->sinkFnfParameters->validate();
        }
        if (null !== $this->sinkHttpsParameters) {
            $this->sinkHttpsParameters->validate();
        }
        if (null !== $this->sinkKafkaParameters) {
            $this->sinkKafkaParameters->validate();
        }
        if (null !== $this->sinkMNSParameters) {
            $this->sinkMNSParameters->validate();
        }
        if (null !== $this->sinkOSSParameters) {
            $this->sinkOSSParameters->validate();
        }
        if (null !== $this->sinkOpenSourceRabbitMQParameters) {
            $this->sinkOpenSourceRabbitMQParameters->validate();
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
        if (null !== $this->sinkApacheKafkaParameters) {
            $res['SinkApacheKafkaParameters'] = null !== $this->sinkApacheKafkaParameters ? $this->sinkApacheKafkaParameters->toArray($noStream) : $this->sinkApacheKafkaParameters;
        }

        if (null !== $this->sinkApacheRocketMQCheckpointParameters) {
            $res['SinkApacheRocketMQCheckpointParameters'] = null !== $this->sinkApacheRocketMQCheckpointParameters ? $this->sinkApacheRocketMQCheckpointParameters->toArray($noStream) : $this->sinkApacheRocketMQCheckpointParameters;
        }

        if (null !== $this->sinkApiDestinationParameters) {
            $res['SinkApiDestinationParameters'] = null !== $this->sinkApiDestinationParameters ? $this->sinkApiDestinationParameters->toArray($noStream) : $this->sinkApiDestinationParameters;
        }

        if (null !== $this->sinkBaiLianParameters) {
            $res['SinkBaiLianParameters'] = null !== $this->sinkBaiLianParameters ? $this->sinkBaiLianParameters->toArray($noStream) : $this->sinkBaiLianParameters;
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

        if (null !== $this->sinkDataWorksTriggerParameters) {
            $res['SinkDataWorksTriggerParameters'] = null !== $this->sinkDataWorksTriggerParameters ? $this->sinkDataWorksTriggerParameters->toArray($noStream) : $this->sinkDataWorksTriggerParameters;
        }

        if (null !== $this->sinkDorisParameters) {
            $res['SinkDorisParameters'] = null !== $this->sinkDorisParameters ? $this->sinkDorisParameters->toArray($noStream) : $this->sinkDorisParameters;
        }

        if (null !== $this->sinkFcParameters) {
            $res['SinkFcParameters'] = null !== $this->sinkFcParameters ? $this->sinkFcParameters->toArray($noStream) : $this->sinkFcParameters;
        }

        if (null !== $this->sinkFnfParameters) {
            $res['SinkFnfParameters'] = null !== $this->sinkFnfParameters ? $this->sinkFnfParameters->toArray($noStream) : $this->sinkFnfParameters;
        }

        if (null !== $this->sinkHttpsParameters) {
            $res['SinkHttpsParameters'] = null !== $this->sinkHttpsParameters ? $this->sinkHttpsParameters->toArray($noStream) : $this->sinkHttpsParameters;
        }

        if (null !== $this->sinkKafkaParameters) {
            $res['SinkKafkaParameters'] = null !== $this->sinkKafkaParameters ? $this->sinkKafkaParameters->toArray($noStream) : $this->sinkKafkaParameters;
        }

        if (null !== $this->sinkMNSParameters) {
            $res['SinkMNSParameters'] = null !== $this->sinkMNSParameters ? $this->sinkMNSParameters->toArray($noStream) : $this->sinkMNSParameters;
        }

        if (null !== $this->sinkOSSParameters) {
            $res['SinkOSSParameters'] = null !== $this->sinkOSSParameters ? $this->sinkOSSParameters->toArray($noStream) : $this->sinkOSSParameters;
        }

        if (null !== $this->sinkOpenSourceRabbitMQParameters) {
            $res['SinkOpenSourceRabbitMQParameters'] = null !== $this->sinkOpenSourceRabbitMQParameters ? $this->sinkOpenSourceRabbitMQParameters->toArray($noStream) : $this->sinkOpenSourceRabbitMQParameters;
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
        if (isset($map['SinkApacheKafkaParameters'])) {
            $model->sinkApacheKafkaParameters = sinkApacheKafkaParameters::fromMap($map['SinkApacheKafkaParameters']);
        }

        if (isset($map['SinkApacheRocketMQCheckpointParameters'])) {
            $model->sinkApacheRocketMQCheckpointParameters = sinkApacheRocketMQCheckpointParameters::fromMap($map['SinkApacheRocketMQCheckpointParameters']);
        }

        if (isset($map['SinkApiDestinationParameters'])) {
            $model->sinkApiDestinationParameters = SinkApiDestinationParameters::fromMap($map['SinkApiDestinationParameters']);
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

        if (isset($map['SinkDataWorksTriggerParameters'])) {
            $model->sinkDataWorksTriggerParameters = SinkDataWorksTriggerParameters::fromMap($map['SinkDataWorksTriggerParameters']);
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

        if (isset($map['SinkHttpsParameters'])) {
            $model->sinkHttpsParameters = SinkHttpsParameters::fromMap($map['SinkHttpsParameters']);
        }

        if (isset($map['SinkKafkaParameters'])) {
            $model->sinkKafkaParameters = sinkKafkaParameters::fromMap($map['SinkKafkaParameters']);
        }

        if (isset($map['SinkMNSParameters'])) {
            $model->sinkMNSParameters = sinkMNSParameters::fromMap($map['SinkMNSParameters']);
        }

        if (isset($map['SinkOSSParameters'])) {
            $model->sinkOSSParameters = SinkOSSParameters::fromMap($map['SinkOSSParameters']);
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
