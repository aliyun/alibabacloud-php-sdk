<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class AddHotlineNumberResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 接口调用是否成功
     *
     * @var bool
     */
    public $success;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $code;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $message;

    /**
     * @description http状态码
     *
     * @var int
     */
    public $httpStatusCode;
    protected $_name = [
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'code'           => 'Code',
        'message'        => 'Message',
        'httpStatusCode' => 'HttpStatusCode',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddHotlineNumberResponseBody
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        return $model;
    }
}
