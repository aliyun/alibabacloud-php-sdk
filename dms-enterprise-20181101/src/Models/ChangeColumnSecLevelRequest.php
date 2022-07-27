<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ChangeColumnSecLevelRequest extends Model
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
    public $isLogic;

    /**
     * @var string
     */
    public $newLevel;

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
        'isLogic'    => 'IsLogic',
        'newLevel'   => 'NewLevel',
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
        if (null !== $this->newLevel) {
            $res['NewLevel'] = $this->newLevel;
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
     * @return ChangeColumnSecLevelRequest
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
        if (isset($map['NewLevel'])) {
            $model->newLevel = $map['NewLevel'];
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
