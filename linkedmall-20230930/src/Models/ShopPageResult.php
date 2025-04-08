<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ShopPageResult extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ShopPageDataResult[]
     */
    public $shopList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'requestId',
        'shopList' => 'shopList',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->shopList)) {
            Model::validateArray($this->shopList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->shopList) {
            if (\is_array($this->shopList)) {
                $res['shopList'] = [];
                $n1 = 0;
                foreach ($this->shopList as $item1) {
                    $res['shopList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['shopList'])) {
            if (!empty($map['shopList'])) {
                $model->shopList = [];
                $n1 = 0;
                foreach ($map['shopList'] as $item1) {
                    $model->shopList[$n1++] = ShopPageDataResult::fromMap($item1);
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
