<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DisableApplicationScalingRuleResponseBody extends Model
{
    /**
     * @description The HTTP status code. Valid values:
     *
     *   **2xx**: The request was successful.
     *   **3xx**: The request was redirected.
     *   **4xx**: The request failed.
     *   **5xx**: A server error occurred.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The error codes. Valid values:
     *
     *   If the request was successful, **ErrorCode** is not returned.
     *   If the request failed, **ErrorCode** is returned. For more information, see **Error codes** in this topic.
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The returned message. Valid values:
     *
     *   If the request was successful, **success** is returned.
     *   If the request failed, an error code is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the trace. The ID is used to query the details of a request.
     *
     * @example 91F93257-7A4A-4BD3-9A7E-2F6EAE6D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the auto scaling policy was disabled. Valid values:
     *
     *   **true**: The auto scaling policy was disabled.
     *   **false**: The auto scaling policy failed to be disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 0a98a02315955564772843261e****
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'code' => 'Code',
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
     * @return DisableApplicationScalingRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
