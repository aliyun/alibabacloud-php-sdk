<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectOrderDetailResponseBody\dataCorrectOrderDetail;
use AlibabaCloud\Tea\Model;

class GetDataCorrectOrderDetailResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @var dataCorrectOrderDetail
     */
    public $dataCorrectOrderDetail;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The message that indicates a check step.
     *
     * @example 427688B8-ADFB-4C4E-9D45-EF5C1FD6E23D
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
        'dataCorrectOrderDetail' => 'DataCorrectOrderDetail',
        'errorCode'              => 'ErrorCode',
        'errorMessage'           => 'ErrorMessage',
        'requestId'              => 'RequestId',
        'success'                => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCorrectOrderDetail) {
            $res['DataCorrectOrderDetail'] = null !== $this->dataCorrectOrderDetail ? $this->dataCorrectOrderDetail->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
     * @return GetDataCorrectOrderDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCorrectOrderDetail'])) {
            $model->dataCorrectOrderDetail = dataCorrectOrderDetail::fromMap($map['DataCorrectOrderDetail']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
