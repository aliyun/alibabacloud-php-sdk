<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLTuningAdvicesResponseBody\data;

use AlibabaCloud\Dara\Model;

class columns extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $maxValue;

    /**
     * @var string
     */
    public $minValue;

    /**
     * @var float
     */
    public $ndv;
    protected $_name = [
        'columnName' => 'ColumnName',
        'maxValue' => 'MaxValue',
        'minValue' => 'MinValue',
        'ndv' => 'Ndv',
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

        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }

        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }

        if (null !== $this->ndv) {
            $res['Ndv'] = $this->ndv;
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

        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }

        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }

        if (isset($map['Ndv'])) {
            $model->ndv = $map['Ndv'];
        }

        return $model;
    }
}
