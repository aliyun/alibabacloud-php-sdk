<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\GetTraceConfigResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetTraceConfigResponseBody extends Model
{
    /**
     * @description Response Code
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description Response Data
     *
     * @var data
     */
    public $data;

    /**
     * @description Error Message
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Request ID
     *
     * @example 2F46B9E7-67EF-5C8A-BA52-D38D5B32AF2C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Boolean	Request Result, with the following values:
     * true: Request succeeded.
     * false: Request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'message' => 'message',
        'requestId' => 'requestId',
        'success' => 'success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTraceConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
