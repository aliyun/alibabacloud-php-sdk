<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryDataServiceListResponseBody\result\data\content\returnFields\field;

class returnFields extends Model
{
    /**
     * @var string
     */
    public $aggregator;

    /**
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

    public function validate()
    {
        if (null !== $this->field) {
            $this->field->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Field'] = null !== $this->field ? $this->field->toArray($noStream) : $this->field;
        }

        if (null !== $this->orderby) {
            $res['Orderby'] = $this->orderby;
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
