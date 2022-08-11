<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01ResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01ResponseBody\demo01\demo011;

class demo01 extends Model {
    protected $_name = [
        'demo011' => 'Demo011',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->demo011) {
            $res['Demo011'] = null !== $this->demo011 ? $this->demo011->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return demo01
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Demo011'])){
            $model->demo011 = demo011::fromMap($map['Demo011']);
        }
        return $model;
    }
    /**
     * @var demo011
     */
    public $demo011;

}
