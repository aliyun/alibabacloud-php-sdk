<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOnlineServiceVolumeResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetOnlineServiceVolumeResponseBody extends Model
{
    /**
     * @description 错误描述
     *
     * @var string
     */
    public $message;

    /**
     * @description 错误编码
     *
     * @var string
     */
    public $code;

    /**
     * @description 调用接口是否成功
     *
     * @var string
     */
    public $success;

    /**
     * @description data
     *
     * @var data
     */
    public $data;

    /**
     * @description 请求ID，用于跟踪错误原因
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'message'   => 'Message',
        'code'      => 'Code',
        'success'   => 'Success',
        'data'      => 'Data',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOnlineServiceVolumeResponseBody
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
