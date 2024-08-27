<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthConnectBlackResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryCustomAuthConnectBlackResponseBody extends Model
{
    /**
     * @description The HTTP status code. The status code 200 indicates that the request is successful. Other status codes indicate that the request failed. For a list of error codes, see Error codes.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned data.
     *
     * @var data
     */
    public $data;

    /**
     * @description The returned message.
     *
     * @example operation success.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 020F6A43-19E6-4B6E-B846-44EB31DF****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values: true and false.
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
     * @return QueryCustomAuthConnectBlackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
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
