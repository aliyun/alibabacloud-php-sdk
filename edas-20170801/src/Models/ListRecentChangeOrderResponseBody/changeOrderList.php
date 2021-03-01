<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderResponseBody\changeOrderList\changeOrder;
use AlibabaCloud\Tea\Model;

class changeOrderList extends Model
{
    /**
     * @var changeOrder[]
     */
    public $changeOrder;
    protected $_name = [
        'changeOrder' => 'ChangeOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrder) {
            $res['ChangeOrder'] = [];
            if (null !== $this->changeOrder && \is_array($this->changeOrder)) {
                $n = 0;
                foreach ($this->changeOrder as $item) {
                    $res['ChangeOrder'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changeOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeOrder'])) {
            if (!empty($map['ChangeOrder'])) {
                $model->changeOrder = [];
                $n                  = 0;
                foreach ($map['ChangeOrder'] as $item) {
                    $model->changeOrder[$n++] = null !== $item ? changeOrder::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
