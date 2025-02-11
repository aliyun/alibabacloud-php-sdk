<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku;

class productSkus extends Model
{
    /**
     * @var productSku[]
     */
    public $productSku;
    protected $_name = [
        'productSku' => 'ProductSku',
    ];

    public function validate()
    {
        if (\is_array($this->productSku)) {
            Model::validateArray($this->productSku);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productSku) {
            if (\is_array($this->productSku)) {
                $res['ProductSku'] = [];
                $n1                = 0;
                foreach ($this->productSku as $item1) {
                    $res['ProductSku'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ProductSku'])) {
            if (!empty($map['ProductSku'])) {
                $model->productSku = [];
                $n1                = 0;
                foreach ($map['ProductSku'] as $item1) {
                    $model->productSku[$n1++] = productSku::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
