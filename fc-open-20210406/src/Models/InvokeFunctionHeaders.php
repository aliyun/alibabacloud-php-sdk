<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class InvokeFunctionHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description The ID of your Alibaba Cloud account.
     *
     * @example 188077086902****
     *
     * @var string
     */
    public $xFcAccountId;

    /**
     * @description The time when the function is invoked. The format is **EEE,d MMM yyyy HH:mm:ss GMT**.
     *
     * @example Wed, 11 May 2022 09:00:00 GMT
     *
     * @var string
     */
    public $xFcDate;

    /**
     * @description The invocation method. Valid values:
     *
     *   **Sync**: synchronous invocations
     *   **Async**: asynchronous invocations
     *
     * Default value: Sync
     * @example Sync
     *
     * @var string
     */
    public $xFcInvocationType;

    /**
     * @description The method used to return logs. Valid values:
     *
     *   **Tail**: returns the last 4 KB of logs that are generated for the current request.
     *   **None**: No logs are returned for the current request. Default value: None.
     *
     * @example None
     *
     * @var string
     */
    public $xFcLogType;

    /**
     * @description Specifies whether to enable the asynchronous task mode for requests. Default value: false. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >
     *
     *   This parameter takes effect only for asynchronous invocations. It does not take effect for synchronous invocations.
     *
     * @example true
     *
     * @var string
     */
    public $xFcStatefulAsyncInvocationEnable;

    /**
     * @description The ID of the asynchronous task. You must enable the asynchronous task feature in advance.
     *
     * > When you use an SDK to invoke a function, we recommend that you specify a business-related ID to facilitate subsequent operations. For example, you can use the video name as the invocation ID for a video-processing function. This way, you can use the ID to check whether the video is processed or terminate the processing of the video. The ID must start with a letter or an underscore (\_) and can contain letters, digits, underscores (\_), and hyphens (-). The ID can be up to 128 characters in length. If you do not specify the ID of the asynchronous invocation, Function Compute automatically generates an ID.
     * @example test-invoke-id
     *
     * @var string
     */
    public $xFcStatefulAsyncInvocationId;

    /**
     * @description The trace ID of the request for Function Compute API. The value is the same as that of the **requestId** parameter in the response.
     *
     * @example test-trace-id
     *
     * @var string
     */
    public $xFcTraceId;
    protected $_name = [
        'xFcAccountId'                     => 'X-Fc-Account-Id',
        'xFcDate'                          => 'X-Fc-Date',
        'xFcInvocationType'                => 'X-Fc-Invocation-Type',
        'xFcLogType'                       => 'X-Fc-Log-Type',
        'xFcStatefulAsyncInvocationEnable' => 'X-Fc-Stateful-Async-Invocation-Enable',
        'xFcStatefulAsyncInvocationId'     => 'X-Fc-Stateful-Async-Invocation-Id',
        'xFcTraceId'                       => 'X-Fc-Trace-Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xFcAccountId) {
            $res['X-Fc-Account-Id'] = $this->xFcAccountId;
        }
        if (null !== $this->xFcDate) {
            $res['X-Fc-Date'] = $this->xFcDate;
        }
        if (null !== $this->xFcInvocationType) {
            $res['X-Fc-Invocation-Type'] = $this->xFcInvocationType;
        }
        if (null !== $this->xFcLogType) {
            $res['X-Fc-Log-Type'] = $this->xFcLogType;
        }
        if (null !== $this->xFcStatefulAsyncInvocationEnable) {
            $res['X-Fc-Stateful-Async-Invocation-Enable'] = $this->xFcStatefulAsyncInvocationEnable;
        }
        if (null !== $this->xFcStatefulAsyncInvocationId) {
            $res['X-Fc-Stateful-Async-Invocation-Id'] = $this->xFcStatefulAsyncInvocationId;
        }
        if (null !== $this->xFcTraceId) {
            $res['X-Fc-Trace-Id'] = $this->xFcTraceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeFunctionHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['X-Fc-Account-Id'])) {
            $model->xFcAccountId = $map['X-Fc-Account-Id'];
        }
        if (isset($map['X-Fc-Date'])) {
            $model->xFcDate = $map['X-Fc-Date'];
        }
        if (isset($map['X-Fc-Invocation-Type'])) {
            $model->xFcInvocationType = $map['X-Fc-Invocation-Type'];
        }
        if (isset($map['X-Fc-Log-Type'])) {
            $model->xFcLogType = $map['X-Fc-Log-Type'];
        }
        if (isset($map['X-Fc-Stateful-Async-Invocation-Enable'])) {
            $model->xFcStatefulAsyncInvocationEnable = $map['X-Fc-Stateful-Async-Invocation-Enable'];
        }
        if (isset($map['X-Fc-Stateful-Async-Invocation-Id'])) {
            $model->xFcStatefulAsyncInvocationId = $map['X-Fc-Stateful-Async-Invocation-Id'];
        }
        if (isset($map['X-Fc-Trace-Id'])) {
            $model->xFcTraceId = $map['X-Fc-Trace-Id'];
        }

        return $model;
    }
}
