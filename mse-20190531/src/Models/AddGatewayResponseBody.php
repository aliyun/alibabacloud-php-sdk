<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayResponseBody\data;
use AlibabaCloud\Tea\Model;

class AddGatewayResponseBody extends Model
{
    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   `true`: The request was successful.
     *   `false`: The request failed.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The unique ID of the gateway.
     *
     * @var data
     */
    public $data;

    /**
     * @description The message returned.
     *
     *   If the request is successful, a success message is returned.
     *   If the request fails, an error message is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The request is successfully processed.
     *
     * @example The return value.
     *
     * @var string
     */
    public $message;

    /**
     * @description The HTTP status code returned.
     *
     * @example 2F46B9E7-67EF-5C8A-BA52-D38D5B32AF2C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned data.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'data'           => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
     * @return AddGatewayResponseBody
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
