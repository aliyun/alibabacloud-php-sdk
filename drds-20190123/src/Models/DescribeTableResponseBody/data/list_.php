<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $columnType;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $index;

    /**
     * @var string
     */
    public $isAllowNull;

    /**
     * @var string
     */
    public $isPk;
    protected $_name = [
        'columnName' => 'ColumnName',
        'columnType' => 'ColumnType',
        'extra' => 'Extra',
        'index' => 'Index',
        'isAllowNull' => 'IsAllowNull',
        'isPk' => 'IsPk',
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

        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }

        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->isAllowNull) {
            $res['IsAllowNull'] = $this->isAllowNull;
        }

        if (null !== $this->isPk) {
            $res['IsPk'] = $this->isPk;
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

        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }

        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['IsAllowNull'])) {
            $model->isAllowNull = $map['IsAllowNull'];
        }

        if (isset($map['IsPk'])) {
            $model->isPk = $map['IsPk'];
        }

        return $model;
    }
}
