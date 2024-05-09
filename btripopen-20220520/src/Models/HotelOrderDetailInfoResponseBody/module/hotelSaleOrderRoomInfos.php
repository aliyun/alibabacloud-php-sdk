<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module;

use AlibabaCloud\Tea\Model;

class hotelSaleOrderRoomInfos extends Model
{
    /**
     * @var string
     */
    public $checkinDate;

    /**
     * @var string
     */
    public $checkoutDate;

    /**
     * @var int
     */
    public $penalSum;

    /**
     * @var string
     */
    public $realCheckoutDate;

    /**
     * @var int
     */
    public $refundStatus;

    /**
     * @var int
     */
    public $roomNo;

    /**
     * @var int
     */
    public $roomPrice;

    /**
     * @var int
     */
    public $roomRefundPrice;

    /**
     * @var string
     */
    public $travelerId;

    /**
     * @var string
     */
    public $travelerName;
    protected $_name = [
        'checkinDate'      => 'checkin_date',
        'checkoutDate'     => 'checkout_date',
        'penalSum'         => 'penal_sum',
        'realCheckoutDate' => 'real_checkout_date',
        'refundStatus'     => 'refund_status',
        'roomNo'           => 'room_no',
        'roomPrice'        => 'room_price',
        'roomRefundPrice'  => 'room_refund_price',
        'travelerId'       => 'traveler_id',
        'travelerName'     => 'traveler_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkinDate) {
            $res['checkin_date'] = $this->checkinDate;
        }
        if (null !== $this->checkoutDate) {
            $res['checkout_date'] = $this->checkoutDate;
        }
        if (null !== $this->penalSum) {
            $res['penal_sum'] = $this->penalSum;
        }
        if (null !== $this->realCheckoutDate) {
            $res['real_checkout_date'] = $this->realCheckoutDate;
        }
        if (null !== $this->refundStatus) {
            $res['refund_status'] = $this->refundStatus;
        }
        if (null !== $this->roomNo) {
            $res['room_no'] = $this->roomNo;
        }
        if (null !== $this->roomPrice) {
            $res['room_price'] = $this->roomPrice;
        }
        if (null !== $this->roomRefundPrice) {
            $res['room_refund_price'] = $this->roomRefundPrice;
        }
        if (null !== $this->travelerId) {
            $res['traveler_id'] = $this->travelerId;
        }
        if (null !== $this->travelerName) {
            $res['traveler_name'] = $this->travelerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hotelSaleOrderRoomInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkin_date'])) {
            $model->checkinDate = $map['checkin_date'];
        }
        if (isset($map['checkout_date'])) {
            $model->checkoutDate = $map['checkout_date'];
        }
        if (isset($map['penal_sum'])) {
            $model->penalSum = $map['penal_sum'];
        }
        if (isset($map['real_checkout_date'])) {
            $model->realCheckoutDate = $map['real_checkout_date'];
        }
        if (isset($map['refund_status'])) {
            $model->refundStatus = $map['refund_status'];
        }
        if (isset($map['room_no'])) {
            $model->roomNo = $map['room_no'];
        }
        if (isset($map['room_price'])) {
            $model->roomPrice = $map['room_price'];
        }
        if (isset($map['room_refund_price'])) {
            $model->roomRefundPrice = $map['room_refund_price'];
        }
        if (isset($map['traveler_id'])) {
            $model->travelerId = $map['traveler_id'];
        }
        if (isset($map['traveler_name'])) {
            $model->travelerName = $map['traveler_name'];
        }

        return $model;
    }
}
