<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceResponseBody\DAGInstanceList;
use AlibabaCloud\Tea\Model;

class ListTaskFlowInstanceResponseBody extends Model
{
    /**
     * @description The status of the task flow. Valid values:
     *
     *   **0**: The task flow is waiting to be scheduled.
     *   **1**: The task flow is being executed.
     *   **2**: The task flow is paused.
     *   **3**: The task flow failed.
     *   **4**: The task flow is executed.
     *   **5**: The task flow is complete.
     *
     * @var DAGInstanceList
     */
    public $DAGInstanceList;

    /**
     * @description The beginning of the time range to query the execution records of the task flow. Specify the time in the yyyy-MM-DD format.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to obtain the tenant ID.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The mode in which the task flow is triggered. Valid values:
     *
     *   **0**: The task flow is automatically triggered based on periodic scheduling.
     *   **1**: The task flow is manually triggered.
     *
     * @example 8CFF2295-8249-5287-B888-DBD4F0D76CB0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the task flow.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DAGInstanceList' => 'DAGInstanceList',
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DAGInstanceList) {
            $res['DAGInstanceList'] = null !== $this->DAGInstanceList ? $this->DAGInstanceList->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskFlowInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DAGInstanceList'])) {
            $model->DAGInstanceList = DAGInstanceList::fromMap($map['DAGInstanceList']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
