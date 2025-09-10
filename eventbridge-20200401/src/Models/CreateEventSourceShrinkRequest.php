<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class CreateEventSourceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventBusName;

    /**
     * @var string
     */
    public $eventSourceName;

    /**
     * @var string
     */
    public $externalSourceConfigShrink;

    /**
     * @var int[]
     */
    public $externalSourceType;

    /**
     * @var bool
     */
    public $linkedExternalSource;

    /**
     * @var string
     */
    public $sourceHttpEventParametersShrink;

    /**
     * @var string
     */
    public $sourceKafkaParametersShrink;

    /**
     * @var string
     */
    public $sourceMNSParametersShrink;

    /**
     * @var string
     */
    public $sourceOSSEventParametersShrink;

    /**
     * @var string
     */
    public $sourceRabbitMQParametersShrink;

    /**
     * @var string
     */
    public $sourceRocketMQParametersShrink;

    /**
     * @var string
     */
    public $sourceSLSParametersShrink;

    /**
     * @var string
     */
    public $sourceScheduledEventParametersShrink;
    protected $_name = [
        'description' => 'Description',
        'eventBusName' => 'EventBusName',
        'eventSourceName' => 'EventSourceName',
        'externalSourceConfigShrink' => 'ExternalSourceConfig',
        'externalSourceType' => 'ExternalSourceType',
        'linkedExternalSource' => 'LinkedExternalSource',
        'sourceHttpEventParametersShrink' => 'SourceHttpEventParameters',
        'sourceKafkaParametersShrink' => 'SourceKafkaParameters',
        'sourceMNSParametersShrink' => 'SourceMNSParameters',
        'sourceOSSEventParametersShrink' => 'SourceOSSEventParameters',
        'sourceRabbitMQParametersShrink' => 'SourceRabbitMQParameters',
        'sourceRocketMQParametersShrink' => 'SourceRocketMQParameters',
        'sourceSLSParametersShrink' => 'SourceSLSParameters',
        'sourceScheduledEventParametersShrink' => 'SourceScheduledEventParameters',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }

        if (null !== $this->eventSourceName) {
            $res['EventSourceName'] = $this->eventSourceName;
        }

        if (null !== $this->externalSourceConfigShrink) {
            $res['ExternalSourceConfig'] = $this->externalSourceConfigShrink;
        }

        if (null !== $this->externalSourceType) {
            $res['ExternalSourceType'] = $this->externalSourceType;
        }

        if (null !== $this->linkedExternalSource) {
            $res['LinkedExternalSource'] = $this->linkedExternalSource;
        }

        if (null !== $this->sourceHttpEventParametersShrink) {
            $res['SourceHttpEventParameters'] = $this->sourceHttpEventParametersShrink;
        }

        if (null !== $this->sourceKafkaParametersShrink) {
            $res['SourceKafkaParameters'] = $this->sourceKafkaParametersShrink;
        }

        if (null !== $this->sourceMNSParametersShrink) {
            $res['SourceMNSParameters'] = $this->sourceMNSParametersShrink;
        }

        if (null !== $this->sourceOSSEventParametersShrink) {
            $res['SourceOSSEventParameters'] = $this->sourceOSSEventParametersShrink;
        }

        if (null !== $this->sourceRabbitMQParametersShrink) {
            $res['SourceRabbitMQParameters'] = $this->sourceRabbitMQParametersShrink;
        }

        if (null !== $this->sourceRocketMQParametersShrink) {
            $res['SourceRocketMQParameters'] = $this->sourceRocketMQParametersShrink;
        }

        if (null !== $this->sourceSLSParametersShrink) {
            $res['SourceSLSParameters'] = $this->sourceSLSParametersShrink;
        }

        if (null !== $this->sourceScheduledEventParametersShrink) {
            $res['SourceScheduledEventParameters'] = $this->sourceScheduledEventParametersShrink;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }

        if (isset($map['EventSourceName'])) {
            $model->eventSourceName = $map['EventSourceName'];
        }

        if (isset($map['ExternalSourceConfig'])) {
            $model->externalSourceConfigShrink = $map['ExternalSourceConfig'];
        }

        if (isset($map['ExternalSourceType'])) {
            $model->externalSourceType = $map['ExternalSourceType'];
        }

        if (isset($map['LinkedExternalSource'])) {
            $model->linkedExternalSource = $map['LinkedExternalSource'];
        }

        if (isset($map['SourceHttpEventParameters'])) {
            $model->sourceHttpEventParametersShrink = $map['SourceHttpEventParameters'];
        }

        if (isset($map['SourceKafkaParameters'])) {
            $model->sourceKafkaParametersShrink = $map['SourceKafkaParameters'];
        }

        if (isset($map['SourceMNSParameters'])) {
            $model->sourceMNSParametersShrink = $map['SourceMNSParameters'];
        }

        if (isset($map['SourceOSSEventParameters'])) {
            $model->sourceOSSEventParametersShrink = $map['SourceOSSEventParameters'];
        }

        if (isset($map['SourceRabbitMQParameters'])) {
            $model->sourceRabbitMQParametersShrink = $map['SourceRabbitMQParameters'];
        }

        if (isset($map['SourceRocketMQParameters'])) {
            $model->sourceRocketMQParametersShrink = $map['SourceRocketMQParameters'];
        }

        if (isset($map['SourceSLSParameters'])) {
            $model->sourceSLSParametersShrink = $map['SourceSLSParameters'];
        }

        if (isset($map['SourceScheduledEventParameters'])) {
            $model->sourceScheduledEventParametersShrink = $map['SourceScheduledEventParameters'];
        }

        return $model;
    }
}
