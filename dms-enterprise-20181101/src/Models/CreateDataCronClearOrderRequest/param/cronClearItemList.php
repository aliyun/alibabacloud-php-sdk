<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param;

use AlibabaCloud\Tea\Model;

class cronClearItemList extends Model
{
    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var int
     */
    public $remainDays;

    /**
     * @var string
     */
    public $timeUnit;

    /**
     * @var string
     */
    public $filterSQL;
    protected $_name = [
        'tableName'  => 'TableName',
        'columnName' => 'ColumnName',
        'remainDays' => 'RemainDays',
        'timeUnit'   => 'TimeUnit',
        'filterSQL'  => 'FilterSQL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }
        if (null !== $this->filterSQL) {
            $res['FilterSQL'] = $this->filterSQL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cronClearItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }
        if (isset($map['FilterSQL'])) {
            $model->filterSQL = $map['FilterSQL'];
        }

        return $model;
    }
}
