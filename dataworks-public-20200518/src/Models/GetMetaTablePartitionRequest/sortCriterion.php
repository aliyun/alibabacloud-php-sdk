<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionRequest;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return sortCriterion
     */
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
