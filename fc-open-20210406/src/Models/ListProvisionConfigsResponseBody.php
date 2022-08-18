<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListProvisionConfigsResponseBody\provisionConfigs;

class ListProvisionConfigsResponseBody extends Model {
    protected $_name = [
        'nextToken' => 'nextToken',
        'provisionConfigs' => 'provisionConfigs',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->provisionConfigs) {
            $res['provisionConfigs'] = [];
            if(null !== $this->provisionConfigs && is_array($this->provisionConfigs)){
                $n = 0;
                foreach($this->provisionConfigs as $item){
                    $res['provisionConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListProvisionConfigsResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nextToken'])){
            $model->nextToken = $map['nextToken'];
        }
        if(isset($map['provisionConfigs'])){
            if(!empty($map['provisionConfigs'])){
                $model->provisionConfigs = [];
                $n = 0;
                foreach($map['provisionConfigs'] as $item) {
                    $model->provisionConfigs[$n++] = null !== $item ? provisionConfigs::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var provisionConfigs[]
     */
    public $provisionConfigs;

}
