<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\subDistributedJobStatus;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\subDistributedJobStatus\jobProgress\logs;
use AlibabaCloud\Tea\Model;

class jobProgress extends Model
{
    /**
     * @description The time when the subtask was started. The time is displayed in the *yyyy-MM-dd*T*HH:mm:ss*Z format in UTC.
     *
     * @example 2022-03-30T03:36:11.000+00:00
     *
     * @var string
     */
    public $bootTime;

    /**
     * @description Indicates whether the subtask can be ignored if it fails. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $canSkip;

    /**
     * @description The number of the subtasks that are running.
     *
     * @example 0
     *
     * @var string
     */
    public $current;

    /**
     * @description The DDL statements.
     *
     * @example None
     *
     * @var string
     */
    public $ddlSql;

    /**
     * @description The latency of incremental data migration or synchronization.
     *
     * @example 0
     *
     * @var int
     */
    public $delaySeconds;

    /**
     * @description The name of the database to which the object in the destination instance belongs.
     *
     * @example databasetest
     *
     * @var string
     */
    public $destSchema;

    /**
     * @description This parameter will be removed in the future.
     *
     * @example None
     *
     * @var int
     */
    public $diffRow;

    /**
     * @description The error details of the subtask failure.
     *
     * @example CHECK__ERROR_SAME_OBJ_DETAIL
     *
     * @var string
     */
    public $errDetail;

    /**
     * @description The error message of the subtask failure.
     *
     * @example ODPS project does not exist odps.`huijin
     *
     * @var string
     */
    public $errMsg;

    /**
     * @description The time when the instance was created. The time is displayed in the *yyyy-MM-dd*T*HH:mm:ss*Z format in UTC.
     *
     * @example 2022-03-31T03:36:11.000+00:00
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The ID of the entry in the metadatabase.
     *
     * @example 3890
     *
     * @var string
     */
    public $id;

    /**
     * @description Indicates whether DTS ignores the subtask and proceeds with the next subtask. Valid values:
     *
     *   **N**: no
     *   **Y**: yes
     *
     * @example N
     *
     * @var string
     */
    public $ignoreFlag;

    /**
     * @description The name of the subtask.
     *
     * @example login_common_time
     *
     * @var string
     */
    public $item;

    /**
     * @description The ID of the subtask.
     *
     * @example l3m1213ye7l****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The operations logs of errors.
     *
     * @var logs[]
     */
    public $logs;

    /**
     * @description The name of the subtask.
     *
     * @example metricRuleTargets-20180308houe
     *
     * @var string
     */
    public $names;

    /**
     * @description The serial number of the subtask.
     *
     * @example 1
     *
     * @var int
     */
    public $orderNum;

    /**
     * @description This parameter will be removed in the future.
     *
     * @example None
     *
     * @var string
     */
    public $parentObj;

    /**
     * @description The method used to fix a precheck failure.
     *
     * @example CHECK__ERROR_SAME_OBJ_REPAIR
     *
     * @var string
     */
    public $repairMethod;

    /**
     * @description Indicates whether the subtask was skipped. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example True
     *
     * @var bool
     */
    public $skip;

    /**
     * @description The name of the database to which the object in the source instance belongs.
     *
     * @example databasetest
     *
     * @var string
     */
    public $sourceSchema;

    /**
     * @description The status of the subtask. Valid values:
     *
     *   **NotStarted**: The subtask is not started.
     *   **Suspending**: The subtask is paused.
     *   **Checking**: The subtask is being checked.
     *   **Migrating**: The subtask is in progress. Data is being migrated.
     *   **Failed**: The subtask failed.
     *   **Catched**: The subtask is in progress. Incremental data is being migrated or synchronized.
     *   **Finished**: The subtask is complete.
     *
     * @example Finished
     *
     * @var string
     */
    public $state;

    /**
     * @description The sub-item progress of the subtask.
     *
     * >  If **\[]** is returned, the subtask has no sub-items.
     * @example []
     *
     * @var string
     */
    public $sub;

    /**
     * @description The names of the objects that are migrated or synchronized.
     *
     * @example order
     *
     * @var string
     */
    public $targetNames;

    /**
     * @description The total number of subtasks.
     *
     * @example 11
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'bootTime'     => 'BootTime',
        'canSkip'      => 'CanSkip',
        'current'      => 'Current',
        'ddlSql'       => 'DdlSql',
        'delaySeconds' => 'DelaySeconds',
        'destSchema'   => 'DestSchema',
        'diffRow'      => 'DiffRow',
        'errDetail'    => 'ErrDetail',
        'errMsg'       => 'ErrMsg',
        'finishTime'   => 'FinishTime',
        'id'           => 'Id',
        'ignoreFlag'   => 'IgnoreFlag',
        'item'         => 'Item',
        'jobId'        => 'JobId',
        'logs'         => 'Logs',
        'names'        => 'Names',
        'orderNum'     => 'OrderNum',
        'parentObj'    => 'ParentObj',
        'repairMethod' => 'RepairMethod',
        'skip'         => 'Skip',
        'sourceSchema' => 'SourceSchema',
        'state'        => 'State',
        'sub'          => 'Sub',
        'targetNames'  => 'TargetNames',
        'total'        => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bootTime) {
            $res['BootTime'] = $this->bootTime;
        }
        if (null !== $this->canSkip) {
            $res['CanSkip'] = $this->canSkip;
        }
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->ddlSql) {
            $res['DdlSql'] = $this->ddlSql;
        }
        if (null !== $this->delaySeconds) {
            $res['DelaySeconds'] = $this->delaySeconds;
        }
        if (null !== $this->destSchema) {
            $res['DestSchema'] = $this->destSchema;
        }
        if (null !== $this->diffRow) {
            $res['DiffRow'] = $this->diffRow;
        }
        if (null !== $this->errDetail) {
            $res['ErrDetail'] = $this->errDetail;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ignoreFlag) {
            $res['IgnoreFlag'] = $this->ignoreFlag;
        }
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->logs) {
            $res['Logs'] = [];
            if (null !== $this->logs && \is_array($this->logs)) {
                $n = 0;
                foreach ($this->logs as $item) {
                    $res['Logs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->orderNum) {
            $res['OrderNum'] = $this->orderNum;
        }
        if (null !== $this->parentObj) {
            $res['ParentObj'] = $this->parentObj;
        }
        if (null !== $this->repairMethod) {
            $res['RepairMethod'] = $this->repairMethod;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }
        if (null !== $this->sourceSchema) {
            $res['SourceSchema'] = $this->sourceSchema;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->sub) {
            $res['Sub'] = $this->sub;
        }
        if (null !== $this->targetNames) {
            $res['TargetNames'] = $this->targetNames;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BootTime'])) {
            $model->bootTime = $map['BootTime'];
        }
        if (isset($map['CanSkip'])) {
            $model->canSkip = $map['CanSkip'];
        }
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['DdlSql'])) {
            $model->ddlSql = $map['DdlSql'];
        }
        if (isset($map['DelaySeconds'])) {
            $model->delaySeconds = $map['DelaySeconds'];
        }
        if (isset($map['DestSchema'])) {
            $model->destSchema = $map['DestSchema'];
        }
        if (isset($map['DiffRow'])) {
            $model->diffRow = $map['DiffRow'];
        }
        if (isset($map['ErrDetail'])) {
            $model->errDetail = $map['ErrDetail'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IgnoreFlag'])) {
            $model->ignoreFlag = $map['IgnoreFlag'];
        }
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n           = 0;
                foreach ($map['Logs'] as $item) {
                    $model->logs[$n++] = null !== $item ? logs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }
        if (isset($map['OrderNum'])) {
            $model->orderNum = $map['OrderNum'];
        }
        if (isset($map['ParentObj'])) {
            $model->parentObj = $map['ParentObj'];
        }
        if (isset($map['RepairMethod'])) {
            $model->repairMethod = $map['RepairMethod'];
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }
        if (isset($map['SourceSchema'])) {
            $model->sourceSchema = $map['SourceSchema'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Sub'])) {
            $model->sub = $map['Sub'];
        }
        if (isset($map['TargetNames'])) {
            $model->targetNames = $map['TargetNames'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
