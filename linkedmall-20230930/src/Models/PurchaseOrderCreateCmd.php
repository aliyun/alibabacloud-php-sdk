<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class PurchaseOrderCreateCmd extends Model
{
    /**
     * @example 买家id
     *
     * @var string
     */
    public $buyerId;

    /**
     * @var AddressInfo
     */
    public $deliveryAddress;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @example outer123456
     *
     * @var string
     */
    public $outerPurchaseOrderId;

    /**
     * @var ProductDTO[]
     */
    public $productList;
    protected $_name = [
        'buyerId'              => 'buyerId',
        'deliveryAddress'      => 'deliveryAddress',
        'extInfo'              => 'extInfo',
        'outerPurchaseOrderId' => 'outerPurchaseOrderId',
        'productList'          => 'productList',
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
        if (null !== $this->outerPurchaseOrderId) {
            $res['outerPurchaseOrderId'] = $this->outerPurchaseOrderId;
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
     * @return PurchaseOrderCreateCmd
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
        if (isset($map['outerPurchaseOrderId'])) {
            $model->outerPurchaseOrderId = $map['outerPurchaseOrderId'];
        }
        if (isset($map['productList'])) {
            if (!empty($map['productList'])) {
                $model->productList = [];
                $n                  = 0;
                foreach ($map['productList'] as $item) {
                    $model->productList[$n++] = null !== $item ? ProductDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
