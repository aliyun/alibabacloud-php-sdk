<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeJobStatusResponseBody\data;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeJobStatusResponseBody\data\errTaskList\productList;
use AlibabaCloud\Tea\Model;

class errTaskList extends Model
{
    /**
     * @description The list of product.
     *
     * @var productList[]
     */
    public $productList;

    /**
     * @description The account id of aliyun.
     *
     * @example 123XXXXX
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'productList' => 'ProductList',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productList) {
            $res['ProductList'] = [];
            if (null !== $this->productList && \is_array($this->productList)) {
                $n = 0;
                foreach ($this->productList as $item) {
                    $res['ProductList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errTaskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductList'])) {
            if (!empty($map['ProductList'])) {
                $model->productList = [];
                $n                  = 0;
                foreach ($map['ProductList'] as $item) {
                    $model->productList[$n++] = null !== $item ? productList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
