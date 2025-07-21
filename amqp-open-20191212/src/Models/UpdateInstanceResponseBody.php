<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceResponseBody extends Model
{
    /**
     * @description The response code. The status code 200 indicates that the request was successful.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned data, which includes orderId and instanceId. Sample returned data:
     *
     * ```json
     * "Data": {
     * "instanceId": "amqp-cn-xxxxx",
     * "orderId": 22222
     * }
     * ```
     *
     * @example {“instanceId”: “amqp-cn-jtexxxxx”, “orderId”: 2222222}
     *
     * @var mixed
     */
    public $data;

    /**
     * @description The returned message.
     *
     * @example InstanceNotExist
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 628705FD-03EE-4ABE-BB21-E1672960***
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The response code.
     *
     * @example 200
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'statusCode' => 'StatusCode',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
