<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentBasisStatusResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetAgentBasisStatusResponseBody extends Model
{
    /**
     * @description 请求ID，用于跟踪错误原因
     *
     * @var string
     */
    public $requestId;

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
    protected $_name = [
        'requestId' => 'RequestId',
        'message'   => 'Message',
        'code'      => 'Code',
        'success'   => 'Success',
        'data'      => 'Data',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentBasisStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
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

        return $model;
    }
}
