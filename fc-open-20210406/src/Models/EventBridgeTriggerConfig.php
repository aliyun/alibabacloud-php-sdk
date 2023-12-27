<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

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
        'asyncInvocationType'    => 'asyncInvocationType',
        'eventRuleFilterPattern' => 'eventRuleFilterPattern',
        'eventSinkConfig'        => 'eventSinkConfig',
        'eventSourceConfig'      => 'eventSourceConfig',
        'runOptions'             => 'runOptions',
        'triggerEnable'          => 'triggerEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncInvocationType) {
            $res['asyncInvocationType'] = $this->asyncInvocationType;
        }
        if (null !== $this->eventRuleFilterPattern) {
            $res['eventRuleFilterPattern'] = $this->eventRuleFilterPattern;
        }
        if (null !== $this->eventSinkConfig) {
            $res['eventSinkConfig'] = null !== $this->eventSinkConfig ? $this->eventSinkConfig->toMap() : null;
        }
        if (null !== $this->eventSourceConfig) {
            $res['eventSourceConfig'] = null !== $this->eventSourceConfig ? $this->eventSourceConfig->toMap() : null;
        }
        if (null !== $this->runOptions) {
            $res['runOptions'] = null !== $this->runOptions ? $this->runOptions->toMap() : null;
        }
        if (null !== $this->triggerEnable) {
            $res['triggerEnable'] = $this->triggerEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EventBridgeTriggerConfig
     */
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
