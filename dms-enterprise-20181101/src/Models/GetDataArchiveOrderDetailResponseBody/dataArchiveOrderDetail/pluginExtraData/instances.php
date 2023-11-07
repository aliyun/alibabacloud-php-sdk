<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description The business time of the task flow. The time is in the yyyy-MM-DD HH:mm:ss format.
     *
     * @example 2023-05-14 16:00:57
     *
     * @var string
     */
    public $businessTime;

    /**
     * @description The ID of the task. You can call the [ListTaskFlow](~~424565~~) or [ListLhTaskFlowAndScenario](~~426672~~) operation to query the task flow ID.
     *
     * @example 37***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The end time of the task flow. The time is in the yyyy-MM-DD HH:mm:ss format.
     *
     * @example 2022-06-04 15:14:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time when the task flow was created.
     *
     * @example 2023-05-14 16:00:57
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the task flow was last modified.
     *
     * @example 2023-05-14 16:00:57
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the historical task flow.
     *
     * @example 32***
     *
     * @var int
     */
    public $historyDagId;

    /**
     * @description The instance ID of the running task flow.
     *
     * @example 24***
     *
     * @var int
     */
    public $id;

    /**
     * @description The running scenario of the last task flow.
     *
     * @example {
     * "nodes": [
     * 48**
     * }
     * @var string
     */
    public $lastRunningContext;

    /**
     * @description The running details of the task.
     *
     * @example 2023-05-15 16:37:48[GMT+08:00] INFO - Resource Control is active!\n2023-05-15 16:37:48[GMT+08:00] INFO - Starting job j_4834 at Mon May 15 16:37:48 CST 2023
     *
     * @var string
     */
    public $msg;

    /**
     * @description The status of the task. Valid values:
     *
     *   **0**: waiting for execution.
     *   **1**: running.
     *   **2**: suspended.
     *   **3**: failed.
     *   **4**: successful.
     *   **5**: complete.
     *
     * @example 4
     *
     * @var int
     */
    public $status;

    /**
     * @description The tenant ID.
     *
     * @example 5***
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The mode in which the task flow was triggered. Valid values:
     *
     *   **0**: The task flow was triggered based on a schedule.
     *   **1**: The task flow was manually triggered.
     *
     * @example 1
     *
     * @var int
     */
    public $triggerType;

    /**
     * @description The version number.
     *
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'businessTime'       => 'BusinessTime',
        'dagId'              => 'DagId',
        'endTime'            => 'EndTime',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'historyDagId'       => 'HistoryDagId',
        'id'                 => 'Id',
        'lastRunningContext' => 'LastRunningContext',
        'msg'                => 'Msg',
        'status'             => 'Status',
        'tenantId'           => 'TenantId',
        'triggerType'        => 'TriggerType',
        'version'            => 'Version',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->historyDagId) {
            $res['HistoryDagId'] = $this->historyDagId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lastRunningContext) {
            $res['LastRunningContext'] = $this->lastRunningContext;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HistoryDagId'])) {
            $model->historyDagId = $map['HistoryDagId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LastRunningContext'])) {
            $model->lastRunningContext = $map['LastRunningContext'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
