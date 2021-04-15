<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SetAppCallbackUrlResponseBody extends Model
{
    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 请求结果
     *
     * @var bool
     */
    public $responseSuccess;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description 返回结果
     *
     * @var bool
     */
    public $result;
    protected $_name = [
        'requestId'       => 'RequestId',
        'responseSuccess' => 'ResponseSuccess',
        'errorCode'       => 'ErrorCode',
        'errorMsg'        => 'ErrorMsg',
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
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAppCallbackUrlResponseBody
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
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
