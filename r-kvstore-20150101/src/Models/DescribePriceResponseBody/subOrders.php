<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder;

class subOrders extends Model
{
    /**
     * @var subOrder[]
     */
    public $subOrder;
    protected $_name = [
        'subOrder' => 'SubOrder',
    ];

    public function validate()
    {
        if (\is_array($this->subOrder)) {
            Model::validateArray($this->subOrder);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subOrder) {
            if (\is_array($this->subOrder)) {
                $res['SubOrder'] = [];
                $n1 = 0;
                foreach ($this->subOrder as $item1) {
                    $res['SubOrder'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['SubOrder'])) {
            if (!empty($map['SubOrder'])) {
                $model->subOrder = [];
                $n1 = 0;
                foreach ($map['SubOrder'] as $item1) {
                    $model->subOrder[$n1++] = subOrder::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
