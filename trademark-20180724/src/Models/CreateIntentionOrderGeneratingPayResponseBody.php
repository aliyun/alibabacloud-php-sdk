<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CreateIntentionOrderGeneratingPayResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $payUrl;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int[]
     */
    public $orderIds;
    protected $_name = [
        'errorMsg'  => 'ErrorMsg',
        'requestId' => 'RequestId',
        'payUrl'    => 'PayUrl',
        'success'   => 'Success',
        'orderIds'  => 'OrderIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->payUrl) {
            $res['PayUrl'] = $this->payUrl;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->orderIds) {
            $res['OrderIds'] = $this->orderIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIntentionOrderGeneratingPayResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PayUrl'])) {
            $model->payUrl = $map['PayUrl'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = $map['OrderIds'];
            }
        }

        return $model;
    }
}
