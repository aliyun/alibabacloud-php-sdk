<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ModifyDesensitizationStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $columnName;
    /**
     * @var int
     */
    public $dbId;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var bool
     */
    public $isLogic;
    /**
     * @var bool
     */
    public $isReset;
    /**
     * @var int
     */
    public $ruleId;
    /**
     * @var string
     */
    public $schemaName;
    /**
     * @var string
     */
    public $tableName;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'columnName' => 'ColumnName',
        'dbId'       => 'DbId',
        'isDefault'  => 'IsDefault',
        'isLogic'    => 'IsLogic',
        'isReset'    => 'IsReset',
        'ruleId'     => 'RuleId',
        'schemaName' => 'SchemaName',
        'tableName'  => 'TableName',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
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
