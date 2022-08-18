<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListEventSourcesResponseBody\eventSources;

class ListEventSourcesResponseBody extends Model {
    protected $_name = [
        'eventSources' => 'eventSources',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->eventSources) {
            $res['eventSources'] = [];
            if(null !== $this->eventSources && is_array($this->eventSources)){
                $n = 0;
                foreach($this->eventSources as $item){
                    $res['eventSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListEventSourcesResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['eventSources'])){
            if(!empty($map['eventSources'])){
                $model->eventSources = [];
                $n = 0;
                foreach($map['eventSources'] as $item) {
                    $model->eventSources[$n++] = null !== $item ? eventSources::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @var eventSources[]
     */
    public $eventSources;

}
