<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetDeviceIdByIdentityResponseBody\result;
use AlibabaCloud\Tea\Model;

class GetDeviceIdByIdentityResponseBody extends Model
{
    /**
     * @description 返回的错误信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 返回的错误码
     *
     * @var int
     */
    public $code;

    /**
     * @description 返回result
     *
     * @var result
     */
    public $result;

    /**
     * @description 请求id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'message'   => 'Message',
        'code'      => 'Code',
        'result'    => 'Result',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceIdByIdentityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
