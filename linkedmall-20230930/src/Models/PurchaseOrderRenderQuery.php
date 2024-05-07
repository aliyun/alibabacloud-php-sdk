<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class PurchaseOrderRenderQuery extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test1234567
     *
     * @var string
     */
    public $buyerId;

    /**
     * @description This parameter is required.
     *
     * @var AddressInfo
     */
    public $deliveryAddress;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @description This parameter is required.
     *
     * @var OrderRenderProductDTO[]
     */
    public $productList;
    protected $_name = [
        'buyerId'         => 'buyerId',
        'deliveryAddress' => 'deliveryAddress',
        'extInfo'         => 'extInfo',
        'productList'     => 'productList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyerId) {
            $res['buyerId'] = $this->buyerId;
        }
        if (null !== $this->deliveryAddress) {
            $res['deliveryAddress'] = null !== $this->deliveryAddress ? $this->deliveryAddress->toMap() : null;
        }
        if (null !== $this->extInfo) {
            $res['extInfo'] = $this->extInfo;
        }
        if (null !== $this->productList) {
            $res['productList'] = [];
            if (null !== $this->productList && \is_array($this->productList)) {
                $n = 0;
                foreach ($this->productList as $item) {
                    $res['productList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseOrderRenderQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buyerId'])) {
            $model->buyerId = $map['buyerId'];
        }
        if (isset($map['deliveryAddress'])) {
            $model->deliveryAddress = AddressInfo::fromMap($map['deliveryAddress']);
        }
        if (isset($map['extInfo'])) {
            $model->extInfo = $map['extInfo'];
        }
        if (isset($map['productList'])) {
            if (!empty($map['productList'])) {
                $model->productList = [];
                $n                  = 0;
                foreach ($map['productList'] as $item) {
                    $model->productList[$n++] = null !== $item ? OrderRenderProductDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
