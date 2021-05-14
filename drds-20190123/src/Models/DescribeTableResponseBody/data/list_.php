<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeTableResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
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
    public $columnName;

    /**
     * @var string
     */
    public $isPk;

    /**
     * @var string
     */
    public $columnType;

    /**
     * @var string
     */
    public $extra;
    protected $_name = [
        'index'       => 'Index',
        'isAllowNull' => 'IsAllowNull',
        'columnName'  => 'ColumnName',
        'isPk'        => 'IsPk',
        'columnType'  => 'ColumnType',
        'extra'       => 'Extra',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->isAllowNull) {
            $res['IsAllowNull'] = $this->isAllowNull;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->isPk) {
            $res['IsPk'] = $this->isPk;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['IsAllowNull'])) {
            $model->isAllowNull = $map['IsAllowNull'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['IsPk'])) {
            $model->isPk = $map['IsPk'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        return $model;
    }
}
