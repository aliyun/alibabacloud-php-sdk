<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class DeleteFunctionAsyncInvokeConfigRequest extends Model {
    protected $_name = [
        'qualifier' => 'qualifier',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteFunctionAsyncInvokeConfigRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['qualifier'])){
            $model->qualifier = $map['qualifier'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $qualifier;

}
