<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultRequest;

use AlibabaCloud\Tea\Model;

class columnFilter extends Model
{
    /**
     * @description The end value of the range used in the filter condition. This parameter takes effect only when Operator is set to BETWEEN.
     *
     * @example 10
     *
     * @var string
     */
    public $betweenEnd;

    /**
     * @description The start value of the range used in the filter condition. This parameter takes effect only when Operator is set to BETWEEN.
     *
     * @example 1
     *
     * @var string
     */
    public $betweenStart;

    /**
     * @description The name of the column.
     *
     * @example c_payer_name
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The IN list used in the filter condition. This parameter takes effect only when Operator is set to IN or NOT_IN.
     *
     * @var string[]
     */
    public $inList;

    /**
     * @description The type of the operator used to configure the filter condition. Valid values:
     *
     *   **EQUAL**: retrieves the column whose value is equal to the specified value.
     *   **NOT_EQUAL**: retrieves the column whose value is not equal to the specified value.
     *   **IN**: retrieves the column whose value is in the IN list.
     *   **BETWEEN**: retrieves the column whose value is in the specified range.
     *   **LESS**: retrieves the column whose value is less than the specified value.
     *   **MORE**: retrieves the column whose value is greater than the specified value.
     *   **NOT_IN**: retrieves the column whose value is not in the IN list.
     *
     * @example EQUAL
     *
     * @var string
     */
    public $operator;

    /**
     * @description The value used in the filter condition.
     *
     * @example 1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'betweenEnd'   => 'BetweenEnd',
        'betweenStart' => 'BetweenStart',
        'columnName'   => 'ColumnName',
        'inList'       => 'InList',
        'operator'     => 'Operator',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->betweenEnd) {
            $res['BetweenEnd'] = $this->betweenEnd;
        }
        if (null !== $this->betweenStart) {
            $res['BetweenStart'] = $this->betweenStart;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->inList) {
            $res['InList'] = $this->inList;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BetweenEnd'])) {
            $model->betweenEnd = $map['BetweenEnd'];
        }
        if (isset($map['BetweenStart'])) {
            $model->betweenStart = $map['BetweenStart'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['InList'])) {
            if (!empty($map['InList'])) {
                $model->inList = $map['InList'];
            }
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
