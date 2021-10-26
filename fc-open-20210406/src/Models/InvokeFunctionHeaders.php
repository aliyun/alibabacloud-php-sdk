<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class InvokeFunctionHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description 用户 uid
     *
     * @var string
     */
    public $xFcAccountId;

    /**
     * @description 调用方式:Sync或者Async，默认值：Sync
     *
     * @var string
     */
    public $xFcInvocationType;

    /**
     * @description 请求返回日志类型, Tail 为返回函数日志最后 4KB 数据，None 或空值则返回不带有日志，默认为 None
     *
     * @var string
     */
    public $xFcLogType;

    /**
     * @var string
     */
    public $xFcStatefulAsyncInvocationId;
    protected $_name = [
        'xFcAccountId'                 => 'X-Fc-Account-Id',
        'xFcInvocationType'            => 'x-fc-invocation-type',
        'xFcLogType'                   => 'x-fc-log-type',
        'xFcStatefulAsyncInvocationId' => 'x-fc-stateful-async-invocation-id',
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
        if (null !== $this->xFcInvocationType) {
            $res['x-fc-invocation-type'] = $this->xFcInvocationType;
        }
        if (null !== $this->xFcLogType) {
            $res['x-fc-log-type'] = $this->xFcLogType;
        }
        if (null !== $this->xFcStatefulAsyncInvocationId) {
            $res['x-fc-stateful-async-invocation-id'] = $this->xFcStatefulAsyncInvocationId;
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
        if (isset($map['x-fc-invocation-type'])) {
            $model->xFcInvocationType = $map['x-fc-invocation-type'];
        }
        if (isset($map['x-fc-log-type'])) {
            $model->xFcLogType = $map['x-fc-log-type'];
        }
        if (isset($map['x-fc-stateful-async-invocation-id'])) {
            $model->xFcStatefulAsyncInvocationId = $map['x-fc-stateful-async-invocation-id'];
        }

        return $model;
    }
}
