<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class PutLayerACLRequest extends Model {
    protected $_name = [
        'public' => 'public',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->public) {
            $res['public'] = $this->public;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return PutLayerACLRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['public'])){
            $model->public = $map['public'];
        }
        return $model;
    }
    /**
     * @var bool
     */
    public $public;

}
