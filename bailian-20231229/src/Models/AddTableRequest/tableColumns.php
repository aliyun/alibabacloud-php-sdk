<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\AddTableRequest;

use AlibabaCloud\Dara\Model;

class tableColumns extends Model
{
    /**
     * @var string
     */
    public $columnDesc;

    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $dataType;
    protected $_name = [
        'columnDesc' => 'ColumnDesc',
        'columnName' => 'ColumnName',
        'dataType' => 'DataType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnDesc) {
            $res['ColumnDesc'] = $this->columnDesc;
        }

        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
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
        if (isset($map['ColumnDesc'])) {
            $model->columnDesc = $map['ColumnDesc'];
        }

        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        return $model;
    }
}
