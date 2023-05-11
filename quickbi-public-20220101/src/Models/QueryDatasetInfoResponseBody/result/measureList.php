<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result;

use AlibabaCloud\Tea\Model;

class measureList extends Model
{
    /**
     * @description The actual physical field.
     *
     * @example profit_amt
     *
     * @var string
     */
    public $caption;

    /**
     * @description A list of all measures for the dataset.
     *
     * @example string
     *
     * @var string
     */
    public $dataType;

    /**
     * @description Data type; value:
     *
     *   string: character
     *   number: a number
     *   datetime: time
     *
     * @example example_expression
     *
     * @var string
     */
    public $expression;

    /**
     * @description The type of the measure. Valid values:
     *
     *   standard_measure: General Metrics
     *   calculate_measure: Calculating Measures
     *
     * @example profit_amt
     *
     * @var string
     */
    public $factColumn;

    /**
     * @description An expression that calculates a measure; valid only for calculated measures.
     *
     * @example calculate_measure
     *
     * @var string
     */
    public $measureType;

    /**
     * @description The display name of the metric.
     *
     * @example 7a62530b36
     *
     * @var string
     */
    public $tableUniqueId;

    /**
     * @description The unique ID of the table to which the table belongs, which corresponds to the UniqueId of the CubeTypeList.
     *
     * @example 88b680****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'caption'       => 'Caption',
        'dataType'      => 'DataType',
        'expression'    => 'Expression',
        'factColumn'    => 'FactColumn',
        'measureType'   => 'MeasureType',
        'tableUniqueId' => 'TableUniqueId',
        'uid'           => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->factColumn) {
            $res['FactColumn'] = $this->factColumn;
        }
        if (null !== $this->measureType) {
            $res['MeasureType'] = $this->measureType;
        }
        if (null !== $this->tableUniqueId) {
            $res['TableUniqueId'] = $this->tableUniqueId;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return measureList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['FactColumn'])) {
            $model->factColumn = $map['FactColumn'];
        }
        if (isset($map['MeasureType'])) {
            $model->measureType = $map['MeasureType'];
        }
        if (isset($map['TableUniqueId'])) {
            $model->tableUniqueId = $map['TableUniqueId'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
