<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class DBTaskSQLJobDetailList extends Model
{
    /**
     * @var int
     */
    public $affectRows;

    /**
     * @var string
     */
    public $currentSql;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $executeCount;

    /**
     * @var int
     */
    public $jobDetailId;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $log;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var bool
     */
    public $skip;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
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
