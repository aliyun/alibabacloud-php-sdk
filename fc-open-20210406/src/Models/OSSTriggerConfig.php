<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\OSSTriggerFilter;

class OSSTriggerConfig extends Model {
    protected $_name = [
        'events' => 'events',
        'filter' => 'filter',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->events) {
            $res['events'] = $this->events;
        }
        if (null !== $this->filter) {
            $res['filter'] = null !== $this->filter ? $this->filter->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return OSSTriggerConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['events'])){
            if(!empty($map['events'])){
                $model->events = $map['events'];
            }
        }
        if(isset($map['filter'])){
            $model->filter = OSSTriggerFilter::fromMap($map['filter']);
        }
        return $model;
    }
    /**
     * @var string[]
     */
    public $events;

    /**
     * @var OSSTriggerFilter
     */
    public $filter;

}
