<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models\ListProductsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ListProductsResponseBody\productInfos\productInfo;

class productInfos extends Model
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
        if (\is_array($this->productInfo)) {
            Model::validateArray($this->productInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productInfo) {
            if (\is_array($this->productInfo)) {
                $res['ProductInfo'] = [];
                $n1 = 0;
                foreach ($this->productInfo as $item1) {
                    $res['ProductInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ProductInfo'])) {
            if (!empty($map['ProductInfo'])) {
                $model->productInfo = [];
                $n1 = 0;
                foreach ($map['ProductInfo'] as $item1) {
                    $model->productInfo[$n1] = productInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
