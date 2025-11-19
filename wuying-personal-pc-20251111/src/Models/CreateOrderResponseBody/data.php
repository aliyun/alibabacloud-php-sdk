<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateOrderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateOrderResponseBody\data\orderDetailList;

class data extends Model
{
    /**
     * @var orderDetailList[]
     */
    public $orderDetailList;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $payLink;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'orderDetailList' => 'OrderDetailList',
        'orderId' => 'OrderId',
        'payLink' => 'PayLink',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        if (\is_array($this->orderDetailList)) {
            Model::validateArray($this->orderDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderDetailList) {
            if (\is_array($this->orderDetailList)) {
                $res['OrderDetailList'] = [];
                $n1 = 0;
                foreach ($this->orderDetailList as $item1) {
                    $res['OrderDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->payLink) {
            $res['PayLink'] = $this->payLink;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['OrderDetailList'])) {
            if (!empty($map['OrderDetailList'])) {
                $model->orderDetailList = [];
                $n1 = 0;
                foreach ($map['OrderDetailList'] as $item1) {
                    $model->orderDetailList[$n1] = orderDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PayLink'])) {
            $model->payLink = $map['PayLink'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
