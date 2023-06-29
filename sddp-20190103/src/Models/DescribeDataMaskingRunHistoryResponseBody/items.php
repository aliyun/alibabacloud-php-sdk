<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataMaskingRunHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The number of rows that are in conflict with the data to be de-identified in the destination table to which the data to be de-identified is moved.
     *
     * @example 0
     *
     * @var int
     */
    public $conflictCount;

    /**
     * @description The type of the service to which the de-identified data belongs. Valid values: **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates OSS. The value indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 2
     *
     * @var int
     */
    public $dstType;

    /**
     * @description The service that stores the de-identified data. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example OSS
     *
     * @var string
     */
    public $dstTypeCode;

    /**
     * @description The end time of the de-identification task.
     *
     * @example 1582251233000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The error code that is returned when the de-identification task fails.
     *
     * @example masking_task_not_found
     *
     * @var string
     */
    public $failCode;

    /**
     * @description The reason why the de-identification task fails.
     *
     * @example error
     *
     * @var string
     */
    public $failMsg;

    /**
     * @description Indicates whether a file is available for download.
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $hasDownloadFile;

    /**
     * @description The number of created subtasks.
     *
     * @example 4
     *
     * @var int
     */
    public $hasSubProcess;

    /**
     * @description The ID of the task execution record.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The number of rows that are de-identified.
     *
     * @example 100
     *
     * @var int
     */
    public $maskingCount;

    /**
     * @description The progress of the de-identification task.
     *
     * @example 100
     *
     * @var int
     */
    public $percentage;

    /**
     * @description The number of times that the de-identification task is executed.
     *
     * @example 1
     *
     * @var int
     */
    public $runIndex;

    /**
     * @description The name of the source table.
     *
     * @example add
     *
     * @var string
     */
    public $srcTableName;

    /**
     * @description The type of the service to which the data to be de-identified belongs. Valid values: **1**, **2**, **3**, **4**, and **5**. The value 1 indicates MaxCompute. The value 2 indicates OSS. The value indicates AnalyticDB for MySQL. The value 4 indicates Tablestore. The value 5 indicates ApsaraDB RDS.
     *
     * @example 2
     *
     * @var int
     */
    public $srcType;

    /**
     * @description The service to which the data to be de-identified belongs. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example OSS
     *
     * @var string
     */
    public $srcTypeCode;

    /**
     * @description The time when the de-identification task was executed. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1582251233000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the de-identification task. Valid values:
     *
     *   **-1**: waiting
     *   **0**: being executed
     *   **1**: executed
     *   **2**: failed to be executed
     *   **3**: terminated
     *   **4**: partially failed
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the identification task.
     *
     * @example mt4HBgtw1B******
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The mode in which the de-identification task is executed. Valid values:
     *
     *   **1**: manual
     *   **2**: scheduled
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'conflictCount'   => 'ConflictCount',
        'dstType'         => 'DstType',
        'dstTypeCode'     => 'DstTypeCode',
        'endTime'         => 'EndTime',
        'failCode'        => 'FailCode',
        'failMsg'         => 'FailMsg',
        'hasDownloadFile' => 'HasDownloadFile',
        'hasSubProcess'   => 'HasSubProcess',
        'id'              => 'Id',
        'maskingCount'    => 'MaskingCount',
        'percentage'      => 'Percentage',
        'runIndex'        => 'RunIndex',
        'srcTableName'    => 'SrcTableName',
        'srcType'         => 'SrcType',
        'srcTypeCode'     => 'SrcTypeCode',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'taskId'          => 'TaskId',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conflictCount) {
            $res['ConflictCount'] = $this->conflictCount;
        }
        if (null !== $this->dstType) {
            $res['DstType'] = $this->dstType;
        }
        if (null !== $this->dstTypeCode) {
            $res['DstTypeCode'] = $this->dstTypeCode;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->failCode) {
            $res['FailCode'] = $this->failCode;
        }
        if (null !== $this->failMsg) {
            $res['FailMsg'] = $this->failMsg;
        }
        if (null !== $this->hasDownloadFile) {
            $res['HasDownloadFile'] = $this->hasDownloadFile;
        }
        if (null !== $this->hasSubProcess) {
            $res['HasSubProcess'] = $this->hasSubProcess;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maskingCount) {
            $res['MaskingCount'] = $this->maskingCount;
        }
        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }
        if (null !== $this->runIndex) {
            $res['RunIndex'] = $this->runIndex;
        }
        if (null !== $this->srcTableName) {
            $res['SrcTableName'] = $this->srcTableName;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->srcTypeCode) {
            $res['SrcTypeCode'] = $this->srcTypeCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConflictCount'])) {
            $model->conflictCount = $map['ConflictCount'];
        }
        if (isset($map['DstType'])) {
            $model->dstType = $map['DstType'];
        }
        if (isset($map['DstTypeCode'])) {
            $model->dstTypeCode = $map['DstTypeCode'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FailCode'])) {
            $model->failCode = $map['FailCode'];
        }
        if (isset($map['FailMsg'])) {
            $model->failMsg = $map['FailMsg'];
        }
        if (isset($map['HasDownloadFile'])) {
            $model->hasDownloadFile = $map['HasDownloadFile'];
        }
        if (isset($map['HasSubProcess'])) {
            $model->hasSubProcess = $map['HasSubProcess'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaskingCount'])) {
            $model->maskingCount = $map['MaskingCount'];
        }
        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }
        if (isset($map['RunIndex'])) {
            $model->runIndex = $map['RunIndex'];
        }
        if (isset($map['SrcTableName'])) {
            $model->srcTableName = $map['SrcTableName'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['SrcTypeCode'])) {
            $model->srcTypeCode = $map['SrcTypeCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
