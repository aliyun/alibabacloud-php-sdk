<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionResourceResponseBody\result;
use AlibabaCloud\Tea\Model;

class GetFunctionResourceResponseBody extends Model
{
    /**
     * @description The error code returned. If no error occurs, this value is empty.
     *
     * @example Resource.NotExist
     *
     * @var string
     */
    public $code;

    /**
     * @description The HTTP status code returned.
     *
     * @example 200
     *
     * @var int
     */
    public $httpCode;

    /**
     * @description The time consumed for the API request. Unit: milliseconds.
     *
     * @example 123
     *
     * @var float
     */
    public $latency;

    /**
     * @description The error message returned.
     *
     * @example Resource not exist.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example E215C843-0795-5293-AC9A-14FE0723E890
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned results.
     *
     * @var result
     */
    public $result;

    /**
     * @description The HTTP status code. Valid values:
     *
     *   OK
     *   FAIL
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
     * @return GetFunctionResourceResponseBody
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
