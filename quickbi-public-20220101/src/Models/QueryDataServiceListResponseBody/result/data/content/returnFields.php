<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content\returnFields\field;
use AlibabaCloud\Tea\Model;

class returnFields extends Model
{
    /**
     * @example SUM
     *
     * @var string
     */
    public $aggregator;

    /**
     * @example s_number
     *
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var field
     */
    public $field;

    /**
     * @example no
     *
     * @var string
     */
    public $orderby;
    protected $_name = [
        'aggregator' => 'Aggregator',
        'alias'      => 'Alias',
        'desc'       => 'Desc',
        'field'      => 'Field',
        'orderby'    => 'Orderby',
    ];

    public function validate()
    {
    }

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
