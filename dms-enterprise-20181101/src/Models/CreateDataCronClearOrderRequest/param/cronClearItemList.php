<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param;

use AlibabaCloud\Tea\Model;

class cronClearItemList extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $filterSQL;

    /**
     * @var int
     */
    public $remainDays;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'columnName' => 'ColumnName',
        'filterSQL'  => 'FilterSQL',
        'remainDays' => 'RemainDays',
        'tableName'  => 'TableName',
        'timeUnit'   => 'TimeUnit',
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
        if (null !== $this->filterSQL) {
            $res['FilterSQL'] = $this->filterSQL;
        }
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
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
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['FilterSQL'])) {
            $model->filterSQL = $map['FilterSQL'];
        }
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }

        return $model;
    }
}
