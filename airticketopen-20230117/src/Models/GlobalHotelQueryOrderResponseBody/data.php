<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\itemInfo;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\payment;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\refundOrders;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\roomStays;

class data extends Model
{
    /**
     * @var string
     */
    public $buyerId;

    /**
     * @var string
     */
    public $externalOrderNo;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var itemInfo
     */
    public $itemInfo;

    /**
     * @var string
     */
    public $orderNo;

    /**
     * @var payment
     */
    public $payment;

    /**
     * @var refundOrders[]
     */
    public $refundOrders;

    /**
     * @var roomStays[]
     */
    public $roomStays;

    /**
     * @var string
     */
    public $salesChannel;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'buyerId' => 'BuyerId',
        'externalOrderNo' => 'ExternalOrderNo',
        'gmtCreate' => 'GmtCreate',
        'itemInfo' => 'ItemInfo',
        'orderNo' => 'OrderNo',
        'payment' => 'Payment',
        'refundOrders' => 'RefundOrders',
        'roomStays' => 'RoomStays',
        'salesChannel' => 'SalesChannel',
        'status' => 'Status',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        if (null !== $this->itemInfo) {
            $this->itemInfo->validate();
        }
        if (null !== $this->payment) {
            $this->payment->validate();
        }
        if (\is_array($this->refundOrders)) {
            Model::validateArray($this->refundOrders);
        }
        if (\is_array($this->roomStays)) {
            Model::validateArray($this->roomStays);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buyerId) {
            $res['BuyerId'] = $this->buyerId;
        }

        if (null !== $this->externalOrderNo) {
            $res['ExternalOrderNo'] = $this->externalOrderNo;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->itemInfo) {
            $res['ItemInfo'] = null !== $this->itemInfo ? $this->itemInfo->toArray($noStream) : $this->itemInfo;
        }

        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }

        if (null !== $this->payment) {
            $res['Payment'] = null !== $this->payment ? $this->payment->toArray($noStream) : $this->payment;
        }

        if (null !== $this->refundOrders) {
            if (\is_array($this->refundOrders)) {
                $res['RefundOrders'] = [];
                $n1 = 0;
                foreach ($this->refundOrders as $item1) {
                    $res['RefundOrders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roomStays) {
            if (\is_array($this->roomStays)) {
                $res['RoomStays'] = [];
                $n1 = 0;
                foreach ($this->roomStays as $item1) {
                    $res['RoomStays'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->salesChannel) {
            $res['SalesChannel'] = $this->salesChannel;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
        if (isset($map['BuyerId'])) {
            $model->buyerId = $map['BuyerId'];
        }

        if (isset($map['ExternalOrderNo'])) {
            $model->externalOrderNo = $map['ExternalOrderNo'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['ItemInfo'])) {
            $model->itemInfo = itemInfo::fromMap($map['ItemInfo']);
        }

        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }

        if (isset($map['Payment'])) {
            $model->payment = payment::fromMap($map['Payment']);
        }

        if (isset($map['RefundOrders'])) {
            if (!empty($map['RefundOrders'])) {
                $model->refundOrders = [];
                $n1 = 0;
                foreach ($map['RefundOrders'] as $item1) {
                    $model->refundOrders[$n1] = refundOrders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RoomStays'])) {
            if (!empty($map['RoomStays'])) {
                $model->roomStays = [];
                $n1 = 0;
                foreach ($map['RoomStays'] as $item1) {
                    $model->roomStays[$n1] = roomStays::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SalesChannel'])) {
            $model->salesChannel = $map['SalesChannel'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
