<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightRefundApplyShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $corpRefundPrice;

    /**
     * @var string
     */
    public $disOrderId;

    /**
     * @var string
     */
    public $disSubOrderId;

    /**
     * @var string
     */
    public $displayRefundMoney;

    /**
     * @var string
     */
    public $extraShrink;

    /**
     * @var int
     */
    public $isVoluntary;

    /**
     * @var string
     */
    public $itemUnitIds;

    /**
     * @var string
     */
    public $passengerSegmentInfoListShrink;

    /**
     * @var int
     */
    public $personalRefundPrice;

    /**
     * @var string
     */
    public $reasonDetail;

    /**
     * @var int
     */
    public $reasonType;

    /**
     * @var string
     */
    public $refundVoucherInfoShrink;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $totalRefundPrice;
    protected $_name = [
        'corpRefundPrice' => 'corp_refund_price',
        'disOrderId' => 'dis_order_id',
        'disSubOrderId' => 'dis_sub_order_id',
        'displayRefundMoney' => 'display_refund_money',
        'extraShrink' => 'extra',
        'isVoluntary' => 'is_voluntary',
        'itemUnitIds' => 'item_unit_ids',
        'passengerSegmentInfoListShrink' => 'passenger_segment_info_list',
        'personalRefundPrice' => 'personal_refund_price',
        'reasonDetail' => 'reason_detail',
        'reasonType' => 'reason_type',
        'refundVoucherInfoShrink' => 'refund_voucher_info',
        'sessionId' => 'session_id',
        'totalRefundPrice' => 'total_refund_price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpRefundPrice) {
            $res['corp_refund_price'] = $this->corpRefundPrice;
        }

        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }

        if (null !== $this->disSubOrderId) {
            $res['dis_sub_order_id'] = $this->disSubOrderId;
        }

        if (null !== $this->displayRefundMoney) {
            $res['display_refund_money'] = $this->displayRefundMoney;
        }

        if (null !== $this->extraShrink) {
            $res['extra'] = $this->extraShrink;
        }

        if (null !== $this->isVoluntary) {
            $res['is_voluntary'] = $this->isVoluntary;
        }

        if (null !== $this->itemUnitIds) {
            $res['item_unit_ids'] = $this->itemUnitIds;
        }

        if (null !== $this->passengerSegmentInfoListShrink) {
            $res['passenger_segment_info_list'] = $this->passengerSegmentInfoListShrink;
        }

        if (null !== $this->personalRefundPrice) {
            $res['personal_refund_price'] = $this->personalRefundPrice;
        }

        if (null !== $this->reasonDetail) {
            $res['reason_detail'] = $this->reasonDetail;
        }

        if (null !== $this->reasonType) {
            $res['reason_type'] = $this->reasonType;
        }

        if (null !== $this->refundVoucherInfoShrink) {
            $res['refund_voucher_info'] = $this->refundVoucherInfoShrink;
        }

        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }

        if (null !== $this->totalRefundPrice) {
            $res['total_refund_price'] = $this->totalRefundPrice;
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
        if (isset($map['corp_refund_price'])) {
            $model->corpRefundPrice = $map['corp_refund_price'];
        }

        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }

        if (isset($map['dis_sub_order_id'])) {
            $model->disSubOrderId = $map['dis_sub_order_id'];
        }

        if (isset($map['display_refund_money'])) {
            $model->displayRefundMoney = $map['display_refund_money'];
        }

        if (isset($map['extra'])) {
            $model->extraShrink = $map['extra'];
        }

        if (isset($map['is_voluntary'])) {
            $model->isVoluntary = $map['is_voluntary'];
        }

        if (isset($map['item_unit_ids'])) {
            $model->itemUnitIds = $map['item_unit_ids'];
        }

        if (isset($map['passenger_segment_info_list'])) {
            $model->passengerSegmentInfoListShrink = $map['passenger_segment_info_list'];
        }

        if (isset($map['personal_refund_price'])) {
            $model->personalRefundPrice = $map['personal_refund_price'];
        }

        if (isset($map['reason_detail'])) {
            $model->reasonDetail = $map['reason_detail'];
        }

        if (isset($map['reason_type'])) {
            $model->reasonType = $map['reason_type'];
        }

        if (isset($map['refund_voucher_info'])) {
            $model->refundVoucherInfoShrink = $map['refund_voucher_info'];
        }

        if (isset($map['session_id'])) {
            $model->sessionId = $map['session_id'];
        }

        if (isset($map['total_refund_price'])) {
            $model->totalRefundPrice = $map['total_refund_price'];
        }

        return $model;
    }
}
