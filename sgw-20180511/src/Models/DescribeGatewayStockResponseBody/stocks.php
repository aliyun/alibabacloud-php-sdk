<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayStockResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayStockResponseBody\stocks\stock;
use AlibabaCloud\Tea\Model;

class stocks extends Model
{
    /**
     * @var stock[]
     */
    public $stock;
    protected $_name = [
        'stock' => 'Stock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stock) {
            $res['Stock'] = [];
            if (null !== $this->stock && \is_array($this->stock)) {
                $n = 0;
                foreach ($this->stock as $item) {
                    $res['Stock'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stocks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Stock'])) {
            if (!empty($map['Stock'])) {
                $model->stock = [];
                $n            = 0;
                foreach ($map['Stock'] as $item) {
                    $model->stock[$n++] = null !== $item ? stock::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
