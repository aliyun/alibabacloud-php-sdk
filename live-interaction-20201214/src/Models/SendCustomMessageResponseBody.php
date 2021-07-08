<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\SendCustomMessageResponseBody\result;
use AlibabaCloud\Tea\Model;

class SendCustomMessageResponseBody extends Model
{
    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 请求是否成功。
     *
     * @var bool
     */
    public $responseSuccess;

    /**
     * @description 错误码，请求异常时返回。
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 错误信息，请求异常时返回。
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 请求的返回结果。
     *
     * @var result
     */
    public $result;
    protected $_name = [
        'requestId'       => 'RequestId',
        'responseSuccess' => 'ResponseSuccess',
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'result'          => 'Result',
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
        if (null !== $this->responseSuccess) {
            $res['ResponseSuccess'] = $this->responseSuccess;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCustomMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResponseSuccess'])) {
            $model->responseSuccess = $map['ResponseSuccess'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        return $model;
    }
}
