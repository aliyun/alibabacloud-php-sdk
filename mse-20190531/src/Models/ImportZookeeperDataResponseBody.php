<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ImportZookeeperDataResponseBody extends Model
{
    /**
     * @description The details of the data.
     *
     * @example null
     *
     * @var mixed
     */
    public $data;

    /**
     * @description The error code returned if the request failed.
     *
     * @example mse-100-000
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The HTTP status code returned.
     *
     * @example 202
     *
     * @var string
     */
    public $httpCode;

    /**
     * @description The message returned.
     *
     * @example The request was successfully processed.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 52BA6DA6-A702-4362-A32F-DFF79655****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   `true`: The request was successful.
     *   `false`: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'Data',
        'errorCode' => 'ErrorCode',
        'httpCode'  => 'HttpCode',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
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
     * @return ImportZookeeperDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
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
