<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data;

use AlibabaCloud\SDK\Workorder\V20200326\Models\ListProductsResponseBody\data\techMore\productList;
use AlibabaCloud\Tea\Model;

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
        'groupName'   => 'GroupName',
        'productList' => 'ProductList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->productList) {
            $res['ProductList'] = [];
            if (null !== $this->productList && \is_array($this->productList)) {
                $n = 0;
                foreach ($this->productList as $item) {
                    $res['ProductList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return techMore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ProductList'])) {
            if (!empty($map['ProductList'])) {
                $model->productList = [];
                $n                  = 0;
                foreach ($map['ProductList'] as $item) {
                    $model->productList[$n++] = null !== $item ? productList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
