<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDownloadSupportResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example DBS.ParamIsInValid
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the advanced download feature is supported. Valid values:
     *
     *   **true**: The advanced download feature is supported.
     *   **false**: The advanced download feature is not supported.
     *
     * @example true
     *
     * @var string
     */
    public $data;

    /**
     * @description The error code returned if the request fails.
     *
     * @example DBS.ParamIsInValid
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request fails.
     *
     * @example Argument: regionCode Must not be empty
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The error message.
     *
     * @example Argument: regionCode Must not be empty
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example F1A186F7-7B34-5C11-A903-EE23876B****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   **true**: The request is successful.
     *   **false**: The request fails.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'data'       => 'Data',
        'errCode'    => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return DescribeDownloadSupportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
