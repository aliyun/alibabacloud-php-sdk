<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class EventBridgeTriggerConfig extends Model
{
    /**
     * @var bool
     */
    public $asyncInvocationType;

    /**
     * @var string
     */
    public $eventRuleFilterPattern;

    /**
     * @var EventSinkConfig
     */
    public $eventSinkConfig;

    /**
     * @var EventSourceConfig
     */
    public $eventSourceConfig;

    /**
     * @var RunOptions
     */
    public $runOptions;

    /**
     * @var bool
     */
    public $triggerEnable;
    protected $_name = [
        'asyncInvocationType' => 'asyncInvocationType',
        'eventRuleFilterPattern' => 'eventRuleFilterPattern',
        'eventSinkConfig' => 'eventSinkConfig',
        'eventSourceConfig' => 'eventSourceConfig',
        'runOptions' => 'runOptions',
        'triggerEnable' => 'triggerEnable',
    ];

    public function validate()
    {
        if (null !== $this->eventSinkConfig) {
            $this->eventSinkConfig->validate();
        }
        if (null !== $this->eventSourceConfig) {
            $this->eventSourceConfig->validate();
        }
        if (null !== $this->runOptions) {
            $this->runOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncInvocationType) {
            $res['asyncInvocationType'] = $this->asyncInvocationType;
        }

        if (null !== $this->eventRuleFilterPattern) {
            $res['eventRuleFilterPattern'] = $this->eventRuleFilterPattern;
        }

        if (null !== $this->eventSinkConfig) {
            $res['eventSinkConfig'] = null !== $this->eventSinkConfig ? $this->eventSinkConfig->toArray($noStream) : $this->eventSinkConfig;
        }

        if (null !== $this->eventSourceConfig) {
            $res['eventSourceConfig'] = null !== $this->eventSourceConfig ? $this->eventSourceConfig->toArray($noStream) : $this->eventSourceConfig;
        }

        if (null !== $this->runOptions) {
            $res['runOptions'] = null !== $this->runOptions ? $this->runOptions->toArray($noStream) : $this->runOptions;
        }

        if (null !== $this->triggerEnable) {
            $res['triggerEnable'] = $this->triggerEnable;
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
        if (isset($map['asyncInvocationType'])) {
            $model->asyncInvocationType = $map['asyncInvocationType'];
        }

        if (isset($map['eventRuleFilterPattern'])) {
            $model->eventRuleFilterPattern = $map['eventRuleFilterPattern'];
        }

        if (isset($map['eventSinkConfig'])) {
            $model->eventSinkConfig = EventSinkConfig::fromMap($map['eventSinkConfig']);
        }

        if (isset($map['eventSourceConfig'])) {
            $model->eventSourceConfig = EventSourceConfig::fromMap($map['eventSourceConfig']);
        }

        if (isset($map['runOptions'])) {
            $model->runOptions = RunOptions::fromMap($map['runOptions']);
        }

        if (isset($map['triggerEnable'])) {
            $model->triggerEnable = $map['triggerEnable'];
        }

        return $model;
    }
}
