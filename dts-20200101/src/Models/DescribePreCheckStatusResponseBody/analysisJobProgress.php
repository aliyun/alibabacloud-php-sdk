<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\analysisJobProgress\logs;
use AlibabaCloud\Tea\Model;

class analysisJobProgress extends Model
{
    /**
     * @description The specific project start time, formatted as <i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z (UTC time).
     *
     * @example 2022-03-16T08:01:31.000+00:00
     *
     * @var string
     */
    public $bootTime;

    /**
     * @description Whether to support skipping this sub-item.
     *
     * @example true
     *
     * @var bool
     */
    public $canSkip;

    /**
     * @description The number of currently running subtasks.
     *
     * @example 0
     *
     * @var string
     */
    public $current;

    /**
     * @description The DDL operation to be executed.
     *
     * @example CREATE TABLE ****
     *
     * @var string
     */
    public $ddlSql;

    /**
     * @description Task delay time
     *
     * @example 0
     *
     * @var int
     */
    public $delaySeconds;

    /**
     * @description Name of the database to which the migration objects in the target instance belong.
     *
     * @example dest
     *
     * @var string
     */
    public $destSchema;

    /**
     * @description This parameter will be deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $diffRow;

    /**
     * @description Error details when the project encounters an error.
     *
     * @example ANALYSIS_MYSQL
     *
     * @var string
     */
    public $errDetail;

    /**
     * @description Specific error message.
     *
     * @example ANALYSIS_
     *
     * @var string
     */
    public $errMsg;

    /**
     * @description The end time of the evaluation task, formatted as <i>yyyy-MM-dd</i>T<i>HH:mm:ss</i>Z (UTC time).
     *
     * @example 2022-03-16T08:01:31.000+00:00
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The ID of this evaluation item in the database.
     *
     * @example 123123
     *
     * @var string
     */
    public $id;

    /**
     * @description Whether to directly ignore this specific item and move to the next one. Return values:
     * - **N**: No. - **Y**: Yes.
     * @example N
     *
     * @var string
     */
    public $ignoreFlag;

    /**
     * @description Name of the evaluation item
     *
     * @example ANALYSIS_MYSQL_4_ITEM
     *
     * @var string
     */
    public $item;

    /**
     * @description The ID of the evaluation task.
     *
     * @example 11234234xc
     *
     * @var string
     */
    public $jobId;

    /**
     * @description Sub-assessment item.
     *
     * @var logs[]
     */
    public $logs;

    /**
     * @description Name of the evaluation item
     *
     * @example ANALYSIS_MYSQL_4_DETAIL
     *
     * @var string
     */
    public $names;

    /**
     * @description The number of the evaluation item.
     *
     * @example 10
     *
     * @var int
     */
    public $orderNum;

    /**
     * @description This parameter will be deprecated.
     *
     * @example demo
     *
     * @var string
     */
    public $parentObj;

    /**
     * @description Remediation method for the evaluation item.
     *
     * @example ANALYSIS_
     *
     * @var string
     */
    public $repairMethod;

    /**
     * @description If this evaluation item fails, whether you set to skip this item. Return values: * **true**: Yes * **false**: No
     *
     * @example false
     *
     * @var bool
     */
    public $skip;

    /**
     * @description Name of the database to which the migration objects in the source instance belong.
     *
     * @example dtstestdata
     *
     * @var string
     */
    public $sourceSchema;

    /**
     * @description The result of the evaluation, with return values being: - **Failed**: Failure. - **Success**: Success.
     *
     * @example Success
     *
     * @var string
     */
    public $state;

    /**
     * @description Progress of sub-projects under a specific project. > If it returns <b>[]</b>, it indicates there are no sub-projects.
     *
     * @example []
     *
     * @var string
     */
    public $sub;

    /**
     * @description Name of the target object
     *
     * @example testTable
     *
     * @var string
     */
    public $targetNames;

    /**
     * @description The total number of specific items in the sub-task.
     *
     * @example 1
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
     * @return analysisJobProgress
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
