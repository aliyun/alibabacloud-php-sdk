<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models;

use AlibabaCloud\SDK\Mts\V20210728\Models\SubmitTraceAbResponseBody\data;
use AlibabaCloud\Tea\Model;

class SubmitTraceAbResponseBody extends Model
{
    /**
     * @description 返回数据
     *
     * @var data
     */
    public $data;

    /**
     * @description 返回信息
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
     * @description 状态码
     *
     * @var int
     */
    public $statusCode;
    protected $_name = [
        'data'       => 'Data',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTraceAbResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
