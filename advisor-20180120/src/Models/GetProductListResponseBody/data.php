<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\GetProductListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Advisor\V20180120\Models\GetProductListResponseBody\data\productList;

class data extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var productList[]
     */
    public $productList;
    protected $_name = [
        'category' => 'Category',
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
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->productList) {
            if (\is_array($this->productList)) {
                $res['ProductList'] = [];
                $n1 = 0;
                foreach ($this->productList as $item1) {
                    $res['ProductList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ProductList'])) {
            if (!empty($map['ProductList'])) {
                $model->productList = [];
                $n1 = 0;
                foreach ($map['ProductList'] as $item1) {
                    $model->productList[$n1++] = productList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
