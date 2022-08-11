<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\OnDemandConfig;

class ListOnDemandConfigsResponseBody extends Model {
    protected $_name = [
        'configs' => 'configs',
        'nextToken' => 'nextToken',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->configs) {
            $res['configs'] = [];
            if(null !== $this->configs && is_array($this->configs)){
                $n = 0;
                foreach($this->configs as $item){
                    $res['configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListOnDemandConfigsResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['configs'])){
            if(!empty($map['configs'])){
                $model->configs = [];
                $n = 0;
                foreach($map['configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? OnDemandConfig::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['nextToken'])){
            $model->nextToken = $map['nextToken'];
        }
        return $model;
    }
    /**
     * @var OnDemandConfig[]
     */
    public $configs;

    /**
     * @var string
     */
    public $nextToken;

}
