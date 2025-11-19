<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\GetProductListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\GetProductListResponseBody\displayInfo\productList;

class displayInfo extends Model
{
    /**
     * @var productList[]
     */
    public $productList;
    protected $_name = [
        'productList' => 'ProductList',
    ];

    public function validate()
    {
        if (\is_array($this->productList)) {
            Model::validateArray($this->productList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productList) {
            if (\is_array($this->productList)) {
                $res['ProductList'] = [];
                $n1 = 0;
                foreach ($this->productList as $item1) {
                    $res['ProductList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ProductList'])) {
            if (!empty($map['ProductList'])) {
                $model->productList = [];
                $n1 = 0;
                foreach ($map['ProductList'] as $item1) {
                    $model->productList[$n1] = productList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
