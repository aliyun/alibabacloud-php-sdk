<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\EventSourceConfig;

class EventBridgeTriggerConfig extends Model {
    protected $_name = [
        'asyncInvocationType' => 'asyncInvocationType',
        'eventRuleFilterPattern' => 'eventRuleFilterPattern',
        'eventSourceConfig' => 'eventSourceConfig',
        'triggerEnable' => 'triggerEnable',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->asyncInvocationType) {
            $res['asyncInvocationType'] = $this->asyncInvocationType;
        }
        if (null !== $this->eventRuleFilterPattern) {
            $res['eventRuleFilterPattern'] = $this->eventRuleFilterPattern;
        }
        if (null !== $this->eventSourceConfig) {
            $res['eventSourceConfig'] = null !== $this->eventSourceConfig ? $this->eventSourceConfig->toMap() : null;
        }
        if (null !== $this->triggerEnable) {
            $res['triggerEnable'] = $this->triggerEnable;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return EventBridgeTriggerConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['asyncInvocationType'])){
            $model->asyncInvocationType = $map['asyncInvocationType'];
        }
        if(isset($map['eventRuleFilterPattern'])){
            $model->eventRuleFilterPattern = $map['eventRuleFilterPattern'];
        }
        if(isset($map['eventSourceConfig'])){
            $model->eventSourceConfig = EventSourceConfig::fromMap($map['eventSourceConfig']);
        }
        if(isset($map['triggerEnable'])){
            $model->triggerEnable = $map['triggerEnable'];
        }
        return $model;
    }
    /**
     * @var bool
     */
    public $asyncInvocationType;

    /**
     * @var string
     */
    public $eventRuleFilterPattern;

    /**
     * @var EventSourceConfig
     */
    public $eventSourceConfig;

    /**
     * @var bool
     */
    public $triggerEnable;

}
