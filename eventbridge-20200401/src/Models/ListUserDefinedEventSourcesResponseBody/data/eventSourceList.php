<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceHttpEventParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceScheduledEventParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceSLSParameters;
use AlibabaCloud\Tea\Model;

class eventSourceList extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the queried event source.
     *
     * @example acs:eventbridge:cn-hangzhou:164901546557****:eventbus/my-event-bus/eventsource/myRocketMQ.source
     *
     * @var string
     */
    public $arn;

    /**
     * @description The timestamp that indicates when the event source was created.
     *
     * @example 1607071602000
     *
     * @var float
     */
    public $ctime;

    /**
     * @description The name of the event bus.
     *
     * @example test-custom-bus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The type of the event source.
     *
     * @example RabbitMQ
     *
     * @var string
     */
    public $externalSourceType;

    /**
     * @description The name of the queried event source.
     *
     * @example rocketmq.source
     *
     * @var string
     */
    public $name;

    /**
     * @description The parameters that are returned if HTTP events are specified as the event source.
     *
     * @var sourceHttpEventParameters
     */
    public $sourceHttpEventParameters;

    /**
     * @description The parameters that are returned if Message Queue for Apache Kafka is specified as the event source.
     *
     * @var sourceKafkaParameters
     */
    public $sourceKafkaParameters;

    /**
     * @description The parameters that are returned if Message Service (MNS) is specified as the event source.
     *
     * @var sourceMNSParameters
     */
    public $sourceMNSParameters;

    /**
     * @description The parameters that are returned if Message Queue for RabbitMQ is specified as the event source.
     *
     * @var sourceRabbitMQParameters
     */
    public $sourceRabbitMQParameters;

    /**
     * @description The parameters that are returned if Message Queue for Apache RocketMQ is specified as the event source.
     *
     * @var sourceRocketMQParameters
     */
    public $sourceRocketMQParameters;

    /**
     * @description The parameters that are returned if Simple Log Service is specified as the event source.
     *
     * @var sourceSLSParameters
     */
    public $sourceSLSParameters;

    /**
     * @description The parameters that are returned if scheduled events are specified as the event source.
     *
     * @var sourceScheduledEventParameters
     */
    public $sourceScheduledEventParameters;

    /**
     * @description The status of the queried event source. The returned value Activated indicates that the event source is activated.
     *
     * @example Activated
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the queried event source. The returned value UserDefined indicates that the event source is a custom event source.
     *
     * @example UserDefined
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'arn'                            => 'Arn',
        'ctime'                          => 'Ctime',
        'eventBusName'                   => 'EventBusName',
        'externalSourceType'             => 'ExternalSourceType',
        'name'                           => 'Name',
        'sourceHttpEventParameters'      => 'SourceHttpEventParameters',
        'sourceKafkaParameters'          => 'SourceKafkaParameters',
        'sourceMNSParameters'            => 'SourceMNSParameters',
        'sourceRabbitMQParameters'       => 'SourceRabbitMQParameters',
        'sourceRocketMQParameters'       => 'SourceRocketMQParameters',
        'sourceSLSParameters'            => 'SourceSLSParameters',
        'sourceScheduledEventParameters' => 'SourceScheduledEventParameters',
        'status'                         => 'Status',
        'type'                           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }
        if (null !== $this->ctime) {
            $res['Ctime'] = $this->ctime;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->externalSourceType) {
            $res['ExternalSourceType'] = $this->externalSourceType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceHttpEventParameters) {
            $res['SourceHttpEventParameters'] = null !== $this->sourceHttpEventParameters ? $this->sourceHttpEventParameters->toMap() : null;
        }
        if (null !== $this->sourceKafkaParameters) {
            $res['SourceKafkaParameters'] = null !== $this->sourceKafkaParameters ? $this->sourceKafkaParameters->toMap() : null;
        }
        if (null !== $this->sourceMNSParameters) {
            $res['SourceMNSParameters'] = null !== $this->sourceMNSParameters ? $this->sourceMNSParameters->toMap() : null;
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
        if (null !== $this->sourceScheduledEventParameters) {
            $res['SourceScheduledEventParameters'] = null !== $this->sourceScheduledEventParameters ? $this->sourceScheduledEventParameters->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventSourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }
        if (isset($map['Ctime'])) {
            $model->ctime = $map['Ctime'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['ExternalSourceType'])) {
            $model->externalSourceType = $map['ExternalSourceType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceHttpEventParameters'])) {
            $model->sourceHttpEventParameters = sourceHttpEventParameters::fromMap($map['SourceHttpEventParameters']);
        }
        if (isset($map['SourceKafkaParameters'])) {
            $model->sourceKafkaParameters = sourceKafkaParameters::fromMap($map['SourceKafkaParameters']);
        }
        if (isset($map['SourceMNSParameters'])) {
            $model->sourceMNSParameters = sourceMNSParameters::fromMap($map['SourceMNSParameters']);
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
        if (isset($map['SourceScheduledEventParameters'])) {
            $model->sourceScheduledEventParameters = sourceScheduledEventParameters::fromMap($map['SourceScheduledEventParameters']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
