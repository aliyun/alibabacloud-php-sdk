<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserUploadFileJobResponseBody\uploadFileJobDetail;
use AlibabaCloud\Tea\Model;

class GetUserUploadFileJobResponseBody extends Model
{
    /**
     * @description The error code returned.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example BDEFE9F2-B3B4-42D0-83AE-ECF9FC067DCD
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The details of the file upload task.
     *
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
