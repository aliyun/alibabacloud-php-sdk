<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetUserConfigResponseBody extends Model
{
    /**
     * @description 用户账号金额是否充足
     *
     * @var bool
     */
    public $accountSufficient;

    /**
     * @description 状态码
     *
     * @var string
     */
    public $code;

    /**
     * @description http状态码
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description 说明
     *
     * @var string
     */
    public $message;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 成功标志
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'accountSufficient' => 'AccountSufficient',
        'code'              => 'Code',
        'httpStatusCode'    => 'HttpStatusCode',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountSufficient) {
            $res['AccountSufficient'] = $this->accountSufficient;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
     * @return GetUserConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountSufficient'])) {
            $model->accountSufficient = $map['AccountSufficient'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
