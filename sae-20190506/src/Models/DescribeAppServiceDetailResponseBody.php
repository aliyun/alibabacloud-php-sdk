<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeAppServiceDetailResponseBody extends Model
{
    /**
     * @description The HTTP status code. Valid values:
     *
     * - **2xx**: indicates that the call was successful.
     * - **3xx**: indicates that the call was redirected.
     * - **4xx**: indicates that the call failed.
     * - **5xx**: indicates that a server error occurred.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned data.
     *
     * @var data
     */
    public $data;

    /**
     * @description The returned error code. Valid values:
     *
     * - If the call is successful, the **ErrorCode** parameter is not returned.
     * - If the call fails, the **ErrorCode** parameter is returned. For more information, see the "**Error codes**" section of this topic.
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
     * @example B2C7874F-F109-5B34-8618-2C10BBA2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the meta data was obtained. Valid values:
     *
     *   **true**: The metadata was obtained.
     *   **false**: The metadata failed to be obtained.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the trace. The ID is used to query the details of a request.
     *
     * @example 0b16399316402420740034918e****
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
     * @return DescribeAppServiceDetailResponseBody
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
