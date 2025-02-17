<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class OrderRenderResult extends Model
{
    /**
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
        if (\is_array($this->deliveryInfoList)) {
            Model::validateArray($this->deliveryInfoList);
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
        if (null !== $this->canSell) {
            $res['canSell'] = $this->canSell;
        }

        if (null !== $this->deliveryInfoList) {
            if (\is_array($this->deliveryInfoList)) {
                $res['deliveryInfoList'] = [];
                $n1                      = 0;
                foreach ($this->deliveryInfoList as $item1) {
                    $res['deliveryInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->extInfo) {
            if (\is_array($this->extInfo)) {
                $res['extInfo'] = [];
                foreach ($this->extInfo as $key1 => $value1) {
                    $res['extInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->productList) {
            if (\is_array($this->productList)) {
                $res['productList'] = [];
                $n1                 = 0;
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
        if (isset($map['canSell'])) {
            $model->canSell = $map['canSell'];
        }

        if (isset($map['deliveryInfoList'])) {
            if (!empty($map['deliveryInfoList'])) {
                $model->deliveryInfoList = [];
                $n1                      = 0;
                foreach ($map['deliveryInfoList'] as $item1) {
                    $model->deliveryInfoList[$n1++] = DeliveryInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['extInfo'])) {
            if (!empty($map['extInfo'])) {
                $model->extInfo = [];
                foreach ($map['extInfo'] as $key1 => $value1) {
                    $model->extInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['productList'])) {
            if (!empty($map['productList'])) {
                $model->productList = [];
                $n1                 = 0;
                foreach ($map['productList'] as $item1) {
                    $model->productList[$n1++] = OrderProductResult::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
