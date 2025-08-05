<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkApacheRocketMQCheckpointParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkCustomizedKafkaConnectorParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkCustomizedKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDashVectorParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDataHubParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkDorisParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFcParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFnfParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkOpenSourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkRocketMQCheckpointParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkSLSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkBaiLianParameters;
use AlibabaCloud\Tea\Model;

class sink extends Model
{
    /**
     * @var sinkApacheRocketMQCheckpointParameters
     */
    public $sinkApacheRocketMQCheckpointParameters;

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
     * @var sinkDorisParameters
     */
    public $sinkDorisParameters;

    /**
     * @description The parameters that are returned if Function Compute is specified as the event target.
     *
     * @var sinkFcParameters
     */
    public $sinkFcParameters;

    /**
     * @description The parameters that are returned if CloudFlow is specified as the event target.
     *
     * @var sinkFnfParameters
     */
    public $sinkFnfParameters;

    /**
     * @description The parameters that are returned if ApsaraMQ for Kafka is specified as the event target.
     *
     * @var sinkKafkaParameters
     */
    public $sinkKafkaParameters;

    /**
     * @description The parameters that are returned if MNS is specified as the event target.
     *
     * @var sinkMNSParameters
     */
    public $sinkMNSParameters;

    /**
     * @var sinkOpenSourceRabbitMQParameters
     */
    public $sinkOpenSourceRabbitMQParameters;

    /**
     * @description The parameters that are returned if ApsaraMQ for RabbitMQ is specified as the event target.
     *
     * @var sinkRabbitMQParameters
     */
    public $sinkRabbitMQParameters;

    /**
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
