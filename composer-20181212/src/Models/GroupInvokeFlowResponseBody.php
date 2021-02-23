<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GroupInvokeFlowResponseBody extends Model
{
    /**
     * @description 当前批次
     *
     * @var int
     */
    public $currentCount;

    /**
     * @description 执行 ID
     *
     * @var string
     */
    public $groupInvocationId;

    /**
     * @description 请求 ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 调用是否成功
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'currentCount'      => 'CurrentCount',
        'groupInvocationId' => 'GroupInvocationId',
        'requestId'         => 'RequestId',
        'status'            => 'Status',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentCount) {
            $res['CurrentCount'] = $this->currentCount;
        }
        if (null !== $this->groupInvocationId) {
            $res['GroupInvocationId'] = $this->groupInvocationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GroupInvokeFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentCount'])) {
            $model->currentCount = $map['CurrentCount'];
        }
        if (isset($map['GroupInvocationId'])) {
            $model->groupInvocationId = $map['GroupInvocationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
