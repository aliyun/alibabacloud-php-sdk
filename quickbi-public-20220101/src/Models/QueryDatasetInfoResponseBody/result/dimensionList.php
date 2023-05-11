<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDatasetInfoResponseBody\result;

use AlibabaCloud\Tea\Model;

class dimensionList extends Model
{
    /**
     * @description The unique ID of the field that is referenced by the group measure. Non-NULL if and only if the metric is a grouping metric.
     *
     * @example city
     *
     * @var string
     */
    public $caption;

    /**
     * @description A list of all dimensions in the dataset.
     *
     * @example string
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The actual physical field.
     *
     * @example group_dimension
     *
     * @var string
     */
    public $dimensionType;

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
     * @description Expression for a calculated dimension; valid only for calculated dimensions.
     *
     * @example city
     *
     * @var string
     */
    public $factColumn;

    /**
     * @description The type of the dimension. Valid values:
     *
     *   standard_dimension: General Dimension
     *   calculate_dimension: calculating dimensions
     *   group_dimension: grouping dimensions
     *
     * @example example_granularity
     *
     * @var string
     */
    public $granularity;

    /**
     * @description The granularity.
     *
     * @example 308f7****
     *
     * @var string
     */
    public $refUid;

    /**
     * @description The ARN.
     *
     * @example 7a62530***
     *
     * @var string
     */
    public $tableUniqueId;

    /**
     * @description The display name of the dimension.
     *
     * @example a69774***
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'caption'       => 'Caption',
        'dataType'      => 'DataType',
        'dimensionType' => 'DimensionType',
        'expression'    => 'Expression',
        'factColumn'    => 'FactColumn',
        'granularity'   => 'Granularity',
        'refUid'        => 'RefUid',
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
        if (null !== $this->dimensionType) {
            $res['DimensionType'] = $this->dimensionType;
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->factColumn) {
            $res['FactColumn'] = $this->factColumn;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->refUid) {
            $res['RefUid'] = $this->refUid;
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
     * @return dimensionList
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
        if (isset($map['DimensionType'])) {
            $model->dimensionType = $map['DimensionType'];
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['FactColumn'])) {
            $model->factColumn = $map['FactColumn'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['RefUid'])) {
            $model->refUid = $map['RefUid'];
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
