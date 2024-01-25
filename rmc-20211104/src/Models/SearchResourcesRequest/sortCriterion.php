<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RMC\V20211104\Models\SearchResourcesRequest;

use AlibabaCloud\Tea\Model;

class sortCriterion extends Model
{
    /**
     * @description The attribute based on which the entries are sorted.
     *
     * The value `CreateTime` indicates the creation time of resources.
     * @example CreateTime
     *
     * @var string
     */
    public $key;

    /**
     * @description The order in which the entries are sorted. Valid values:
     *
     *   ASC: The entries are sorted in ascending order. This value is the default value.
     *   DESC: The entries are sorted in descending order.
     *
     * @example ASC
     *
     * @var string
     */
    public $order;
    protected $_name = [
        'key'   => 'Key',
        'order' => 'Order',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        return $model;
    }
}
