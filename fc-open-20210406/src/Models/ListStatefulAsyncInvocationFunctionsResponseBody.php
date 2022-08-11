<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\AsyncConfigMeta;

class ListStatefulAsyncInvocationFunctionsResponseBody extends Model {
    protected $_name = [
        'data' => 'data',
        'nextToken' => 'nextToken',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = [];
            if(null !== $this->data && is_array($this->data)){
                $n = 0;
                foreach($this->data as $item){
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListStatefulAsyncInvocationFunctionsResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['data'])){
            if(!empty($map['data'])){
                $model->data = [];
                $n = 0;
                foreach($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? AsyncConfigMeta::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['nextToken'])){
            $model->nextToken = $map['nextToken'];
        }
        return $model;
    }
    /**
     * @var AsyncConfigMeta[]
     */
    public $data;

    /**
     * @var string
     */
    public $nextToken;

}
