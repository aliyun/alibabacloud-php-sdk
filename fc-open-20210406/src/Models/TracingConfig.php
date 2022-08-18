<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class TracingConfig extends Model {
    protected $_name = [
        'params' => 'params',
        'type' => 'type',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TracingConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['params'])){
            $model->params = $map['params'];
        }
        if(isset($map['type'])){
            $model->type = $map['type'];
        }
        return $model;
    }
    /**
     * @var string[]
     */
    public $params;

    /**
     * @var string
     */
    public $type;

}
