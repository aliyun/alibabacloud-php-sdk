<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceResponseBody\DAGInstanceList;

use AlibabaCloud\Tea\Model;

class DAGInstance extends Model
{
    /**
     * @description The business time of the task flow. The time is displayed in the yyyy-MM-DD HH:mm:ss format.
     *
     * @example 2021-11-10 14:37:26
     *
     * @var string
     */
    public $businessTime;

    /**
     * @description The ID of the task flow.
     *
     * @example 7***
     *
     * @var string
     */
    public $dagId;

    /**
     * @description The name of the task flow.
     *
     * @example Spark_SQL_test
     *
     * @var string
     */
    public $dagName;

    /**
     * @example []
     *
     * @var string
     */
    public $dagVersion;

    /**
     * @description The time when the execution of the task flow was complete. The time is displayed in the yyyy-MM-DD HH:mm:ss format.
     *
     * @example 2021-11-11 14:38:57
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the previously published version of the task flow.
     *
     * @example 2****
     *
     * @var int
     */
    public $historyDagId;

    /**
     * @description The ID of the execution record.
     *
     * @example 9234
     *
     * @var int
     */
    public $id;

    /**
     * @description The description of the task.
     *
     * @example test
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the task flow owner.
     *
     * @example test_name
     *
     * @var string
     */
    public $ownerName;

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
     * @example 4
     *
     * @var int
     */
    public $status;

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
     * @var string
     */
    public $startTime;
    protected $_name = [
        'businessTime' => 'BusinessTime',
        'dagId'        => 'DagId',
        'dagName'      => 'DagName',
        'dagVersion'   => 'DagVersion',
        'endTime'      => 'EndTime',
        'historyDagId' => 'HistoryDagId',
        'id'           => 'Id',
        'message'      => 'Message',
        'ownerName'    => 'OwnerName',
        'status'       => 'Status',
        'triggerType'  => 'TriggerType',
        'startTime'    => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessTime) {
            $res['BusinessTime'] = $this->businessTime;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->dagName) {
            $res['DagName'] = $this->dagName;
        }
        if (null !== $this->dagVersion) {
            $res['DagVersion'] = $this->dagVersion;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->historyDagId) {
            $res['HistoryDagId'] = $this->historyDagId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DAGInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessTime'])) {
            $model->businessTime = $map['BusinessTime'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['DagName'])) {
            $model->dagName = $map['DagName'];
        }
        if (isset($map['DagVersion'])) {
            $model->dagVersion = $map['DagVersion'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HistoryDagId'])) {
            $model->historyDagId = $map['HistoryDagId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
