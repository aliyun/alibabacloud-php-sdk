<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data\techMore\productList;

class techMore extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var productList[]
     */
    public $productList;
    protected $_name = [
        'groupName' => 'GroupName',
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

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
