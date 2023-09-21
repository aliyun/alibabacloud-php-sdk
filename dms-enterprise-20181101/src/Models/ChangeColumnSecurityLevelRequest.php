<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ChangeColumnSecurityLevelRequest extends Model
{
    /**
     * @example test_column
     *
     * @var string
     */
    public $columnName;

    /**
     * @example 325**
     *
     * @var int
     */
    public $dbId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isLogic;

    /**
     * @example S2
     *
     * @var string
     */
    public $newSensitivityLevel;

    /**
     * @example test_schema
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 10****
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnName'          => 'ColumnName',
        'dbId'                => 'DbId',
        'isLogic'             => 'IsLogic',
        'newSensitivityLevel' => 'NewSensitivityLevel',
        'schemaName'          => 'SchemaName',
        'tableName'           => 'TableName',
        'tid'                 => 'Tid',
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
        if (null !== $this->newSensitivityLevel) {
            $res['NewSensitivityLevel'] = $this->newSensitivityLevel;
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
     * @return ChangeColumnSecurityLevelRequest
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
        if (isset($map['NewSensitivityLevel'])) {
            $model->newSensitivityLevel = $map['NewSensitivityLevel'];
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
