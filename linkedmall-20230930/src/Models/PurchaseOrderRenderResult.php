<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class PurchaseOrderRenderResult extends Model
{
    /**
     * @var AddressInfo[]
     */
    public $addressList;

    /**
     * @example true
     *
     * @var bool
     */
    public $canSell;

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
     * @var OrderRenderResult[]
     */
    public $orderList;

    /**
     * @example 3239281273464326823
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressList) {
            $res['addressList'] = [];
            if (null !== $this->addressList && \is_array($this->addressList)) {
                $n = 0;
                foreach ($this->addressList as $item) {
                    $res['addressList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->canSell) {
            $res['canSell'] = $this->canSell;
        }
        if (null !== $this->extInfo) {
            $res['extInfo'] = $this->extInfo;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->orderList) {
            $res['orderList'] = [];
            if (null !== $this->orderList && \is_array($this->orderList)) {
                $n = 0;
                foreach ($this->orderList as $item) {
                    $res['orderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->unsellableOrderList) {
            $res['unsellableOrderList'] = [];
            if (null !== $this->unsellableOrderList && \is_array($this->unsellableOrderList)) {
                $n = 0;
                foreach ($this->unsellableOrderList as $item) {
                    $res['unsellableOrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseOrderRenderResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addressList'])) {
            if (!empty($map['addressList'])) {
                $model->addressList = [];
                $n                  = 0;
                foreach ($map['addressList'] as $item) {
                    $model->addressList[$n++] = null !== $item ? AddressInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['canSell'])) {
            $model->canSell = $map['canSell'];
        }
        if (isset($map['extInfo'])) {
            $model->extInfo = $map['extInfo'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['orderList'])) {
            if (!empty($map['orderList'])) {
                $model->orderList = [];
                $n                = 0;
                foreach ($map['orderList'] as $item) {
                    $model->orderList[$n++] = null !== $item ? OrderRenderResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['unsellableOrderList'])) {
            if (!empty($map['unsellableOrderList'])) {
                $model->unsellableOrderList = [];
                $n                          = 0;
                foreach ($map['unsellableOrderList'] as $item) {
                    $model->unsellableOrderList[$n++] = null !== $item ? OrderRenderResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
