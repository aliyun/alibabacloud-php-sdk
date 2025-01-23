<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionRequest;

use AlibabaCloud\Dara\Model;

class sortCriterion extends Model
{
    /**
     * @var string
     */
    public $order;
    /**
     * @var string
     */
    public $sortField;
    protected $_name = [
        'order'     => 'Order',
        'sortField' => 'SortField',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
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
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }

        return $model;
    }
}
