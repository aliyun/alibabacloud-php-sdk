<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectTaskDetailResponseBody\dataCorrectTaskDetail;

class GetDataCorrectTaskDetailResponseBody extends Model
{
    /**
     * @var dataCorrectTaskDetail
     */
    public $dataCorrectTaskDetail;
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
    protected $_name = [
        'dataCorrectTaskDetail' => 'DataCorrectTaskDetail',
        'errorCode'             => 'ErrorCode',
        'errorMessage'          => 'ErrorMessage',
        'requestId'             => 'RequestId',
        'success'               => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->dataCorrectTaskDetail) {
            $this->dataCorrectTaskDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataCorrectTaskDetail) {
            $res['DataCorrectTaskDetail'] = null !== $this->dataCorrectTaskDetail ? $this->dataCorrectTaskDetail->toArray($noStream) : $this->dataCorrectTaskDetail;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCorrectTaskDetail'])) {
            $model->dataCorrectTaskDetail = dataCorrectTaskDetail::fromMap($map['DataCorrectTaskDetail']);
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
