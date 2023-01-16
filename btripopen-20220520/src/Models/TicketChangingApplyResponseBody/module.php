<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingApplyResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $bookingChangedTotalFee;

    /**
     * @example 1000
     *
     * @var int
     */
    public $bookingOriginTotalFee;

    /**
     * @example true
     *
     * @var bool
     */
    public $bookingPriceChanged;

    /**
     * @example 1234
     *
     * @var int
     */
    public $btripOrderId;

    /**
     * @example 1234
     *
     * @var int
     */
    public $btripSubOrderId;

    /**
     * @example true
     *
     * @var bool
     */
    public $canPay;

    /**
     * @example 1000
     *
     * @var int
     */
    public $changeFee;

    /**
     * @example 0000-00-00 00:00:00
     *
     * @var string
     */
    public $deadlineTime;

    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @example mid112
     *
     * @var string
     */
    public $disSubOrderId;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxRetryTimes;

    /**
     * @example 1000
     *
     * @var int
     */
    public $nextRetryInterval;

    /**
     * @example true
     *
     * @var bool
     */
    public $retry;

    /**
     * @var string
     */
    public $retryClientTips;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 1000
     *
     * @var int
     */
    public $upgradeFee;
    protected $_name = [
        'bookingChangedTotalFee' => 'booking_changed_total_fee',
        'bookingOriginTotalFee'  => 'booking_origin_total_fee',
        'bookingPriceChanged'    => 'booking_price_changed',
        'btripOrderId'           => 'btrip_order_id',
        'btripSubOrderId'        => 'btrip_sub_order_id',
        'canPay'                 => 'can_pay',
        'changeFee'              => 'change_fee',
        'deadlineTime'           => 'deadline_time',
        'disOrderId'             => 'dis_order_id',
        'disSubOrderId'          => 'dis_sub_order_id',
        'maxRetryTimes'          => 'max_retry_times',
        'nextRetryInterval'      => 'next_retry_interval',
        'retry'                  => 'retry',
        'retryClientTips'        => 'retry_client_tips',
        'status'                 => 'status',
        'upgradeFee'             => 'upgrade_fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bookingChangedTotalFee) {
            $res['booking_changed_total_fee'] = $this->bookingChangedTotalFee;
        }
        if (null !== $this->bookingOriginTotalFee) {
            $res['booking_origin_total_fee'] = $this->bookingOriginTotalFee;
        }
        if (null !== $this->bookingPriceChanged) {
            $res['booking_price_changed'] = $this->bookingPriceChanged;
        }
        if (null !== $this->btripOrderId) {
            $res['btrip_order_id'] = $this->btripOrderId;
        }
        if (null !== $this->btripSubOrderId) {
            $res['btrip_sub_order_id'] = $this->btripSubOrderId;
        }
        if (null !== $this->canPay) {
            $res['can_pay'] = $this->canPay;
        }
        if (null !== $this->changeFee) {
            $res['change_fee'] = $this->changeFee;
        }
        if (null !== $this->deadlineTime) {
            $res['deadline_time'] = $this->deadlineTime;
        }
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->disSubOrderId) {
            $res['dis_sub_order_id'] = $this->disSubOrderId;
        }
        if (null !== $this->maxRetryTimes) {
            $res['max_retry_times'] = $this->maxRetryTimes;
        }
        if (null !== $this->nextRetryInterval) {
            $res['next_retry_interval'] = $this->nextRetryInterval;
        }
        if (null !== $this->retry) {
            $res['retry'] = $this->retry;
        }
        if (null !== $this->retryClientTips) {
            $res['retry_client_tips'] = $this->retryClientTips;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->upgradeFee) {
            $res['upgrade_fee'] = $this->upgradeFee;
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
        if (isset($map['booking_changed_total_fee'])) {
            $model->bookingChangedTotalFee = $map['booking_changed_total_fee'];
        }
        if (isset($map['booking_origin_total_fee'])) {
            $model->bookingOriginTotalFee = $map['booking_origin_total_fee'];
        }
        if (isset($map['booking_price_changed'])) {
            $model->bookingPriceChanged = $map['booking_price_changed'];
        }
        if (isset($map['btrip_order_id'])) {
            $model->btripOrderId = $map['btrip_order_id'];
        }
        if (isset($map['btrip_sub_order_id'])) {
            $model->btripSubOrderId = $map['btrip_sub_order_id'];
        }
        if (isset($map['can_pay'])) {
            $model->canPay = $map['can_pay'];
        }
        if (isset($map['change_fee'])) {
            $model->changeFee = $map['change_fee'];
        }
        if (isset($map['deadline_time'])) {
            $model->deadlineTime = $map['deadline_time'];
        }
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['dis_sub_order_id'])) {
            $model->disSubOrderId = $map['dis_sub_order_id'];
        }
        if (isset($map['max_retry_times'])) {
            $model->maxRetryTimes = $map['max_retry_times'];
        }
        if (isset($map['next_retry_interval'])) {
            $model->nextRetryInterval = $map['next_retry_interval'];
        }
        if (isset($map['retry'])) {
            $model->retry = $map['retry'];
        }
        if (isset($map['retry_client_tips'])) {
            $model->retryClientTips = $map['retry_client_tips'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['upgrade_fee'])) {
            $model->upgradeFee = $map['upgrade_fee'];
        }

        return $model;
    }
}
