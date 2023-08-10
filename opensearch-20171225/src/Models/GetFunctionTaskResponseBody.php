<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionTaskResponseBody\result;
use AlibabaCloud\Tea\Model;

class GetFunctionTaskResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example Task.NotExist
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
     * @example 123
     *
     * @var int
     */
    public $latency;

    /**
     * @description The error message.
     *
     * @example operation success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example A4D487A9-A456-5AA5-A9C6-B7BF2889CF74
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result of the request.
     *
     * @var result
     */
    public $result;

    /**
     * @description The status of the request.
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
        'result'    => 'Result',
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
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFunctionTaskResponseBody
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
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
