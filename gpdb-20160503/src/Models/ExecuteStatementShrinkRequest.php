<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class ExecuteStatementShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $database;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $parametersShrink;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $runType;
    /**
     * @var string
     */
    public $secretArn;
    /**
     * @var string
     */
    public $sql;
    /**
     * @var string
     */
    public $sqlsShrink;
    /**
     * @var string
     */
    public $statementName;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'database'         => 'Database',
        'ownerId'          => 'OwnerId',
        'parametersShrink' => 'Parameters',
        'regionId'         => 'RegionId',
        'runType'          => 'RunType',
        'secretArn'        => 'SecretArn',
        'sql'              => 'Sql',
        'sqlsShrink'       => 'Sqls',
        'statementName'    => 'StatementName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->runType) {
            $res['RunType'] = $this->runType;
        }

        if (null !== $this->secretArn) {
            $res['SecretArn'] = $this->secretArn;
        }

        if (null !== $this->sql) {
            $res['Sql'] = $this->sql;
        }

        if (null !== $this->sqlsShrink) {
            $res['Sqls'] = $this->sqlsShrink;
        }

        if (null !== $this->statementName) {
            $res['StatementName'] = $this->statementName;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RunType'])) {
            $model->runType = $map['RunType'];
        }

        if (isset($map['SecretArn'])) {
            $model->secretArn = $map['SecretArn'];
        }

        if (isset($map['Sql'])) {
            $model->sql = $map['Sql'];
        }

        if (isset($map['Sqls'])) {
            $model->sqlsShrink = $map['Sqls'];
        }

        if (isset($map['StatementName'])) {
            $model->statementName = $map['StatementName'];
        }

        return $model;
    }
}
