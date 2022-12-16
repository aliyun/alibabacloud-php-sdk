<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetMseFeatureSwitchResponseBody extends Model
{
    /**
     * @description The error code returned if the request fails.
     *
     * @example NoPermission
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The message returned.
     *
     * @example The request is processed successfully.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 6B4653A3-8D9C-5FDC-BB0C-936D40E9794B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned results.
     *
     * @example {\"nacos_config_encrypt\": False}
     *
     * @var mixed[]
     */
    public $result;

    /**
     * @description Indicates whether the request is successful. Valid values:
     * - `false`: The request fails.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'result'    => 'Result',
        'success'   => 'Success',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMseFeatureSwitchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
