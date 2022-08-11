<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class TestFlowStrategy01ResponseBody extends Model {
    protected $_name = [
        'list' => 'List',
        'names' => 'Names',
        'requestId' => 'RequestId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = $this->list;
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return TestFlowStrategy01ResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['List'])){
            if(!empty($map['List'])){
                $model->list = $map['List'];
            }
        }
        if(isset($map['Names'])){
            if(!empty($map['Names'])){
                $model->names = $map['Names'];
            }
        }
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        return $model;
    }
    /**
     * @var string[]
     */
    public $list;

    /**
     * @var string[]
     */
    public $names;

    /**
     * @var string
     */
    public $requestId;

}
