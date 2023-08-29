<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetQueryResultResponseBody extends Model
{
    /**
     * @example 8000
     *
     * @var int
     */
    public $duration;

    /**
     * @example 2022-05-09 16:19:09
     *
     * @var string
     */
    public $endTime;

    /**
     * @example Table or view not found:
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 2022-05-09 16:18:09
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-05-09 16:19:09
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example Q-41676378709440CE
     *
     * @var string
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $jobCompleted;

    /**
     * @example ["this is log"]
     *
     * @var string
     */
    public $logs;

    /**
     * @example 229167306180609***
     *
     * @var int
     */
    public $owner;

    /**
     * @example 99
     *
     * @var int
     */
    public $progress;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1D2BCFBA-7639-59A9-817B-944EC1339279
     *
     * @var string
     */
    public $requestId;

    /**
     * @example db
     *
     * @var string
     */
    public $resultTmpDb;

    /**
     * @example table
     *
     * @var string
     */
    public $resultTmpTable;

    /**
     * @example 100
     *
     * @var int
     */
    public $rowCount;

    /**
     * @example false
     *
     * @var bool
     */
    public $rowCountOverLimit;

    /**
     * @example [[10,"Tom"],[11,"Jerry"]]
     *
     * @var string
     */
    public $rows;

    /**
     * @example [{"name":"id","type":"INT"},{"name":"student_name","type":"VARCHAR"}]
     *
     * @var string
     */
    public $schema;

    /**
     * @example select * from db.student
     *
     * @var string
     */
    public $sql;

    /**
     * @example 2022-05-09 16:18:09
     *
     * @var string
     */
    public $startTime;

    /**
     * @example AVAILABLE
     *
     * @var string
     */
    public $status;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 1024
     *
     * @var int
     */
    public $totalBytesProcessed;
    protected $_name = [
        'duration'            => 'Duration',
        'endTime'             => 'EndTime',
        'errorMessage'        => 'ErrorMessage',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'id'                  => 'Id',
        'jobCompleted'        => 'JobCompleted',
        'logs'                => 'Logs',
        'owner'               => 'Owner',
        'progress'            => 'Progress',
        'regionId'            => 'RegionId',
        'requestId'           => 'RequestId',
        'resultTmpDb'         => 'ResultTmpDb',
        'resultTmpTable'      => 'ResultTmpTable',
        'rowCount'            => 'RowCount',
        'rowCountOverLimit'   => 'RowCountOverLimit',
        'rows'                => 'Rows',
        'schema'              => 'Schema',
        'sql'                 => 'Sql',
        'startTime'           => 'StartTime',
        'status'              => 'Status',
        'success'             => 'Success',
        'totalBytesProcessed' => 'TotalBytesProcessed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jobCompleted) {
            $res['JobCompleted'] = $this->jobCompleted;
        }
        if (null !== $this->logs) {
            $res['Logs'] = $this->logs;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultTmpDb) {
            $res['ResultTmpDb'] = $this->resultTmpDb;
        }
        if (null !== $this->resultTmpTable) {
            $res['ResultTmpTable'] = $this->resultTmpTable;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }
        if (null !== $this->rowCountOverLimit) {
            $res['RowCountOverLimit'] = $this->rowCountOverLimit;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }
        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalBytesProcessed) {
            $res['TotalBytesProcessed'] = $this->totalBytesProcessed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQueryResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JobCompleted'])) {
            $model->jobCompleted = $map['JobCompleted'];
        }
        if (isset($map['Logs'])) {
            $model->logs = $map['Logs'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultTmpDb'])) {
            $model->resultTmpDb = $map['ResultTmpDb'];
        }
        if (isset($map['ResultTmpTable'])) {
            $model->resultTmpTable = $map['ResultTmpTable'];
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }
        if (isset($map['RowCountOverLimit'])) {
            $model->rowCountOverLimit = $map['RowCountOverLimit'];
        }
        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }
        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalBytesProcessed'])) {
            $model->totalBytesProcessed = $map['TotalBytesProcessed'];
        }

        return $model;
    }
}
