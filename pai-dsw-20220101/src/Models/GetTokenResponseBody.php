<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetTokenResponseBody extends Model
{
    /**
     * @description The status code. Valid values:
     *
     *   InternalError: All errors, except for parameter validation errors, are internal errors.
     *   ValidationError: A parameter validation error.
     *
     * @example ValidationError
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message.
     *
     * @example "XXX"
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example E7D55162-4489-1619-AAF5-3F97D5FCA948
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The temporary authentication information of the DSW instance.
     *
     * @example *******
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'token' => 'Token',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
