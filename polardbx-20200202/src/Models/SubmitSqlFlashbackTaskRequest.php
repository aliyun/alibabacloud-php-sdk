<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class SubmitSqlFlashbackTaskRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $polardbxInstanceId;

    /**
     * @var string
     */
    public $recallRestoreType;

    /**
     * @var string
     */
    public $recallType;

    /**
     * @var string
     */
    public $regionId;

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
        'dbName' => 'DbName',
        'endTime' => 'EndTime',
        'polardbxInstanceId' => 'PolardbxInstanceId',
        'recallRestoreType' => 'RecallRestoreType',
        'recallType' => 'RecallType',
        'regionId' => 'RegionId',
        'sqlPk' => 'SqlPk',
        'sqlType' => 'SqlType',
        'startTime' => 'StartTime',
        'tableName' => 'TableName',
        'traceId' => 'TraceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->polardbxInstanceId) {
            $res['PolardbxInstanceId'] = $this->polardbxInstanceId;
        }

        if (null !== $this->recallRestoreType) {
            $res['RecallRestoreType'] = $this->recallRestoreType;
        }

        if (null !== $this->recallType) {
            $res['RecallType'] = $this->recallType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['PolardbxInstanceId'])) {
            $model->polardbxInstanceId = $map['PolardbxInstanceId'];
        }

        if (isset($map['RecallRestoreType'])) {
            $model->recallRestoreType = $map['RecallRestoreType'];
        }

        if (isset($map['RecallType'])) {
            $model->recallType = $map['RecallType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
