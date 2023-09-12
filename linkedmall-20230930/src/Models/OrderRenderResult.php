<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class OrderRenderResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canSell;

    /**
     * @var DeliveryInfo[]
     */
    public $deliveryInfoList;

    /**
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @example 库存为0
     *
     * @var string
     */
    public $message;

    /**
     * @var OrderProductResult[]
     */
    public $productList;
    protected $_name = [
        'canSell'          => 'canSell',
        'deliveryInfoList' => 'deliveryInfoList',
        'extInfo'          => 'extInfo',
        'message'          => 'message',
        'productList'      => 'productList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canSell) {
            $res['canSell'] = $this->canSell;
        }
        if (null !== $this->deliveryInfoList) {
            $res['deliveryInfoList'] = [];
            if (null !== $this->deliveryInfoList && \is_array($this->deliveryInfoList)) {
                $n = 0;
                foreach ($this->deliveryInfoList as $item) {
                    $res['deliveryInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->extInfo) {
            $res['extInfo'] = $this->extInfo;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
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
     * @return OrderRenderResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['canSell'])) {
            $model->canSell = $map['canSell'];
        }
        if (isset($map['deliveryInfoList'])) {
            if (!empty($map['deliveryInfoList'])) {
                $model->deliveryInfoList = [];
                $n                       = 0;
                foreach ($map['deliveryInfoList'] as $item) {
                    $model->deliveryInfoList[$n++] = null !== $item ? DeliveryInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['extInfo'])) {
            $model->extInfo = $map['extInfo'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['productList'])) {
            if (!empty($map['productList'])) {
                $model->productList = [];
                $n                  = 0;
                foreach ($map['productList'] as $item) {
                    $model->productList[$n++] = null !== $item ? OrderProductResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
