<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtEagleEyeResponseBody extends Model {
    protected $_name = [
        'name' => 'Name',
        'requestId' => 'RequestId',
        'eagleEyeTraceId' => 'eagleEyeTraceId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->eagleEyeTraceId) {
            $res['eagleEyeTraceId'] = $this->eagleEyeTraceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return FtEagleEyeResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['eagleEyeTraceId'])){
            $model->eagleEyeTraceId = $map['eagleEyeTraceId'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $eagleEyeTraceId;

}
