<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models;

use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\BatchSaveOrderPopRequest\orders;
use AlibabaCloud\Tea\Model;

class BatchSaveOrderPopRequest extends Model
{
    /**
     * @var orders[]
     */
    public $orders;
    protected $_name = [
        'orders' => 'Orders',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orders) {
            $res['Orders'] = [];
            if (null !== $this->orders && \is_array($this->orders)) {
                $n = 0;
                foreach ($this->orders as $item) {
                    $res['Orders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSaveOrderPopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Orders'])) {
            if (!empty($map['Orders'])) {
                $model->orders = [];
                $n             = 0;
                foreach ($map['Orders'] as $item) {
                    $model->orders[$n++] = null !== $item ? orders::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
