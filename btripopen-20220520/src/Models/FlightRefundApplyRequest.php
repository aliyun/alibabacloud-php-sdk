<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyRequest\passengerSegmentInfoList;
use AlibabaCloud\Tea\Model;

class FlightRefundApplyRequest extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $corpRefundPrice;

    /**
     * @example dis123
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @example refu123
     *
     * @var string
     */
    public $disSubOrderId;

    /**
     * @example 100
     *
     * @var string
     */
    public $displayRefundMoney;

    /**
     * @var string[]
     */
    public $extra;

    /**
     * @example 0
     *
     * @var int
     */
    public $isVoluntary;

    /**
     * @example FlightItem_9966772382
     *
     * @var string
     */
    public $itemUnitIds;

    /**
     * @var passengerSegmentInfoList[]
     */
    public $passengerSegmentInfoList;

    /**
     * @example 100
     *
     * @var int
     */
    public $personalRefundPrice;

    /**
     * @var string
     */
    public $reasonDetail;

    /**
     * @example 1
     *
     * @var int
     */
    public $reasonType;

    /**
     * @var string[]
     */
    public $refundVoucherInfo;

    /**
     * @example 0f9418cd2ce34af49ab0de16fea166d1
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalRefundPrice;
    protected $_name = [
        'corpRefundPrice'          => 'corp_refund_price',
        'disOrderId'               => 'dis_order_id',
        'disSubOrderId'            => 'dis_sub_order_id',
        'displayRefundMoney'       => 'display_refund_money',
        'extra'                    => 'extra',
        'isVoluntary'              => 'is_voluntary',
        'itemUnitIds'              => 'item_unit_ids',
        'passengerSegmentInfoList' => 'passenger_segment_info_list',
        'personalRefundPrice'      => 'personal_refund_price',
        'reasonDetail'             => 'reason_detail',
        'reasonType'               => 'reason_type',
        'refundVoucherInfo'        => 'refund_voucher_info',
        'sessionId'                => 'session_id',
        'totalRefundPrice'         => 'total_refund_price',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->isVoluntary) {
            $res['is_voluntary'] = $this->isVoluntary;
        }
        if (null !== $this->itemUnitIds) {
            $res['item_unit_ids'] = $this->itemUnitIds;
        }
        if (null !== $this->passengerSegmentInfoList) {
            $res['passenger_segment_info_list'] = [];
            if (null !== $this->passengerSegmentInfoList && \is_array($this->passengerSegmentInfoList)) {
                $n = 0;
                foreach ($this->passengerSegmentInfoList as $item) {
                    $res['passenger_segment_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->refundVoucherInfo) {
            $res['refund_voucher_info'] = $this->refundVoucherInfo;
        }
        if (null !== $this->sessionId) {
            $res['session_id'] = $this->sessionId;
        }
        if (null !== $this->totalRefundPrice) {
            $res['total_refund_price'] = $this->totalRefundPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightRefundApplyRequest
     */
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
            $model->extra = $map['extra'];
        }
        if (isset($map['is_voluntary'])) {
            $model->isVoluntary = $map['is_voluntary'];
        }
        if (isset($map['item_unit_ids'])) {
            $model->itemUnitIds = $map['item_unit_ids'];
        }
        if (isset($map['passenger_segment_info_list'])) {
            if (!empty($map['passenger_segment_info_list'])) {
                $model->passengerSegmentInfoList = [];
                $n                               = 0;
                foreach ($map['passenger_segment_info_list'] as $item) {
                    $model->passengerSegmentInfoList[$n++] = null !== $item ? passengerSegmentInfoList::fromMap($item) : $item;
                }
            }
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
            if (!empty($map['refund_voucher_info'])) {
                $model->refundVoucherInfo = $map['refund_voucher_info'];
            }
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
