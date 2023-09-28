<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPagedInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @example 2023-05-14 16:00:57
     *
     * @var string
     */
    public $businessTime;

    /**
     * @example 3
     *
     * @var int
     */
    public $checkStatus;

    /**
     * @example 33753
     *
     * @var int
     */
    public $dagId;

    /**
     * @example false
     *
     * @var string
     */
    public $delete;

    /**
     * @example 2023-04-23 10:23:20
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2023-03-28 10:50:45
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-04-18 15:28:16
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 6851
     *
     * @var int
     */
    public $historyDagId;

    /**
     * @example 24271
     *
     * @var int
     */
    public $id;

    /**
     * @example {”nodes":[11694,11695]"}
     *
     * @var string
     */
    public $lastRunningContext;

    /**
     * @var string
     */
    public $msg;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskType;

    /**
     * @example 3406
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example 1
     *
     * @var int
     */
    public $triggerType;

    /**
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'businessTime'       => 'BusinessTime',
        'checkStatus'        => 'CheckStatus',
        'dagId'              => 'DagId',
        'delete'             => 'Delete',
        'endTime'            => 'EndTime',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'historyDagId'       => 'HistoryDagId',
        'id'                 => 'Id',
        'lastRunningContext' => 'LastRunningContext',
        'msg'                => 'Msg',
        'status'             => 'Status',
        'taskType'           => 'TaskType',
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
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->delete) {
            $res['Delete'] = $this->delete;
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
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessTime'])) {
            $model->businessTime = $map['BusinessTime'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['Delete'])) {
            $model->delete = $map['Delete'];
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
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
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
