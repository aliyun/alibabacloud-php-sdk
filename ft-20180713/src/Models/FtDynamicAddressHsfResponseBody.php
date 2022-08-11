<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtDynamicAddressHsfResponseBody extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return FtDynamicAddressHsfResponseBody
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $requestId;

}
