<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class DBTaskSQLJobDetailList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $affectRows;

    /**
     * @description The duration of the SQL task. Unit: milliseconds.
     *
     * @example update a set id = 1 where id  = 1;
     *
     * @var string
     */
    public $currentSql;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 1988****
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The ID of the request.
     *
     * @example 2021-12-16 00:00:01
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The point in time when the SQL task started.
     *
     * @example 1
     *
     * @var int
     */
    public $executeCount;

    /**
     * @description The ID of the SQL task.
     *
     * @example 24723****
     *
     * @var int
     */
    public $jobDetailId;

    /**
     * @description The number of the page to return.
     *
     * @example 1276****
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The details of the operational log.
     *
     * @example log_info
     *
     * @var string
     */
    public $log;

    /**
     * @description The details of SQL tasks.
     *
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @description The error message that is returned.
     *
     * @example false
     *
     * @var bool
     */
    public $skip;

    /**
     * @description The ID of the details of the SQL task.
     *
     * @example CREATE_TABLE
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to query the tenant ID.
     *
     * @example 2021-12-16 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description Indicates whether the SQL statement was skipped. Valid values:
     *
     *   **true**: The SQL statement was skipped.
     *   **false**: The SQL statement was not skipped.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 38
     *
     * @var int
     */
    public $timeDelay;
    protected $_name = [
        'affectRows'   => 'AffectRows',
        'currentSql'   => 'CurrentSql',
        'dbId'         => 'DbId',
        'endTime'      => 'EndTime',
        'executeCount' => 'ExecuteCount',
        'jobDetailId'  => 'JobDetailId',
        'jobId'        => 'JobId',
        'log'          => 'Log',
        'logic'        => 'Logic',
        'skip'         => 'Skip',
        'sqlType'      => 'SqlType',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'timeDelay'    => 'TimeDelay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }
        if (null !== $this->currentSql) {
            $res['CurrentSql'] = $this->currentSql;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executeCount) {
            $res['ExecuteCount'] = $this->executeCount;
        }
        if (null !== $this->jobDetailId) {
            $res['JobDetailId'] = $this->jobDetailId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeDelay) {
            $res['TimeDelay'] = $this->timeDelay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBTaskSQLJobDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }
        if (isset($map['CurrentSql'])) {
            $model->currentSql = $map['CurrentSql'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecuteCount'])) {
            $model->executeCount = $map['ExecuteCount'];
        }
        if (isset($map['JobDetailId'])) {
            $model->jobDetailId = $map['JobDetailId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeDelay'])) {
            $model->timeDelay = $map['TimeDelay'];
        }

        return $model;
    }
}
