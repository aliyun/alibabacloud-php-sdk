<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesensitizationStrategyRequest extends Model
{
    /**
     * @description The ID of the masking rule.
     *
     * @example test_column
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The error code returned if the request failed.
     *
     * @example 123
     *
     * @var int
     */
    public $dbId;

    /**
     * @description The operation that you want to perform. Set the value to **ModifyDesensitizationStrategy**.
     *
     * @example false
     *
     * @var bool
     */
    public $isLogic;

    /**
     * @description The name of the table. You can call the [ListSensitiveColumns](~~188103~~) operation to query the table name.
     *
     * >  You can also call the [ListTables](~~141878~~) operation to query the table name.
     * @example false
     *
     * @var bool
     */
    public $isReset;

    /**
     * @description The ID of the database. You can call the [ListDatabases](~~141873~~) operation to query the ID.
     *
     * @example 53
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the field. You can call the [ListSensitiveColumns](~~188103~~) operation to query the field name.
     *
     * >  You can also call the [ListColumns](~~141870~~) operation to query the field name.
     * @example test_schema
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description The error message returned if the request failed.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @description The ID of the request.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnName' => 'ColumnName',
        'dbId'       => 'DbId',
        'isLogic'    => 'IsLogic',
        'isReset'    => 'IsReset',
        'ruleId'     => 'RuleId',
        'schemaName' => 'SchemaName',
        'tableName'  => 'TableName',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->isLogic) {
            $res['IsLogic'] = $this->isLogic;
        }
        if (null !== $this->isReset) {
            $res['IsReset'] = $this->isReset;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDesensitizationStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['IsLogic'])) {
            $model->isLogic = $map['IsLogic'];
        }
        if (isset($map['IsReset'])) {
            $model->isReset = $map['IsReset'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
