<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPagedInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $businessTime;

    /**
     * @var int
     */
    public $checkStatus;

    /**
     * @var int
     */
    public $dagId;

    /**
     * @var string
     */
    public $delete;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $historyDagId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lastRunningContext;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $taskType;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $triggerType;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'businessTime' => 'BusinessTime',
        'checkStatus' => 'CheckStatus',
        'dagId' => 'DagId',
        'delete' => 'Delete',
        'endTime' => 'EndTime',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'historyDagId' => 'HistoryDagId',
        'id' => 'Id',
        'lastRunningContext' => 'LastRunningContext',
        'msg' => 'Msg',
        'status' => 'Status',
        'taskType' => 'TaskType',
        'tenantId' => 'TenantId',
        'triggerType' => 'TriggerType',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
