<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadFileJobResponseBody extends Model
{
    /**
     * @description The error code returned.
     *
     * @example InvalidParameterValid
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example Unsupported url scheme : null, scheme must be https or http
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The key of the task.
     *
     * >  You can call the [GetUserUploadFileJob](https://help.aliyun.com/document_detail/206069.html) operation to query the progress and details of the task.
     * @example 761f18031635736380812****
     *
     * @var string
     */
    public $jobKey;

    /**
     * @description The ID of the request.
     *
     * @example E103C5F9-DE47-53F2-BF34-D71DF38F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'jobKey'       => 'JobKey',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->jobKey) {
            $res['JobKey'] = $this->jobKey;
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
     * @return CreateUploadFileJobResponseBody
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
        if (isset($map['JobKey'])) {
            $model->jobKey = $map['JobKey'];
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
