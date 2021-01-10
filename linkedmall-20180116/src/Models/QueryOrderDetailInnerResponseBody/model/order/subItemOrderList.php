<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\subItemOrderList\subItemOrder;
use AlibabaCloud\Tea\Model;

class subItemOrderList extends Model
{
    /**
     * @var subItemOrder[]
     */
    public $subItemOrder;
    protected $_name = [
        'subItemOrder' => 'SubItemOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subItemOrder) {
            $res['SubItemOrder'] = [];
            if (null !== $this->subItemOrder && \is_array($this->subItemOrder)) {
                $n = 0;
                foreach ($this->subItemOrder as $item) {
                    $res['SubItemOrder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subItemOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubItemOrder'])) {
            if (!empty($map['SubItemOrder'])) {
                $model->subItemOrder = [];
                $n                   = 0;
                foreach ($map['SubItemOrder'] as $item) {
                    $model->subItemOrder[$n++] = null !== $item ? subItemOrder::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
