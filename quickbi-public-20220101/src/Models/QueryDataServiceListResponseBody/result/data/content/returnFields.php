<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content\returnFields\field;
use AlibabaCloud\Tea\Model;

class returnFields extends Model
{
    /**
     * @description Aggregation operator. For example, SUM, AVG, and MAX.
     *
     * @example SUM
     *
     * @var string
     */
    public $aggregator;

    /**
     * @description Field parameter name.
     *
     * @example s_number
     *
     * @var string
     */
    public $alias;

    /**
     * @description Remark for the returned field.
     *
     * @example Theme Configuration already exists
     *
     * @var string
     */
    public $desc;

    /**
     * @description Corresponding cube field information.
     *
     * @var field
     */
    public $field;

    /**
     * @description Sorting.
     *
     * - asc: Ascending
     * - desc: Descending
     * - no: No sorting
     *
     * @example no
     *
     * @var string
     */
    public $orderby;
    protected $_name = [
        'aggregator' => 'Aggregator',
        'alias' => 'Alias',
        'desc' => 'Desc',
        'field' => 'Field',
        'orderby' => 'Orderby',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregator) {
            $res['Aggregator'] = $this->aggregator;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->field) {
            $res['Field'] = null !== $this->field ? $this->field->toMap() : null;
        }
        if (null !== $this->orderby) {
            $res['Orderby'] = $this->orderby;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return returnFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregator'])) {
            $model->aggregator = $map['Aggregator'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Field'])) {
            $model->field = field::fromMap($map['Field']);
        }
        if (isset($map['Orderby'])) {
            $model->orderby = $map['Orderby'];
        }

        return $model;
    }
}
