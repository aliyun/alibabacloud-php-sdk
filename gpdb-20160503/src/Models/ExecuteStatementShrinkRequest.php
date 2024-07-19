<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ExecuteStatementShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example adbtest
     *
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
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example synchronous
     *
     * @var string
     */
    public $runType;

    /**
     * @description This parameter is required.
     *
     * @example acs:gpdb:cn-beijing:1033**:secret/testsecret-eG2AQGRIwQ0zFp4VA7mYL3uiCXTfDQbQ
     *
     * @var string
     */
    public $secretArn;

    /**
     * @example select * from table1
     *
     * @var string
     */
    public $sql;

    /**
     * @var string
     */
    public $sqlsShrink;

    /**
     * @example test
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ExecuteStatementShrinkRequest
     */
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
