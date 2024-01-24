<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SubmitSqlFlashbackTaskRequest extends Model
{
    /**
     * @description The name of the DRDS database.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of a DRDS instance.
     *
     * @example drds*********
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The time when the SQL flashback task ends.
     *
     * @example 2019-09-10 23:23:23
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The restoration type. Valid values:
     *
     *   1: Image restoration
     *   0: reverse recovery
     *
     * @example 0
     *
     * @var int
     */
    public $recallRestoreType;

    /**
     * @description Exact match or fuzzy match. Valid values:
     *
     *   0: the exact match.
     *   1: the fuzzy match.
     *
     * @example 0
     *
     * @var int
     */
    public $recallType;

    /**
     * @description The primary key of flashback SQL.
     *
     * @example 11111
     *
     * @var string
     */
    public $sqlPk;

    /**
     * @description The type of the SQL statement. Valid values: INSERT, UPDATE, and DELETE. Separate multiple types with commas (,).
     *
     * @example INSERT,UPDATE
     *
     * @var string
     */
    public $sqlType;

    /**
     * @description The start time of the flashback SQL statement.
     *
     * @example 2019-09-10 20:23:23
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the table where the flashback SQL operation was performed.
     *
     * @example test
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The Trace ID of the flashback SQL.
     *
     * @example ase*****
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'dbName'            => 'DbName',
        'drdsInstanceId'    => 'DrdsInstanceId',
        'endTime'           => 'EndTime',
        'recallRestoreType' => 'RecallRestoreType',
        'recallType'        => 'RecallType',
        'sqlPk'             => 'SqlPk',
        'sqlType'           => 'SqlType',
        'startTime'         => 'StartTime',
        'tableName'         => 'TableName',
        'traceId'           => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->recallRestoreType) {
            $res['RecallRestoreType'] = $this->recallRestoreType;
        }
        if (null !== $this->recallType) {
            $res['RecallType'] = $this->recallType;
        }
        if (null !== $this->sqlPk) {
            $res['SqlPk'] = $this->sqlPk;
        }
        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSqlFlashbackTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RecallRestoreType'])) {
            $model->recallRestoreType = $map['RecallRestoreType'];
        }
        if (isset($map['RecallType'])) {
            $model->recallType = $map['RecallType'];
        }
        if (isset($map['SqlPk'])) {
            $model->sqlPk = $map['SqlPk'];
        }
        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
