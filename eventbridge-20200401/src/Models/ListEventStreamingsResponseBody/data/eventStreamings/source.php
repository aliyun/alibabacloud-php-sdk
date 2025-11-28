<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceApacheRocketMQCheckpointParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceCustomizedKafkaConnectorParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceCustomizedKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceDTSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceEventBusParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceMQTTParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceOpenSourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceOSSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourcePrometheusParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceRocketMQCheckpointParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\source\sourceSLSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SourceMySQLParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SourcePostgreSQLParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SourceRabbitMQMetaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SourceRabbitMQMsgSyncParameters;

class source extends Model
{
    /**
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
     * @var sourceDTSParameters
     */
    public $sourceDTSParameters;

    /**
     * @var sourceEventBusParameters
     */
    public $sourceEventBusParameters;

    /**
     * @var sourceKafkaParameters
     */
    public $sourceKafkaParameters;

    /**
     * @var sourceMNSParameters
     */
    public $sourceMNSParameters;

    /**
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
     * @var SourcePostgreSQLParameters
     */
    public $sourcePostgreSQLParameters;

    /**
     * @var sourcePrometheusParameters
     */
    public $sourcePrometheusParameters;

    /**
     * @var SourceRabbitMQMetaParameters
     */
    public $sourceRabbitMQMetaParameters;

    /**
     * @var SourceRabbitMQMsgSyncParameters
     */
    public $sourceRabbitMQMsgSyncParameters;

    /**
     * @var sourceRabbitMQParameters
     */
    public $sourceRabbitMQParameters;

    /**
     * @var sourceRocketMQCheckpointParameters
     */
    public $sourceRocketMQCheckpointParameters;

    /**
     * @var sourceRocketMQParameters
     */
    public $sourceRocketMQParameters;

    /**
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
        'sourcePostgreSQLParameters' => 'SourcePostgreSQLParameters',
        'sourcePrometheusParameters' => 'SourcePrometheusParameters',
        'sourceRabbitMQMetaParameters' => 'SourceRabbitMQMetaParameters',
        'sourceRabbitMQMsgSyncParameters' => 'SourceRabbitMQMsgSyncParameters',
        'sourceRabbitMQParameters' => 'SourceRabbitMQParameters',
        'sourceRocketMQCheckpointParameters' => 'SourceRocketMQCheckpointParameters',
        'sourceRocketMQParameters' => 'SourceRocketMQParameters',
        'sourceSLSParameters' => 'SourceSLSParameters',
    ];

    public function validate()
    {
        if (null !== $this->sourceApacheRocketMQCheckpointParameters) {
            $this->sourceApacheRocketMQCheckpointParameters->validate();
        }
        if (null !== $this->sourceCustomizedKafkaConnectorParameters) {
            $this->sourceCustomizedKafkaConnectorParameters->validate();
        }
        if (null !== $this->sourceCustomizedKafkaParameters) {
            $this->sourceCustomizedKafkaParameters->validate();
        }
        if (null !== $this->sourceDTSParameters) {
            $this->sourceDTSParameters->validate();
        }
        if (null !== $this->sourceEventBusParameters) {
            $this->sourceEventBusParameters->validate();
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
        if (null !== $this->sourceMySQLParameters) {
            $this->sourceMySQLParameters->validate();
        }
        if (null !== $this->sourceOSSParameters) {
            $this->sourceOSSParameters->validate();
        }
        if (null !== $this->sourceOpenSourceRabbitMQParameters) {
            $this->sourceOpenSourceRabbitMQParameters->validate();
        }
        if (null !== $this->sourcePostgreSQLParameters) {
            $this->sourcePostgreSQLParameters->validate();
        }
        if (null !== $this->sourcePrometheusParameters) {
            $this->sourcePrometheusParameters->validate();
        }
        if (null !== $this->sourceRabbitMQMetaParameters) {
            $this->sourceRabbitMQMetaParameters->validate();
        }
        if (null !== $this->sourceRabbitMQMsgSyncParameters) {
            $this->sourceRabbitMQMsgSyncParameters->validate();
        }
        if (null !== $this->sourceRabbitMQParameters) {
            $this->sourceRabbitMQParameters->validate();
        }
        if (null !== $this->sourceRocketMQCheckpointParameters) {
            $this->sourceRocketMQCheckpointParameters->validate();
        }
        if (null !== $this->sourceRocketMQParameters) {
            $this->sourceRocketMQParameters->validate();
        }
        if (null !== $this->sourceSLSParameters) {
            $this->sourceSLSParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceApacheRocketMQCheckpointParameters) {
            $res['SourceApacheRocketMQCheckpointParameters'] = null !== $this->sourceApacheRocketMQCheckpointParameters ? $this->sourceApacheRocketMQCheckpointParameters->toArray($noStream) : $this->sourceApacheRocketMQCheckpointParameters;
        }

        if (null !== $this->sourceCustomizedKafkaConnectorParameters) {
            $res['SourceCustomizedKafkaConnectorParameters'] = null !== $this->sourceCustomizedKafkaConnectorParameters ? $this->sourceCustomizedKafkaConnectorParameters->toArray($noStream) : $this->sourceCustomizedKafkaConnectorParameters;
        }

        if (null !== $this->sourceCustomizedKafkaParameters) {
            $res['SourceCustomizedKafkaParameters'] = null !== $this->sourceCustomizedKafkaParameters ? $this->sourceCustomizedKafkaParameters->toArray($noStream) : $this->sourceCustomizedKafkaParameters;
        }

        if (null !== $this->sourceDTSParameters) {
            $res['SourceDTSParameters'] = null !== $this->sourceDTSParameters ? $this->sourceDTSParameters->toArray($noStream) : $this->sourceDTSParameters;
        }

        if (null !== $this->sourceEventBusParameters) {
            $res['SourceEventBusParameters'] = null !== $this->sourceEventBusParameters ? $this->sourceEventBusParameters->toArray($noStream) : $this->sourceEventBusParameters;
        }

        if (null !== $this->sourceKafkaParameters) {
            $res['SourceKafkaParameters'] = null !== $this->sourceKafkaParameters ? $this->sourceKafkaParameters->toArray($noStream) : $this->sourceKafkaParameters;
        }

        if (null !== $this->sourceMNSParameters) {
            $res['SourceMNSParameters'] = null !== $this->sourceMNSParameters ? $this->sourceMNSParameters->toArray($noStream) : $this->sourceMNSParameters;
        }

        if (null !== $this->sourceMQTTParameters) {
            $res['SourceMQTTParameters'] = null !== $this->sourceMQTTParameters ? $this->sourceMQTTParameters->toArray($noStream) : $this->sourceMQTTParameters;
        }

        if (null !== $this->sourceMySQLParameters) {
            $res['SourceMySQLParameters'] = null !== $this->sourceMySQLParameters ? $this->sourceMySQLParameters->toArray($noStream) : $this->sourceMySQLParameters;
        }

        if (null !== $this->sourceOSSParameters) {
            $res['SourceOSSParameters'] = null !== $this->sourceOSSParameters ? $this->sourceOSSParameters->toArray($noStream) : $this->sourceOSSParameters;
        }

        if (null !== $this->sourceOpenSourceRabbitMQParameters) {
            $res['SourceOpenSourceRabbitMQParameters'] = null !== $this->sourceOpenSourceRabbitMQParameters ? $this->sourceOpenSourceRabbitMQParameters->toArray($noStream) : $this->sourceOpenSourceRabbitMQParameters;
        }

        if (null !== $this->sourcePostgreSQLParameters) {
            $res['SourcePostgreSQLParameters'] = null !== $this->sourcePostgreSQLParameters ? $this->sourcePostgreSQLParameters->toArray($noStream) : $this->sourcePostgreSQLParameters;
        }

        if (null !== $this->sourcePrometheusParameters) {
            $res['SourcePrometheusParameters'] = null !== $this->sourcePrometheusParameters ? $this->sourcePrometheusParameters->toArray($noStream) : $this->sourcePrometheusParameters;
        }

        if (null !== $this->sourceRabbitMQMetaParameters) {
            $res['SourceRabbitMQMetaParameters'] = null !== $this->sourceRabbitMQMetaParameters ? $this->sourceRabbitMQMetaParameters->toArray($noStream) : $this->sourceRabbitMQMetaParameters;
        }

        if (null !== $this->sourceRabbitMQMsgSyncParameters) {
            $res['SourceRabbitMQMsgSyncParameters'] = null !== $this->sourceRabbitMQMsgSyncParameters ? $this->sourceRabbitMQMsgSyncParameters->toArray($noStream) : $this->sourceRabbitMQMsgSyncParameters;
        }

        if (null !== $this->sourceRabbitMQParameters) {
            $res['SourceRabbitMQParameters'] = null !== $this->sourceRabbitMQParameters ? $this->sourceRabbitMQParameters->toArray($noStream) : $this->sourceRabbitMQParameters;
        }

        if (null !== $this->sourceRocketMQCheckpointParameters) {
            $res['SourceRocketMQCheckpointParameters'] = null !== $this->sourceRocketMQCheckpointParameters ? $this->sourceRocketMQCheckpointParameters->toArray($noStream) : $this->sourceRocketMQCheckpointParameters;
        }

        if (null !== $this->sourceRocketMQParameters) {
            $res['SourceRocketMQParameters'] = null !== $this->sourceRocketMQParameters ? $this->sourceRocketMQParameters->toArray($noStream) : $this->sourceRocketMQParameters;
        }

        if (null !== $this->sourceSLSParameters) {
            $res['SourceSLSParameters'] = null !== $this->sourceSLSParameters ? $this->sourceSLSParameters->toArray($noStream) : $this->sourceSLSParameters;
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

        if (isset($map['SourcePostgreSQLParameters'])) {
            $model->sourcePostgreSQLParameters = SourcePostgreSQLParameters::fromMap($map['SourcePostgreSQLParameters']);
        }

        if (isset($map['SourcePrometheusParameters'])) {
            $model->sourcePrometheusParameters = sourcePrometheusParameters::fromMap($map['SourcePrometheusParameters']);
        }

        if (isset($map['SourceRabbitMQMetaParameters'])) {
            $model->sourceRabbitMQMetaParameters = SourceRabbitMQMetaParameters::fromMap($map['SourceRabbitMQMetaParameters']);
        }

        if (isset($map['SourceRabbitMQMsgSyncParameters'])) {
            $model->sourceRabbitMQMsgSyncParameters = SourceRabbitMQMsgSyncParameters::fromMap($map['SourceRabbitMQMsgSyncParameters']);
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
