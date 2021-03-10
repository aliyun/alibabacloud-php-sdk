<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectTaskDetailResponseBody\dataCorrectTaskDetail;
use AlibabaCloud\Tea\Model;

class GetDataCorrectTaskDetailResponseBody extends Model
{
    /**
     * @description Id of the request
     *
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
    public $errorMessage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var dataCorrectTaskDetail
     */
    public $dataCorrectTaskDetail;
    protected $_name = [
        'requestId'             => 'RequestId',
        'success'               => 'Success',
        'errorMessage'          => 'ErrorMessage',
        'errorCode'             => 'ErrorCode',
        'dataCorrectTaskDetail' => 'DataCorrectTaskDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->dataCorrectTaskDetail) {
            $res['DataCorrectTaskDetail'] = null !== $this->dataCorrectTaskDetail ? $this->dataCorrectTaskDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataCorrectTaskDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['DataCorrectTaskDetail'])) {
            $model->dataCorrectTaskDetail = dataCorrectTaskDetail::fromMap($map['DataCorrectTaskDetail']);
        }

        return $model;
    }
}
