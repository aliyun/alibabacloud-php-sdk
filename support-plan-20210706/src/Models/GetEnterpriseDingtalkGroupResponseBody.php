<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\SDK\Supportplan\V20210706\Models\GetEnterpriseDingtalkGroupResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetEnterpriseDingtalkGroupResponseBody extends Model
{
    /**
     * @description 接口请求的唯一ID, 每次调用requestID唯一
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 调用接口返回是否成功, true代表调用正常
     *
     * @var bool
     */
    public $success;

    /**
     * @description 错误信息, 当success=false的时候, 可以取到message
     *
     * @var string
     */
    public $message;

    /**
     * @var data
     */
    public $data;

    /**
     * @description 接口请求结果返回码
     *
     * @var string
     */
    public $code;
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'message'   => 'Message',
        'data'      => 'Data',
        'code'      => 'Code',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEnterpriseDingtalkGroupResponseBody
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
