<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingDetailResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingDetailResponseBody\module\flightInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingDetailResponseBody\module\travelerInfoList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $alipayTradeNo;

    /**
     * @example 1002
     *
     * @var int
     */
    public $btripOrderId;

    /**
     * @example 37772
     *
     * @var int
     */
    public $btripSubOrderId;

    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @example chang123
     *
     * @var string
     */
    public $disSubOrderId;

    /**
     * @example {}
     *
     * @var string
     */
    public $extra;

    /**
     * @var flightInfoList[]
     */
    public $flightInfoList;

    /**
     * @example 2022-12-30 11:30:00
     *
     * @var string
     */
    public $lastPayTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $payStatus;

    /**
     * @example 2022-12-30 11:30:00
     *
     * @var string
     */
    public $payTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $settlePrice;

    /**
     * @var int
     */
    public $settleType;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalChangePrice;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalPrice;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalUpgradePrice;

    /**
     * @var travelerInfoList[]
     */
    public $travelerInfoList;
    protected $_name = [
        'alipayTradeNo'     => 'alipay_trade_no',
        'btripOrderId'      => 'btrip_order_id',
        'btripSubOrderId'   => 'btrip_sub_order_id',
        'disOrderId'        => 'dis_order_id',
        'disSubOrderId'     => 'dis_sub_order_id',
        'extra'             => 'extra',
        'flightInfoList'    => 'flight_info_list',
        'lastPayTime'       => 'last_pay_time',
        'payStatus'         => 'pay_status',
        'payTime'           => 'pay_time',
        'settlePrice'       => 'settle_price',
        'settleType'        => 'settle_type',
        'status'            => 'status',
        'totalChangePrice'  => 'total_change_price',
        'totalPrice'        => 'total_price',
        'totalUpgradePrice' => 'total_upgrade_price',
        'travelerInfoList'  => 'traveler_info_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alipayTradeNo) {
            $res['alipay_trade_no'] = $this->alipayTradeNo;
        }
        if (null !== $this->btripOrderId) {
            $res['btrip_order_id'] = $this->btripOrderId;
        }
        if (null !== $this->btripSubOrderId) {
            $res['btrip_sub_order_id'] = $this->btripSubOrderId;
        }
        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }
        if (null !== $this->disSubOrderId) {
            $res['dis_sub_order_id'] = $this->disSubOrderId;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->flightInfoList) {
            $res['flight_info_list'] = [];
            if (null !== $this->flightInfoList && \is_array($this->flightInfoList)) {
                $n = 0;
                foreach ($this->flightInfoList as $item) {
                    $res['flight_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lastPayTime) {
            $res['last_pay_time'] = $this->lastPayTime;
        }
        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }
        if (null !== $this->payTime) {
            $res['pay_time'] = $this->payTime;
        }
        if (null !== $this->settlePrice) {
            $res['settle_price'] = $this->settlePrice;
        }
        if (null !== $this->settleType) {
            $res['settle_type'] = $this->settleType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->totalChangePrice) {
            $res['total_change_price'] = $this->totalChangePrice;
        }
        if (null !== $this->totalPrice) {
            $res['total_price'] = $this->totalPrice;
        }
        if (null !== $this->totalUpgradePrice) {
            $res['total_upgrade_price'] = $this->totalUpgradePrice;
        }
        if (null !== $this->travelerInfoList) {
            $res['traveler_info_list'] = [];
            if (null !== $this->travelerInfoList && \is_array($this->travelerInfoList)) {
                $n = 0;
                foreach ($this->travelerInfoList as $item) {
                    $res['traveler_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['alipay_trade_no'])) {
            $model->alipayTradeNo = $map['alipay_trade_no'];
        }
        if (isset($map['btrip_order_id'])) {
            $model->btripOrderId = $map['btrip_order_id'];
        }
        if (isset($map['btrip_sub_order_id'])) {
            $model->btripSubOrderId = $map['btrip_sub_order_id'];
        }
        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }
        if (isset($map['dis_sub_order_id'])) {
            $model->disSubOrderId = $map['dis_sub_order_id'];
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }
        if (isset($map['flight_info_list'])) {
            if (!empty($map['flight_info_list'])) {
                $model->flightInfoList = [];
                $n                     = 0;
                foreach ($map['flight_info_list'] as $item) {
                    $model->flightInfoList[$n++] = null !== $item ? flightInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['last_pay_time'])) {
            $model->lastPayTime = $map['last_pay_time'];
        }
        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }
        if (isset($map['pay_time'])) {
            $model->payTime = $map['pay_time'];
        }
        if (isset($map['settle_price'])) {
            $model->settlePrice = $map['settle_price'];
        }
        if (isset($map['settle_type'])) {
            $model->settleType = $map['settle_type'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['total_change_price'])) {
            $model->totalChangePrice = $map['total_change_price'];
        }
        if (isset($map['total_price'])) {
            $model->totalPrice = $map['total_price'];
        }
        if (isset($map['total_upgrade_price'])) {
            $model->totalUpgradePrice = $map['total_upgrade_price'];
        }
        if (isset($map['traveler_info_list'])) {
            if (!empty($map['traveler_info_list'])) {
                $model->travelerInfoList = [];
                $n                       = 0;
                foreach ($map['traveler_info_list'] as $item) {
                    $model->travelerInfoList[$n++] = null !== $item ? travelerInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
