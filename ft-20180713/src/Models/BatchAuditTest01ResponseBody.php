<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01ResponseBody\demo01;

class BatchAuditTest01ResponseBody extends Model {
    protected $_name = [
        'demo01' => 'Demo01',
        'name' => 'Name',
        'requestId' => 'RequestId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->demo01) {
            $res['Demo01'] = null !== $this->demo01 ? $this->demo01->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return BatchAuditTest01ResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Demo01'])){
            $model->demo01 = demo01::fromMap($map['Demo01']);
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        return $model;
    }
    /**
     * @var demo01
     */
    public $demo01;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

}
