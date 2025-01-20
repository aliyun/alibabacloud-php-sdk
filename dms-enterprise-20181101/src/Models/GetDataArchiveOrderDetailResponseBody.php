<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail;

class GetDataArchiveOrderDetailResponseBody extends Model
{
    /**
     * @var dataArchiveOrderDetail
     */
    public $dataArchiveOrderDetail;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'dataArchiveOrderDetail' => 'DataArchiveOrderDetail',
        'errorCode'              => 'ErrorCode',
        'errorMessage'           => 'ErrorMessage',
        'requestId'              => 'RequestId',
        'success'                => 'Success',
        'traceId'                => 'TraceId',
    ];

    public function validate()
    {
        if (null !== $this->dataArchiveOrderDetail) {
            $this->dataArchiveOrderDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataArchiveOrderDetail) {
            $res['DataArchiveOrderDetail'] = null !== $this->dataArchiveOrderDetail ? $this->dataArchiveOrderDetail->toArray($noStream) : $this->dataArchiveOrderDetail;
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

        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataArchiveOrderDetail'])) {
            $model->dataArchiveOrderDetail = dataArchiveOrderDetail::fromMap($map['DataArchiveOrderDetail']);
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

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
