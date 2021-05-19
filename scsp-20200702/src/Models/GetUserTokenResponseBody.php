<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\SDK\Scsp\V20200702\Models\GetUserTokenResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetUserTokenResponseBody extends Model
{
    /**
     * @description 错误信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 鹰眼id
     *
     * @var string
     */
    public $requestId;

    /**
     * @var data
     */
    public $data;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $code;

    /**
     * @description 是否调用成功
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'data'      => 'Data',
        'code'      => 'Code',
        'success'   => 'Success',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
