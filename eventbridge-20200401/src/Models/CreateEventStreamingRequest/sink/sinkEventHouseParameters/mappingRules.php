<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkEventHouseParameters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkEventHouseParameters\mappingRules\columnValue;

class mappingRules extends Model
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
     * @var columnValue
     */
    public $columnValue;
    protected $_name = [
        'columnName' => 'ColumnName',
        'columnType' => 'ColumnType',
        'columnValue' => 'ColumnValue',
    ];

    public function validate()
    {
        if (null !== $this->columnValue) {
            $this->columnValue->validate();
        }
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

        if (null !== $this->columnValue) {
            $res['ColumnValue'] = null !== $this->columnValue ? $this->columnValue->toArray($noStream) : $this->columnValue;
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

        if (isset($map['ColumnValue'])) {
            $model->columnValue = columnValue::fromMap($map['ColumnValue']);
        }

        return $model;
    }
}
