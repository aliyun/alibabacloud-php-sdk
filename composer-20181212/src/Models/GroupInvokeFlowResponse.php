<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GroupInvokeFlowResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $groupInvocationId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $currentCount;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'requestId'         => 'RequestId',
        'groupInvocationId' => 'GroupInvocationId',
        'success'           => 'Success',
        'currentCount'      => 'CurrentCount',
        'status'            => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groupInvocationId', $this->groupInvocationId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('currentCount', $this->currentCount, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->groupInvocationId) {
            $res['GroupInvocationId'] = $this->groupInvocationId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->currentCount) {
            $res['CurrentCount'] = $this->currentCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GroupInvokeFlowResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupInvocationId'])) {
            $model->groupInvocationId = $map['GroupInvocationId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['CurrentCount'])) {
            $model->currentCount = $map['CurrentCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
