<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertHybridInstanceResponseBody\orderInfo;
use AlibabaCloud\Tea\Model;

class ConvertHybridInstanceResponseBody extends Model
{
    /**
     * @example 000000
     *
     * @var string
     */
    public $errCode;

    /**
     * @var orderInfo
     */
    public $orderInfo;

    /**
     * @example 67F33190-946B-1105-B6A1-E2DF0426DD51
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errCode'   => 'ErrCode',
        'orderInfo' => 'OrderInfo',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->orderInfo) {
            $res['OrderInfo'] = null !== $this->orderInfo ? $this->orderInfo->toMap() : null;
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
     * @return ConvertHybridInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['OrderInfo'])) {
            $model->orderInfo = orderInfo::fromMap($map['OrderInfo']);
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
