<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models;

use AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomListResponseBody\result;
use AlibabaCloud\Tea\Model;

class GetRoomListResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 业务结果
     *
     * @var result
     */
    public $result;

    /**
     * @description 请求是否成功
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
    protected $_name = [
        'requestId'       => 'RequestId',
        'result'          => 'Result',
        'responseSuccess' => 'ResponseSuccess',
        'errorCode'       => 'ErrorCode',
        'errorMsg'        => 'ErrorMsg',
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
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRoomListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
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

        return $model;
    }
}
