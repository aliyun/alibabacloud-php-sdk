<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeApplicationConfigResponseBody extends Model
{
    /**
     * @description The HTTP status code. Valid values:
     *
     *   **2xx**: The call was successful.
     *   **3xx**: The call was redirected.
     *   **4xx**: The call failed.
     *   **5xx**: A server error occurred.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The information about the application.
     *
     * @var data
     */
    public $data;

    /**
     * @description The returned error code. Valid values:
     *
     *   If the call is successful, the **ErrorCode** parameter is not returned.
     *   If the call fails, the **ErrorCode** parameter is returned. For more information, see the "**Error codes**" section of this topic.
     *
     * @example Null
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The returned information.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 01CF26C7-00A3-4AA6-BA76-7E95F2A3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the configurations of an application were obtained. Valid values:
     *
     *   **true**: The configurations were obtained.
     *   **false**: The configurations failed to be obtained.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The trace ID that is used to query the details of the request.
     *
     * @example ac1a0b2215622246421415014e****
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
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
     * @return DescribeApplicationConfigResponseBody
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
