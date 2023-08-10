<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class UpdateFunctionInstanceResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example "Instance.NotExist"
     *
     * @var string
     */
    public $code;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpCode;

    /**
     * @description The time consumed for the request, in milliseconds.
     *
     * @example 10
     *
     * @var int
     */
    public $latency;

    /**
     * @description The error message.
     *
     * @example "instance not exist."
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example "3A809095-C554-5CF5-8FCE-BE19D4673790"
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the request. Valid values:
     *
     *       OK: The request was successful.
     *       FAIL: The request failed.
     *
     * @example OK
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code'      => 'Code',
        'httpCode'  => 'HttpCode',
        'latency'   => 'Latency',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'status'    => 'Status',
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
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }
        if (null !== $this->latency) {
            $res['Latency'] = $this->latency;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFunctionInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }
        if (isset($map['Latency'])) {
            $model->latency = $map['Latency'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
