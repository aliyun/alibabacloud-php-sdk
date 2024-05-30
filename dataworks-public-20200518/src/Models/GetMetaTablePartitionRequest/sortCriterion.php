<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionRequest;

use AlibabaCloud\Tea\Model;

class sortCriterion extends Model
{
    /**
     * @description The order in which partitions in the metatable are sorted. Valid values: asc and desc. Default value: desc.
     *
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The field that is used to sort partitions in the metatable. Valid values: name and modify_time.
     *
     * By default, partitions in the metatable are sorted based on their creation time.
     * @example name
     *
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
