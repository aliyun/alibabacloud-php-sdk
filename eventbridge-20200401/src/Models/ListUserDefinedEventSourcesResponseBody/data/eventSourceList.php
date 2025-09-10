<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceHttpEventParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceKafkaParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceMNSParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceOSSEventParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceRabbitMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceRocketMQParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceScheduledEventParameters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList\sourceSLSParameters;

class eventSourceList extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var float
     */
    public $ctime;

    /**
     * @var string
     */
    public $eventBusName;

    /**
     * @var string
     */
    public $externalSourceType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var sourceHttpEventParameters
     */
    public $sourceHttpEventParameters;

    /**
     * @var sourceKafkaParameters
     */
    public $sourceKafkaParameters;

    /**
     * @var sourceMNSParameters
     */
    public $sourceMNSParameters;

    /**
     * @var sourceOSSEventParameters
     */
    public $sourceOSSEventParameters;

    /**
     * @var sourceRabbitMQParameters
     */
    public $sourceRabbitMQParameters;

    /**
     * @var sourceRocketMQParameters
     */
    public $sourceRocketMQParameters;

    /**
     * @var sourceSLSParameters
     */
    public $sourceSLSParameters;

    /**
     * @var sourceScheduledEventParameters
     */
    public $sourceScheduledEventParameters;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'arn' => 'Arn',
        'ctime' => 'Ctime',
        'eventBusName' => 'EventBusName',
        'externalSourceType' => 'ExternalSourceType',
        'name' => 'Name',
        'sourceHttpEventParameters' => 'SourceHttpEventParameters',
        'sourceKafkaParameters' => 'SourceKafkaParameters',
        'sourceMNSParameters' => 'SourceMNSParameters',
        'sourceOSSEventParameters' => 'SourceOSSEventParameters',
        'sourceRabbitMQParameters' => 'SourceRabbitMQParameters',
        'sourceRocketMQParameters' => 'SourceRocketMQParameters',
        'sourceSLSParameters' => 'SourceSLSParameters',
        'sourceScheduledEventParameters' => 'SourceScheduledEventParameters',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->sourceHttpEventParameters) {
            $this->sourceHttpEventParameters->validate();
        }
        if (null !== $this->sourceKafkaParameters) {
            $this->sourceKafkaParameters->validate();
        }
        if (null !== $this->sourceMNSParameters) {
            $this->sourceMNSParameters->validate();
        }
        if (null !== $this->sourceOSSEventParameters) {
            $this->sourceOSSEventParameters->validate();
        }
        if (null !== $this->sourceRabbitMQParameters) {
            $this->sourceRabbitMQParameters->validate();
        }
        if (null !== $this->sourceRocketMQParameters) {
            $this->sourceRocketMQParameters->validate();
        }
        if (null !== $this->sourceSLSParameters) {
            $this->sourceSLSParameters->validate();
        }
        if (null !== $this->sourceScheduledEventParameters) {
            $this->sourceScheduledEventParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SourceHttpEventParameters'] = null !== $this->sourceHttpEventParameters ? $this->sourceHttpEventParameters->toArray($noStream) : $this->sourceHttpEventParameters;
        }

        if (null !== $this->sourceKafkaParameters) {
            $res['SourceKafkaParameters'] = null !== $this->sourceKafkaParameters ? $this->sourceKafkaParameters->toArray($noStream) : $this->sourceKafkaParameters;
        }

        if (null !== $this->sourceMNSParameters) {
            $res['SourceMNSParameters'] = null !== $this->sourceMNSParameters ? $this->sourceMNSParameters->toArray($noStream) : $this->sourceMNSParameters;
        }

        if (null !== $this->sourceOSSEventParameters) {
            $res['SourceOSSEventParameters'] = null !== $this->sourceOSSEventParameters ? $this->sourceOSSEventParameters->toArray($noStream) : $this->sourceOSSEventParameters;
        }

        if (null !== $this->sourceRabbitMQParameters) {
            $res['SourceRabbitMQParameters'] = null !== $this->sourceRabbitMQParameters ? $this->sourceRabbitMQParameters->toArray($noStream) : $this->sourceRabbitMQParameters;
        }

        if (null !== $this->sourceRocketMQParameters) {
            $res['SourceRocketMQParameters'] = null !== $this->sourceRocketMQParameters ? $this->sourceRocketMQParameters->toArray($noStream) : $this->sourceRocketMQParameters;
        }

        if (null !== $this->sourceSLSParameters) {
            $res['SourceSLSParameters'] = null !== $this->sourceSLSParameters ? $this->sourceSLSParameters->toArray($noStream) : $this->sourceSLSParameters;
        }

        if (null !== $this->sourceScheduledEventParameters) {
            $res['SourceScheduledEventParameters'] = null !== $this->sourceScheduledEventParameters ? $this->sourceScheduledEventParameters->toArray($noStream) : $this->sourceScheduledEventParameters;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['SourceOSSEventParameters'])) {
            $model->sourceOSSEventParameters = sourceOSSEventParameters::fromMap($map['SourceOSSEventParameters']);
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
