<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigMapResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeConfigMapResponseBody extends Model
{
    /**
     * @description Indicates whether the details of the ConfigMap instance were obtained. Valid values:
     *
     *   **true**: The details were obtained.
     *   **false**: The details failed to be obtained.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the instance was last modified.
     *
     * @var data
     */
    public $data;

    /**
     * @description The HTTP status code. Valid values:
     *
     *   **2xx**: indicates that the call was successful.
     *   **3xx**: indicates that the call was redirected.
     *   **4xx**: indicates that the call failed.
     *   **5xx**: indicates that a server error occurred.
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the trace. The ID is used to query the details of a request.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The returned information. Valid values:
     *
     *   If the call is successful, **success** is returned.
     *   If the call fails, an error code is returned.
     *
     * @example 91F93257-7A4A-4BD3-9A7E-2F6EAE6D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The returned result.
     *
     * @example 0a98a02315955564772843261e****
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'errorCode' => 'ErrorCode',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'traceId'   => 'TraceId',
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
     * @return DescribeConfigMapResponseBody
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
