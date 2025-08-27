<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\baggageRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\journeyList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\originJourneyList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\passengerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\passengerPriceInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\passengerTicketList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\priceInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopDetailResponseBody\module\refundChangeRule;

class module extends Model
{
    /**
     * @var baggageRule
     */
    public $baggageRule;

    /**
     * @var string
     */
    public $closeReason;

    /**
     * @var string
     */
    public $closeTime;

    /**
     * @var int
     */
    public $closeType;

    /**
     * @var journeyList[]
     */
    public $journeyList;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var originJourneyList[]
     */
    public $originJourneyList;

    /**
     * @var string
     */
    public $outOrderId;

    /**
     * @var string
     */
    public $outReShopApplyId;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @var passengerPriceInfoList[]
     */
    public $passengerPriceInfoList;

    /**
     * @var passengerTicketList[]
     */
    public $passengerTicketList;

    /**
     * @var string
     */
    public $payLatestTime;

    /**
     * @var int
     */
    public $payStatus;

    /**
     * @var priceInfo
     */
    public $priceInfo;

    /**
     * @var int
     */
    public $reShopApplyId;

    /**
     * @var string
     */
    public $reShopReasonCode;

    /**
     * @var string
     */
    public $reShopReasonDesc;

    /**
     * @var refundChangeRule
     */
    public $refundChangeRule;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $successTime;

    /**
     * @var string
     */
    public $userIntentionMemo;
    protected $_name = [
        'baggageRule' => 'baggage_rule',
        'closeReason' => 'close_reason',
        'closeTime' => 'close_time',
        'closeType' => 'close_type',
        'journeyList' => 'journey_list',
        'orderId' => 'order_id',
        'originJourneyList' => 'origin_journey_list',
        'outOrderId' => 'out_order_id',
        'outReShopApplyId' => 'out_re_shop_apply_id',
        'passengerList' => 'passenger_list',
        'passengerPriceInfoList' => 'passenger_price_info_list',
        'passengerTicketList' => 'passenger_ticket_list',
        'payLatestTime' => 'pay_latest_time',
        'payStatus' => 'pay_status',
        'priceInfo' => 'price_info',
        'reShopApplyId' => 're_shop_apply_id',
        'reShopReasonCode' => 're_shop_reason_code',
        'reShopReasonDesc' => 're_shop_reason_desc',
        'refundChangeRule' => 'refund_change_rule',
        'status' => 'status',
        'successTime' => 'success_time',
        'userIntentionMemo' => 'user_intention_memo',
    ];

    public function validate()
    {
        if (null !== $this->baggageRule) {
            $this->baggageRule->validate();
        }
        if (\is_array($this->journeyList)) {
            Model::validateArray($this->journeyList);
        }
        if (\is_array($this->originJourneyList)) {
            Model::validateArray($this->originJourneyList);
        }
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        if (\is_array($this->passengerPriceInfoList)) {
            Model::validateArray($this->passengerPriceInfoList);
        }
        if (\is_array($this->passengerTicketList)) {
            Model::validateArray($this->passengerTicketList);
        }
        if (null !== $this->priceInfo) {
            $this->priceInfo->validate();
        }
        if (null !== $this->refundChangeRule) {
            $this->refundChangeRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageRule) {
            $res['baggage_rule'] = null !== $this->baggageRule ? $this->baggageRule->toArray($noStream) : $this->baggageRule;
        }

        if (null !== $this->closeReason) {
            $res['close_reason'] = $this->closeReason;
        }

        if (null !== $this->closeTime) {
            $res['close_time'] = $this->closeTime;
        }

        if (null !== $this->closeType) {
            $res['close_type'] = $this->closeType;
        }

        if (null !== $this->journeyList) {
            if (\is_array($this->journeyList)) {
                $res['journey_list'] = [];
                $n1 = 0;
                foreach ($this->journeyList as $item1) {
                    $res['journey_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }

        if (null !== $this->originJourneyList) {
            if (\is_array($this->originJourneyList)) {
                $res['origin_journey_list'] = [];
                $n1 = 0;
                foreach ($this->originJourneyList as $item1) {
                    $res['origin_journey_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outOrderId) {
            $res['out_order_id'] = $this->outOrderId;
        }

        if (null !== $this->outReShopApplyId) {
            $res['out_re_shop_apply_id'] = $this->outReShopApplyId;
        }

        if (null !== $this->passengerList) {
            if (\is_array($this->passengerList)) {
                $res['passenger_list'] = [];
                $n1 = 0;
                foreach ($this->passengerList as $item1) {
                    $res['passenger_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passengerPriceInfoList) {
            if (\is_array($this->passengerPriceInfoList)) {
                $res['passenger_price_info_list'] = [];
                $n1 = 0;
                foreach ($this->passengerPriceInfoList as $item1) {
                    $res['passenger_price_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passengerTicketList) {
            if (\is_array($this->passengerTicketList)) {
                $res['passenger_ticket_list'] = [];
                $n1 = 0;
                foreach ($this->passengerTicketList as $item1) {
                    $res['passenger_ticket_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payLatestTime) {
            $res['pay_latest_time'] = $this->payLatestTime;
        }

        if (null !== $this->payStatus) {
            $res['pay_status'] = $this->payStatus;
        }

        if (null !== $this->priceInfo) {
            $res['price_info'] = null !== $this->priceInfo ? $this->priceInfo->toArray($noStream) : $this->priceInfo;
        }

        if (null !== $this->reShopApplyId) {
            $res['re_shop_apply_id'] = $this->reShopApplyId;
        }

        if (null !== $this->reShopReasonCode) {
            $res['re_shop_reason_code'] = $this->reShopReasonCode;
        }

        if (null !== $this->reShopReasonDesc) {
            $res['re_shop_reason_desc'] = $this->reShopReasonDesc;
        }

        if (null !== $this->refundChangeRule) {
            $res['refund_change_rule'] = null !== $this->refundChangeRule ? $this->refundChangeRule->toArray($noStream) : $this->refundChangeRule;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->successTime) {
            $res['success_time'] = $this->successTime;
        }

        if (null !== $this->userIntentionMemo) {
            $res['user_intention_memo'] = $this->userIntentionMemo;
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
        if (isset($map['baggage_rule'])) {
            $model->baggageRule = baggageRule::fromMap($map['baggage_rule']);
        }

        if (isset($map['close_reason'])) {
            $model->closeReason = $map['close_reason'];
        }

        if (isset($map['close_time'])) {
            $model->closeTime = $map['close_time'];
        }

        if (isset($map['close_type'])) {
            $model->closeType = $map['close_type'];
        }

        if (isset($map['journey_list'])) {
            if (!empty($map['journey_list'])) {
                $model->journeyList = [];
                $n1 = 0;
                foreach ($map['journey_list'] as $item1) {
                    $model->journeyList[$n1] = journeyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        if (isset($map['origin_journey_list'])) {
            if (!empty($map['origin_journey_list'])) {
                $model->originJourneyList = [];
                $n1 = 0;
                foreach ($map['origin_journey_list'] as $item1) {
                    $model->originJourneyList[$n1] = originJourneyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['out_order_id'])) {
            $model->outOrderId = $map['out_order_id'];
        }

        if (isset($map['out_re_shop_apply_id'])) {
            $model->outReShopApplyId = $map['out_re_shop_apply_id'];
        }

        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n1 = 0;
                foreach ($map['passenger_list'] as $item1) {
                    $model->passengerList[$n1] = passengerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['passenger_price_info_list'])) {
            if (!empty($map['passenger_price_info_list'])) {
                $model->passengerPriceInfoList = [];
                $n1 = 0;
                foreach ($map['passenger_price_info_list'] as $item1) {
                    $model->passengerPriceInfoList[$n1] = passengerPriceInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['passenger_ticket_list'])) {
            if (!empty($map['passenger_ticket_list'])) {
                $model->passengerTicketList = [];
                $n1 = 0;
                foreach ($map['passenger_ticket_list'] as $item1) {
                    $model->passengerTicketList[$n1] = passengerTicketList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['pay_latest_time'])) {
            $model->payLatestTime = $map['pay_latest_time'];
        }

        if (isset($map['pay_status'])) {
            $model->payStatus = $map['pay_status'];
        }

        if (isset($map['price_info'])) {
            $model->priceInfo = priceInfo::fromMap($map['price_info']);
        }

        if (isset($map['re_shop_apply_id'])) {
            $model->reShopApplyId = $map['re_shop_apply_id'];
        }

        if (isset($map['re_shop_reason_code'])) {
            $model->reShopReasonCode = $map['re_shop_reason_code'];
        }

        if (isset($map['re_shop_reason_desc'])) {
            $model->reShopReasonDesc = $map['re_shop_reason_desc'];
        }

        if (isset($map['refund_change_rule'])) {
            $model->refundChangeRule = refundChangeRule::fromMap($map['refund_change_rule']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['success_time'])) {
            $model->successTime = $map['success_time'];
        }

        if (isset($map['user_intention_memo'])) {
            $model->userIntentionMemo = $map['user_intention_memo'];
        }

        return $model;
    }
}
