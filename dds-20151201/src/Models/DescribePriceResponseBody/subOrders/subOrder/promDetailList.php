<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\promDetailList\promDetal;
use AlibabaCloud\Tea\Model;

class promDetailList extends Model
{
    /**
     * @var promDetal[]
     */
    public $promDetal;
    protected $_name = [
        'promDetal' => 'PromDetal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promDetal) {
            $res['PromDetal'] = [];
            if (null !== $this->promDetal && \is_array($this->promDetal)) {
                $n = 0;
                foreach ($this->promDetal as $item) {
                    $res['PromDetal'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromDetal'])) {
            if (!empty($map['PromDetal'])) {
                $model->promDetal = [];
                $n                = 0;
                foreach ($map['PromDetal'] as $item) {
                    $model->promDetal[$n++] = null !== $item ? promDetal::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
