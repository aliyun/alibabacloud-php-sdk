<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class PurchaseOrderRenderResult extends Model
{
    /**
     * @var AddressInfo[]
     */
    public $addressList;
    /**
     * @var bool
     */
    public $canSell;
    /**
     * @var mixed[]
     */
    public $extInfo;
    /**
     * @var string
     */
    public $message;
    /**
     * @var OrderRenderResult[]
     */
    public $orderList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var OrderRenderResult[]
     */
    public $unsellableOrderList;
    protected $_name = [
        'addressList'         => 'addressList',
        'canSell'             => 'canSell',
        'extInfo'             => 'extInfo',
        'message'             => 'message',
        'orderList'           => 'orderList',
        'requestId'           => 'requestId',
        'unsellableOrderList' => 'unsellableOrderList',
    ];

    public function validate()
    {
        if (\is_array($this->addressList)) {
            Model::validateArray($this->addressList);
        }
        if (\is_array($this->extInfo)) {
            Model::validateArray($this->extInfo);
        }
        if (\is_array($this->orderList)) {
            Model::validateArray($this->orderList);
        }
        if (\is_array($this->unsellableOrderList)) {
            Model::validateArray($this->unsellableOrderList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressList) {
            if (\is_array($this->addressList)) {
                $res['addressList'] = [];
                $n1                 = 0;
                foreach ($this->addressList as $item1) {
                    $res['addressList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->canSell) {
            $res['canSell'] = $this->canSell;
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

        if (null !== $this->orderList) {
            if (\is_array($this->orderList)) {
                $res['orderList'] = [];
                $n1               = 0;
                foreach ($this->orderList as $item1) {
                    $res['orderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->unsellableOrderList) {
            if (\is_array($this->unsellableOrderList)) {
                $res['unsellableOrderList'] = [];
                $n1                         = 0;
                foreach ($this->unsellableOrderList as $item1) {
                    $res['unsellableOrderList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['addressList'])) {
            if (!empty($map['addressList'])) {
                $model->addressList = [];
                $n1                 = 0;
                foreach ($map['addressList'] as $item1) {
                    $model->addressList[$n1++] = AddressInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['canSell'])) {
            $model->canSell = $map['canSell'];
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

        if (isset($map['orderList'])) {
            if (!empty($map['orderList'])) {
                $model->orderList = [];
                $n1               = 0;
                foreach ($map['orderList'] as $item1) {
                    $model->orderList[$n1++] = OrderRenderResult::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['unsellableOrderList'])) {
            if (!empty($map['unsellableOrderList'])) {
                $model->unsellableOrderList = [];
                $n1                         = 0;
                foreach ($map['unsellableOrderList'] as $item1) {
                    $model->unsellableOrderList[$n1++] = OrderRenderResult::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
