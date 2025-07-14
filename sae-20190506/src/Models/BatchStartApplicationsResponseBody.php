<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\BatchStartApplicationsResponseBody\data;
use AlibabaCloud\Tea\Model;

class BatchStartApplicationsResponseBody extends Model
{
    /**
     * @description The HTTP status code. Take note of the following rules:
     *
     * - **2xx**: The call was successful.
     * - **3xx**: The call was redirected.
     * - **4xx**: The call failed.
     * - **5xx**: A server error occurred.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The error code.
     *
     *   If the request is successful, this parameter is not returned.****
     *   This parameter is returned only if the request failed.**** For more information, see **Error codes** in this topic.
     *
     * @var data
     */
    public $data;

    /**
     * @description The error code returned if the request failed. Take note of the following rules:
     *
     * - The ErrorCode parameter is not returned if the request succeeds.
     * - If the call fails, the ErrorCode parameter is returned. For more information, see the "Error codes" section of this topic.
     *
     * @example NULL
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The returned data.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the trace. It is used to query the details of a request.
     *
     * @example 91F93257-7A4A-4BD3-9A7E-2F6EAE6D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the application deployment is successful. Take note of the following rules:
     *
     * - **true**
     * - **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the change order.
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
     * @return BatchStartApplicationsResponseBody
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
