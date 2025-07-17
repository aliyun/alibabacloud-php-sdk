<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListTaskFlowInstanceRequest extends Model
{
    /**
     * @description The ID of the task flow. You can call the [ListTaskFlow](https://help.aliyun.com/document_detail/424565.html) or [ListLhTaskFlowAndScenario](https://help.aliyun.com/document_detail/426672.html) operation to obtain the ID of the task flow.
     *
     * This parameter is required.
     *
     * @example 7***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description The number of entries to return on each page.
     *
     * This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query the execution records of the task flow. Specify the time in the yyyy-MM-DD format.
     *
     * @example 2022-01-07
     *
     * @var string
     */
    public $startTimeBegin;

    /**
     * @description The end of the time range to query the execution records of the task flow. Specify the time in the yyyy-MM-DD format.
     *
     * @example 2022-04-08
     *
     * @var string
     */
    public $startTimeEnd;

    /**
     * @description The running status of the task node. Valid values:
     *
     * - **0**: Waiting for scheduling
     *
     * - **1**: Running
     *
     * - **2**: Suspend
     *
     * - **3**: Failed to run
     *
     * - **4**: Run successfully
     *
     * - **5**: Completed
     *
     * @example 3
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) or [ListUserTenants](https://help.aliyun.com/document_detail/198074.html) operation to obtain the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The mode in which the task flow is triggered. Valid values:
     *
     *   **0**: The task flow is automatically triggered based on periodic scheduling.
     *   **1**: The task flow is manually triggered.
     *
     * @example 1
     *
     * @var int
     */
    public $triggerType;

    /**
     * @description Adjust filter conditions:
     *
     * - true: StartTimeBegin and StartTimeEnd are the time range for filtering services.
     *
     * - false: StartTimeBegin and StartTimeEnd are the time range for the task to run.
     *
     * @example true
     *
     * @var bool
     */
    public $useBizDate;
    protected $_name = [
        'dagId' => 'DagId',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
        'startTimeBegin' => 'StartTimeBegin',
        'startTimeEnd' => 'StartTimeEnd',
        'status' => 'Status',
        'tid' => 'Tid',
        'triggerType' => 'TriggerType',
        'useBizDate' => 'UseBizDate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTimeBegin) {
            $res['StartTimeBegin'] = $this->startTimeBegin;
        }
        if (null !== $this->startTimeEnd) {
            $res['StartTimeEnd'] = $this->startTimeEnd;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->useBizDate) {
            $res['UseBizDate'] = $this->useBizDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskFlowInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTimeBegin'])) {
            $model->startTimeBegin = $map['StartTimeBegin'];
        }
        if (isset($map['StartTimeEnd'])) {
            $model->startTimeEnd = $map['StartTimeEnd'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['UseBizDate'])) {
            $model->useBizDate = $map['UseBizDate'];
        }

        return $model;
    }
}
