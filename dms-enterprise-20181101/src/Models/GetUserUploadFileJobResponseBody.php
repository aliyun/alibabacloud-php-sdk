<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobResponseBody\uploadFileJobDetail;
use AlibabaCloud\Tea\Model;

class GetUserUploadFileJobResponseBody extends Model
{
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
     * @var uploadFileJobDetail
     */
    public $uploadFileJobDetail;
    protected $_name = [
        'errorCode'           => 'ErrorCode',
        'errorMessage'        => 'ErrorMessage',
        'requestId'           => 'RequestId',
        'success'             => 'Success',
        'uploadFileJobDetail' => 'UploadFileJobDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->uploadFileJobDetail) {
            $res['UploadFileJobDetail'] = null !== $this->uploadFileJobDetail ? $this->uploadFileJobDetail->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserUploadFileJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['UploadFileJobDetail'])) {
            $model->uploadFileJobDetail = uploadFileJobDetail::fromMap($map['UploadFileJobDetail']);
        }

        return $model;
    }
}
