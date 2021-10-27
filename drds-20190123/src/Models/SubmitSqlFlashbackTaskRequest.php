<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class SubmitSqlFlashbackTaskRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $recallRestoreType;

    /**
     * @var int
     */
    public $recallType;

    /**
     * @var string
     */
    public $sqlPk;

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
    public $tableName;

    /**
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
