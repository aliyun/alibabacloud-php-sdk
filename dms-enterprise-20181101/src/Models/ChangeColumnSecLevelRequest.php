<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ChangeColumnSecLevelRequest extends Model
{
    /**
     * @var int
     */
    public $tid;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var bool
     */
    public $isLogic;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @description 新的敏感等级
     *
     * @var string
     */
    public $newLevel;
    protected $_name = [
        'tid'        => 'Tid',
        'dbId'       => 'DbId',
        'isLogic'    => 'IsLogic',
        'schemaName' => 'SchemaName',
        'tableName'  => 'TableName',
        'columnName' => 'ColumnName',
        'newLevel'   => 'NewLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->isLogic) {
            $res['IsLogic'] = $this->isLogic;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->newLevel) {
            $res['NewLevel'] = $this->newLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeColumnSecLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['IsLogic'])) {
            $model->isLogic = $map['IsLogic'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['NewLevel'])) {
            $model->newLevel = $map['NewLevel'];
        }

        return $model;
    }
}
