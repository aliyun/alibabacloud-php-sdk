<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\baseOrderInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\bookerInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\hotelInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\hotelOrderFeeInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\hotelOrderRefundInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module\roomTraverInfo;
use AlibabaCloud\Tea\Model;

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
        'baseOrderInfo'        => 'base_order_info',
        'bookerInfo'           => 'booker_info',
        'hotelInfo'            => 'hotel_info',
        'hotelOrderFeeInfo'    => 'hotel_order_fee_info',
        'hotelOrderRefundInfo' => 'hotel_order_refund_info',
        'roomTraverInfo'       => 'room_traver_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseOrderInfo) {
            $res['base_order_info'] = null !== $this->baseOrderInfo ? $this->baseOrderInfo->toMap() : null;
        }
        if (null !== $this->bookerInfo) {
            $res['booker_info'] = null !== $this->bookerInfo ? $this->bookerInfo->toMap() : null;
        }
        if (null !== $this->hotelInfo) {
            $res['hotel_info'] = null !== $this->hotelInfo ? $this->hotelInfo->toMap() : null;
        }
        if (null !== $this->hotelOrderFeeInfo) {
            $res['hotel_order_fee_info'] = null !== $this->hotelOrderFeeInfo ? $this->hotelOrderFeeInfo->toMap() : null;
        }
        if (null !== $this->hotelOrderRefundInfo) {
            $res['hotel_order_refund_info'] = [];
            if (null !== $this->hotelOrderRefundInfo && \is_array($this->hotelOrderRefundInfo)) {
                $n = 0;
                foreach ($this->hotelOrderRefundInfo as $item) {
                    $res['hotel_order_refund_info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roomTraverInfo) {
            $res['room_traver_info'] = [];
            if (null !== $this->roomTraverInfo && \is_array($this->roomTraverInfo)) {
                $n = 0;
                foreach ($this->roomTraverInfo as $item) {
                    $res['room_traver_info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
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
                $n                           = 0;
                foreach ($map['hotel_order_refund_info'] as $item) {
                    $model->hotelOrderRefundInfo[$n++] = null !== $item ? hotelOrderRefundInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['room_traver_info'])) {
            if (!empty($map['room_traver_info'])) {
                $model->roomTraverInfo = [];
                $n                     = 0;
                foreach ($map['room_traver_info'] as $item) {
                    $model->roomTraverInfo[$n++] = null !== $item ? roomTraverInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
