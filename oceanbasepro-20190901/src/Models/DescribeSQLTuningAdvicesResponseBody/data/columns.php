<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLTuningAdvicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $columnName;

    /**
     * @example 100
     *
     * @var string
     */
    public $maxValue;

    /**
     * @example 1
     *
     * @var string
     */
    public $minValue;

    /**
     * @description NDV
     *
     * @example 100
     *
     * @var float
     */
    public $ndv;
    protected $_name = [
        'columnName' => 'ColumnName',
        'maxValue'   => 'MaxValue',
        'minValue'   => 'MinValue',
        'ndv'        => 'Ndv',
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

    /**
     * @param array $map
     *
     * @return columns
     */
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
