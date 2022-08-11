<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class InvokeFunctionHeaders extends Model
{
    public $commonHeaders;

    /**
     * @var string
     */
    public $xFcAccountId;

    /**
     * @var string
     */
    public $xFcDate;

    /**
     * @var string
     */
    public $xFcInvocationType;

    /**
     * @var string
     */
    public $xFcLogType;

    /**
     * @var string
     */
    public $xFcStatefulAsyncInvocationId;

    /**
     * @var string
     */
    public $xFcTraceId;
    protected $_name = [
        'xFcAccountId'                 => 'X-Fc-Account-Id',
        'xFcDate'                      => 'X-Fc-Date',
        'xFcInvocationType'            => 'X-Fc-Invocation-Type',
        'xFcLogType'                   => 'X-Fc-Log-Type',
        'xFcStatefulAsyncInvocationId' => 'X-Fc-Stateful-Async-Invocation-Id',
        'xFcTraceId'                   => 'X-Fc-Trace-Id',
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
        if (isset($map['X-Fc-Stateful-Async-Invocation-Id'])) {
            $model->xFcStatefulAsyncInvocationId = $map['X-Fc-Stateful-Async-Invocation-Id'];
        }
        if (isset($map['X-Fc-Trace-Id'])) {
            $model->xFcTraceId = $map['X-Fc-Trace-Id'];
        }

        return $model;
    }
}
