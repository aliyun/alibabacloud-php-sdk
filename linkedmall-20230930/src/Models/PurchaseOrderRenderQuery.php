<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class PurchaseOrderRenderQuery extends Model
{
    /**
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
     * @var OrderRenderProductDTO[]
     */
    public $productList;
    protected $_name = [
        'buyerId' => 'buyerId',
        'deliveryAddress' => 'deliveryAddress',
        'extInfo' => 'extInfo',
        'productList' => 'productList',
    ];

    public function validate()
    {
        if (null !== $this->deliveryAddress) {
            $this->deliveryAddress->validate();
        }
        if (\is_array($this->extInfo)) {
            Model::validateArray($this->extInfo);
        }
        if (\is_array($this->productList)) {
            Model::validateArray($this->productList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buyerId) {
            $res['buyerId'] = $this->buyerId;
        }

        if (null !== $this->deliveryAddress) {
            $res['deliveryAddress'] = null !== $this->deliveryAddress ? $this->deliveryAddress->toArray($noStream) : $this->deliveryAddress;
        }

        if (null !== $this->extInfo) {
            if (\is_array($this->extInfo)) {
                $res['extInfo'] = [];
                foreach ($this->extInfo as $key1 => $value1) {
                    $res['extInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->productList) {
            if (\is_array($this->productList)) {
                $res['productList'] = [];
                $n1 = 0;
                foreach ($this->productList as $item1) {
                    $res['productList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['buyerId'])) {
            $model->buyerId = $map['buyerId'];
        }

        if (isset($map['deliveryAddress'])) {
            $model->deliveryAddress = AddressInfo::fromMap($map['deliveryAddress']);
        }

        if (isset($map['extInfo'])) {
            if (!empty($map['extInfo'])) {
                $model->extInfo = [];
                foreach ($map['extInfo'] as $key1 => $value1) {
                    $model->extInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['productList'])) {
            if (!empty($map['productList'])) {
                $model->productList = [];
                $n1 = 0;
                foreach ($map['productList'] as $item1) {
                    $model->productList[$n1++] = OrderRenderProductDTO::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
