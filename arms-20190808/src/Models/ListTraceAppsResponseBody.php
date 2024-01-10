<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListTraceAppsResponseBody\traceApps;
use AlibabaCloud\Tea\Model;

class ListTraceAppsResponseBody extends Model
{
    /**
     * @description The HTTP status code returned for the request. Valid values:
     *
     *   `2XX`: The request is successful.
     *   `3XX`: A redirection message is returned.
     *   `4XX`: The request is invalid.
     *   `5XX`: A server error occurs.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The error message returned if the request parameters are invalid.
     *
     * @example Internal error. Please try again. Contact the DingTalk service account if the issue persists after multiple retries.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 40B10E04-81E8-4643-970D-F1B38F2E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. Valid values:
     *
     *   `true`: The call was successful.
     *   `false`: The call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The queried application monitoring tasks.
     *
     * @var traceApps[]
     */
    public $traceApps;
    protected $_name = [
        'code'      => 'Code',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'traceApps' => 'TraceApps',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->traceApps) {
            $res['TraceApps'] = [];
            if (null !== $this->traceApps && \is_array($this->traceApps)) {
                $n = 0;
                foreach ($this->traceApps as $item) {
                    $res['TraceApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTraceAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['TraceApps'])) {
            if (!empty($map['TraceApps'])) {
                $model->traceApps = [];
                $n                = 0;
                foreach ($map['TraceApps'] as $item) {
                    $model->traceApps[$n++] = null !== $item ? traceApps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
