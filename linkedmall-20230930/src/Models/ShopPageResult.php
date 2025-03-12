<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ShopPageResult extends Model
{
    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;

    /**
     * @var ShopPageDataResult[]
     */
    public $shopList;

    /**
     * @example 24
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'requestId',
        'shopList'  => 'shopList',
        'total'     => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->shopList) {
            $res['shopList'] = [];
            if (null !== $this->shopList && \is_array($this->shopList)) {
                $n = 0;
                foreach ($this->shopList as $item) {
                    $res['shopList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ShopPageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['shopList'])) {
            if (!empty($map['shopList'])) {
                $model->shopList = [];
                $n               = 0;
                foreach ($map['shopList'] as $item) {
                    $model->shopList[$n++] = null !== $item ? ShopPageDataResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
