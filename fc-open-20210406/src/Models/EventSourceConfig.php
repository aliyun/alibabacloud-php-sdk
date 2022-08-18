<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\EventSourceParameters;

class EventSourceConfig extends Model {
    protected $_name = [
        'eventSourceParameters' => 'eventSourceParameters',
        'eventSourceType' => 'eventSourceType',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->eventSourceParameters) {
            $res['eventSourceParameters'] = null !== $this->eventSourceParameters ? $this->eventSourceParameters->toMap() : null;
        }
        if (null !== $this->eventSourceType) {
            $res['eventSourceType'] = $this->eventSourceType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return EventSourceConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['eventSourceParameters'])){
            $model->eventSourceParameters = EventSourceParameters::fromMap($map['eventSourceParameters']);
        }
        if(isset($map['eventSourceType'])){
            $model->eventSourceType = $map['eventSourceType'];
        }
        return $model;
    }
    /**
     * @var EventSourceParameters
     */
    public $eventSourceParameters;

    /**
     * @var string
     */
    public $eventSourceType;

}
