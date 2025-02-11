<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoIncrementUsageStatisticResponseBody\data;

use AlibabaCloud\Dara\Model;

class autoIncrementUsageList extends Model
{
    /**
     * @var int
     */
    public $autoIncrementCurrentValue;
    /**
     * @var float
     */
    public $autoIncrementRatio;
    /**
     * @var string
     */
    public $columnName;
    /**
     * @var string
     */
    public $dbName;
    /**
     * @var int
     */
    public $maximumValue;
    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'autoIncrementCurrentValue' => 'AutoIncrementCurrentValue',
        'autoIncrementRatio'        => 'AutoIncrementRatio',
        'columnName'                => 'ColumnName',
        'dbName'                    => 'DbName',
        'maximumValue'              => 'MaximumValue',
        'tableName'                 => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoIncrementCurrentValue) {
            $res['AutoIncrementCurrentValue'] = $this->autoIncrementCurrentValue;
        }

        if (null !== $this->autoIncrementRatio) {
            $res['AutoIncrementRatio'] = $this->autoIncrementRatio;
        }

        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->maximumValue) {
            $res['MaximumValue'] = $this->maximumValue;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['AutoIncrementCurrentValue'])) {
            $model->autoIncrementCurrentValue = $map['AutoIncrementCurrentValue'];
        }

        if (isset($map['AutoIncrementRatio'])) {
            $model->autoIncrementRatio = $map['AutoIncrementRatio'];
        }

        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['MaximumValue'])) {
            $model->maximumValue = $map['MaximumValue'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
