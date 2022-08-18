<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\ListServicesResponseBody\services;

class ListServicesResponseBody extends Model {
    protected $_name = [
        'nextToken' => 'nextToken',
        'services' => 'services',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->services) {
            $res['services'] = [];
            if(null !== $this->services && is_array($this->services)){
                $n = 0;
                foreach($this->services as $item){
                    $res['services'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ListServicesResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['nextToken'])){
            $model->nextToken = $map['nextToken'];
        }
        if(isset($map['services'])){
            if(!empty($map['services'])){
                $model->services = [];
                $n = 0;
                foreach($map['services'] as $item) {
                    $model->services[$n++] = null !== $item ? services::fromMap($item) : $item;
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
     * @var services[]
     */
    public $services;

}
