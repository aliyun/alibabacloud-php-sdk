<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderInfoQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class baseOrderInfo extends Model
{
    /**
     * @var string
     */
    public $bookMode;

    /**
     * @var string
     */
    public $bookerId;

    /**
     * @var string
     */
    public $bookerName;

    /**
     * @var string
     */
    public $btripCorpId;

    /**
     * @var int
     */
    public $category;

    /**
     * @var int
     */
    public $checkInTime;

    /**
     * @var int
     */
    public $checkOutTime;

    /**
     * @var bool
     */
    public $isAgreementPrice;

    /**
     * @var int
     */
    public $nights;

    /**
     * @var int
     */
    public $orderCreateTime;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $orderStatusDesc;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var int
     */
    public $payTime;

    /**
     * @var int
     */
    public $roomNum;

    /**
     * @var int
     */
    public $settleType;

    /**
     * @var int
     */
    public $tripMode;
    protected $_name = [
        'bookMode' => 'book_mode',
        'bookerId' => 'booker_id',
        'bookerName' => 'booker_name',
        'btripCorpId' => 'btrip_corp_id',
        'category' => 'category',
        'checkInTime' => 'check_in_time',
        'checkOutTime' => 'check_out_time',
        'isAgreementPrice' => 'is_agreement_price',
        'nights' => 'nights',
        'orderCreateTime' => 'order_create_time',
        'orderId' => 'order_id',
        'orderStatus' => 'order_status',
        'orderStatusDesc' => 'order_status_desc',
        'payStatus' => 'pay_status',
        'payTime' => 'pay_time',
        'roomNum' => 'room_num',
        'settleType' => 'settle_type',
        'tripMode' => 'trip_mode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookMode) {
            $res['book_mode'] = $this->bookMode;
        }

        if (null !== $this->bookerId) {
            $res['booker_id'] = $this->bookerId;
        }

        if (null !== $this->bookerName) {
            $res['booker_name'] = $this->bookerName;
        }

        if (null !== $this->btripCorpId) {
            $res['btrip_corp_id'] = $this->btripCorpId;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->checkInTime) {
            $res['check_in_time'] = $this->checkInTime;
        }

        if (null !== $this->checkOutTime) {
            $res['check_out_time'] = $this->checkOutTime;
        }

        if (null !== $this->isAgreementPrice) {
            $res['is_agreement_price'] = $this->isAgreementPrice;
        }

        if (null !== $this->nights) {
            $res['nights'] = $this->nights;
        }

        if (null !== $this->orderCreateTime) {
            $res['order_create_time'] = $this->orderCreateTime;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }

        if (null !== $this->orderStatusDesc) {
            $res['order_status_desc'] = $this->orderStatusDesc;
        }

        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }

        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }

        if (null !== $this->roomNum) {
            $res['room_num'] = $this->roomNum;
        }

        if (null !== $this->settleType) {
            $res['settle_type'] = $this->settleType;
        }

        if (null !== $this->tripMode) {
            $res['trip_mode'] = $this->tripMode;
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
        if (isset($map['book_mode'])) {
            $model->bookMode = $map['book_mode'];
        }

        if (isset($map['booker_id'])) {
            $model->bookerId = $map['booker_id'];
        }

        if (isset($map['booker_name'])) {
            $model->bookerName = $map['booker_name'];
        }

        if (isset($map['btrip_corp_id'])) {
            $model->btripCorpId = $map['btrip_corp_id'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['check_in_time'])) {
            $model->checkInTime = $map['check_in_time'];
        }

        if (isset($map['check_out_time'])) {
            $model->checkOutTime = $map['check_out_time'];
        }

        if (isset($map['is_agreement_price'])) {
            $model->isAgreementPrice = $map['is_agreement_price'];
        }

        if (isset($map['nights'])) {
            $model->nights = $map['nights'];
        }

        if (isset($map['order_create_time'])) {
            $model->orderCreateTime = $map['order_create_time'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }

        if (isset($map['order_status_desc'])) {
            $model->orderStatusDesc = $map['order_status_desc'];
        }

        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }

        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }

        if (isset($map['room_num'])) {
            $model->roomNum = $map['room_num'];
        }

        if (isset($map['settle_type'])) {
            $model->settleType = $map['settle_type'];
        }

        if (isset($map['trip_mode'])) {
            $model->tripMode = $map['trip_mode'];
        }

        return $model;
    }
}
