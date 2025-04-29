<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\orderItemList\baggageRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\orderItemList\passengerPriceList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\orderItemList\refundChangeRule;

class orderItemList extends Model
{
    /**
     * @var baggageRule
     */
    public $baggageRule;

    /**
     * @var passengerPriceList[]
     */
    public $passengerPriceList;

    /**
     * @var refundChangeRule
     */
    public $refundChangeRule;

    /**
     * @var string[]
     */
    public $segmentKeyList;
    protected $_name = [
        'baggageRule' => 'baggage_rule',
        'passengerPriceList' => 'passenger_price_list',
        'refundChangeRule' => 'refund_change_rule',
        'segmentKeyList' => 'segment_key_list',
    ];

    public function validate()
    {
        if (null !== $this->baggageRule) {
            $this->baggageRule->validate();
        }
        if (\is_array($this->passengerPriceList)) {
            Model::validateArray($this->passengerPriceList);
        }
        if (null !== $this->refundChangeRule) {
            $this->refundChangeRule->validate();
        }
        if (\is_array($this->segmentKeyList)) {
            Model::validateArray($this->segmentKeyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageRule) {
            $res['baggage_rule'] = null !== $this->baggageRule ? $this->baggageRule->toArray($noStream) : $this->baggageRule;
        }

        if (null !== $this->passengerPriceList) {
            if (\is_array($this->passengerPriceList)) {
                $res['passenger_price_list'] = [];
                $n1 = 0;
                foreach ($this->passengerPriceList as $item1) {
                    $res['passenger_price_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->refundChangeRule) {
            $res['refund_change_rule'] = null !== $this->refundChangeRule ? $this->refundChangeRule->toArray($noStream) : $this->refundChangeRule;
        }

        if (null !== $this->segmentKeyList) {
            if (\is_array($this->segmentKeyList)) {
                $res['segment_key_list'] = [];
                $n1 = 0;
                foreach ($this->segmentKeyList as $item1) {
                    $res['segment_key_list'][$n1++] = $item1;
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
        if (isset($map['baggage_rule'])) {
            $model->baggageRule = baggageRule::fromMap($map['baggage_rule']);
        }

        if (isset($map['passenger_price_list'])) {
            if (!empty($map['passenger_price_list'])) {
                $model->passengerPriceList = [];
                $n1 = 0;
                foreach ($map['passenger_price_list'] as $item1) {
                    $model->passengerPriceList[$n1++] = passengerPriceList::fromMap($item1);
                }
            }
        }

        if (isset($map['refund_change_rule'])) {
            $model->refundChangeRule = refundChangeRule::fromMap($map['refund_change_rule']);
        }

        if (isset($map['segment_key_list'])) {
            if (!empty($map['segment_key_list'])) {
                $model->segmentKeyList = [];
                $n1 = 0;
                foreach ($map['segment_key_list'] as $item1) {
                    $model->segmentKeyList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
