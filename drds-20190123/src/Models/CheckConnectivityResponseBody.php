<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\CheckConnectivityResponseBody\checkConnectivityResult;
use AlibabaCloud\Tea\Model;

class CheckConnectivityResponseBody extends Model
{
    /**
     * @var checkConnectivityResult
     */
    public $checkConnectivityResult;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'checkConnectivityResult' => 'CheckConnectivityResult',
        'requestId'               => 'RequestId',
        'success'                 => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkConnectivityResult) {
            $res['CheckConnectivityResult'] = null !== $this->checkConnectivityResult ? $this->checkConnectivityResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckConnectivityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckConnectivityResult'])) {
            $model->checkConnectivityResult = checkConnectivityResult::fromMap($map['CheckConnectivityResult']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
