<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchDataTrackResultRequest;

use AlibabaCloud\Tea\Model;

class columnFilter extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $betweenEnd;

    /**
     * @example 1
     *
     * @var string
     */
    public $betweenStart;

    /**
     * @example c_payer_name
     *
     * @var string
     */
    public $columnName;

    /**
     * @var string[]
     */
    public $inList;

    /**
     * @example EQUAL
     *
     * @var string
     */
    public $operator;

    /**
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
