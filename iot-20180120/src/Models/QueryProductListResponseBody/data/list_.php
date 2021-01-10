<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductListResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductListResponseBody\data\list_\productInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var productInfo[]
     */
    public $productInfo;
    protected $_name = [
        'productInfo' => 'ProductInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productInfo) {
            $res['ProductInfo'] = [];
            if (null !== $this->productInfo && \is_array($this->productInfo)) {
                $n = 0;
                foreach ($this->productInfo as $item) {
                    $res['ProductInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductInfo'])) {
            if (!empty($map['ProductInfo'])) {
                $model->productInfo = [];
                $n                  = 0;
                foreach ($map['ProductInfo'] as $item) {
                    $model->productInfo[$n++] = null !== $item ? productInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
