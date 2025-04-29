<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\baseOrderInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\bookerInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\hotelInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\hotelOrderFeeInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\hotelOrderRefundInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo;

class module extends Model
{
    /**
     * @var baseOrderInfo
     */
    public $baseOrderInfo;

    /**
     * @var bookerInfo
     */
    public $bookerInfo;

    /**
     * @var hotelInfo
     */
    public $hotelInfo;

    /**
     * @var hotelOrderFeeInfo
     */
    public $hotelOrderFeeInfo;

    /**
     * @var hotelOrderRefundInfo[]
     */
    public $hotelOrderRefundInfo;

    /**
     * @var roomTraverInfo[]
     */
    public $roomTraverInfo;
    protected $_name = [
        'baseOrderInfo' => 'base_order_info',
        'bookerInfo' => 'booker_info',
        'hotelInfo' => 'hotel_info',
        'hotelOrderFeeInfo' => 'hotel_order_fee_info',
        'hotelOrderRefundInfo' => 'hotel_order_refund_info',
        'roomTraverInfo' => 'room_traver_info',
    ];

    public function validate()
    {
        if (null !== $this->baseOrderInfo) {
            $this->baseOrderInfo->validate();
        }
        if (null !== $this->bookerInfo) {
            $this->bookerInfo->validate();
        }
        if (null !== $this->hotelInfo) {
            $this->hotelInfo->validate();
        }
        if (null !== $this->hotelOrderFeeInfo) {
            $this->hotelOrderFeeInfo->validate();
        }
        if (\is_array($this->hotelOrderRefundInfo)) {
            Model::validateArray($this->hotelOrderRefundInfo);
        }
        if (\is_array($this->roomTraverInfo)) {
            Model::validateArray($this->roomTraverInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseOrderInfo) {
            $res['base_order_info'] = null !== $this->baseOrderInfo ? $this->baseOrderInfo->toArray($noStream) : $this->baseOrderInfo;
        }

        if (null !== $this->bookerInfo) {
            $res['booker_info'] = null !== $this->bookerInfo ? $this->bookerInfo->toArray($noStream) : $this->bookerInfo;
        }

        if (null !== $this->hotelInfo) {
            $res['hotel_info'] = null !== $this->hotelInfo ? $this->hotelInfo->toArray($noStream) : $this->hotelInfo;
        }

        if (null !== $this->hotelOrderFeeInfo) {
            $res['hotel_order_fee_info'] = null !== $this->hotelOrderFeeInfo ? $this->hotelOrderFeeInfo->toArray($noStream) : $this->hotelOrderFeeInfo;
        }

        if (null !== $this->hotelOrderRefundInfo) {
            if (\is_array($this->hotelOrderRefundInfo)) {
                $res['hotel_order_refund_info'] = [];
                $n1 = 0;
                foreach ($this->hotelOrderRefundInfo as $item1) {
                    $res['hotel_order_refund_info'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->roomTraverInfo) {
            if (\is_array($this->roomTraverInfo)) {
                $res['room_traver_info'] = [];
                $n1 = 0;
                foreach ($this->roomTraverInfo as $item1) {
                    $res['room_traver_info'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['base_order_info'])) {
            $model->baseOrderInfo = baseOrderInfo::fromMap($map['base_order_info']);
        }

        if (isset($map['booker_info'])) {
            $model->bookerInfo = bookerInfo::fromMap($map['booker_info']);
        }

        if (isset($map['hotel_info'])) {
            $model->hotelInfo = hotelInfo::fromMap($map['hotel_info']);
        }

        if (isset($map['hotel_order_fee_info'])) {
            $model->hotelOrderFeeInfo = hotelOrderFeeInfo::fromMap($map['hotel_order_fee_info']);
        }

        if (isset($map['hotel_order_refund_info'])) {
            if (!empty($map['hotel_order_refund_info'])) {
                $model->hotelOrderRefundInfo = [];
                $n1 = 0;
                foreach ($map['hotel_order_refund_info'] as $item1) {
                    $model->hotelOrderRefundInfo[$n1++] = hotelOrderRefundInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['room_traver_info'])) {
            if (!empty($map['room_traver_info'])) {
                $model->roomTraverInfo = [];
                $n1 = 0;
                foreach ($map['room_traver_info'] as $item1) {
                    $model->roomTraverInfo[$n1++] = roomTraverInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
