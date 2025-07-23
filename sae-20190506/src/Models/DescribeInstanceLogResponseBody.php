<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceLogResponseBody extends Model
{
    /**
     * @description The interface state or POP error code. Valid values:
     *
     *   **2xx**: indicates that the request was successful.
     *   **3xx**: indicates that the request was redirected.
     *   **4xx**: indicates that the request was invalid.
     *   **5xx**: indicates that a server error occurred.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The information of instance logs.
     *
     * @example hello\\nsae\\n
     *
     * @var string
     */
    public $data;

    /**
     * @description Error code.
     *
     * - No error code returned if the request succeeded.
     *
     * - Error code returned if the request failed. Refer to error code list below for details.
     *
     * @example Null
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The returned message.
     *
     * success is returned when the request succeeds.
     * An error code is returned when the request fails.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Request ID.
     *
     * @example 91F93257-7A4A-4BD3-9A7E-2F6EAE6D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the logs of the instance is obtained.
     *
     * - true: logs obtained.
     *
     * - false: failed to obtain logs.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description Trace ID.
     *
     * @example 0a98a02315955564772843261e****
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'errorCode' => 'ErrorCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'traceId' => 'TraceId',
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
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
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
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceLogResponseBody
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
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
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
