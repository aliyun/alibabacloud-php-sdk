<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightRefundApplyRequest\passengerSegmentInfoList;

class FlightRefundApplyRequest extends Model
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
     * @var string[]
     */
    public $extra;

    /**
     * @var int
     */
    public $isVoluntary;

    /**
     * @var string
     */
    public $itemUnitIds;

    /**
     * @var passengerSegmentInfoList[]
     */
    public $passengerSegmentInfoList;

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
     * @var string[]
     */
    public $refundVoucherInfo;

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
        'extra' => 'extra',
        'isVoluntary' => 'is_voluntary',
        'itemUnitIds' => 'item_unit_ids',
        'passengerSegmentInfoList' => 'passenger_segment_info_list',
        'personalRefundPrice' => 'personal_refund_price',
        'reasonDetail' => 'reason_detail',
        'reasonType' => 'reason_type',
        'refundVoucherInfo' => 'refund_voucher_info',
        'sessionId' => 'session_id',
        'totalRefundPrice' => 'total_refund_price',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        if (\is_array($this->passengerSegmentInfoList)) {
            Model::validateArray($this->passengerSegmentInfoList);
        }
        if (\is_array($this->refundVoucherInfo)) {
            Model::validateArray($this->refundVoucherInfo);
        }
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

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->isVoluntary) {
            $res['is_voluntary'] = $this->isVoluntary;
        }

        if (null !== $this->itemUnitIds) {
            $res['item_unit_ids'] = $this->itemUnitIds;
        }

        if (null !== $this->passengerSegmentInfoList) {
            if (\is_array($this->passengerSegmentInfoList)) {
                $res['passenger_segment_info_list'] = [];
                $n1 = 0;
                foreach ($this->passengerSegmentInfoList as $item1) {
                    $res['passenger_segment_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->refundVoucherInfo)) {
                $res['refund_voucher_info'] = [];
                $n1 = 0;
                foreach ($this->refundVoucherInfo as $item1) {
                    $res['refund_voucher_info'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['extra'])) {
                $model->extra = [];
                foreach ($map['extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
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
                $n1 = 0;
                foreach ($map['passenger_segment_info_list'] as $item1) {
                    $model->passengerSegmentInfoList[$n1] = passengerSegmentInfoList::fromMap($item1);
                    ++$n1;
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
                $model->refundVoucherInfo = [];
                $n1 = 0;
                foreach ($map['refund_voucher_info'] as $item1) {
                    $model->refundVoucherInfo[$n1] = $item1;
                    ++$n1;
                }
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
