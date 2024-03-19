<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\orderItemList\baggageRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\orderItemList\passengerPriceList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module\orderItemList\refundChangeRule;
use AlibabaCloud\Tea\Model;

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
        'baggageRule'        => 'baggage_rule',
        'passengerPriceList' => 'passenger_price_list',
        'refundChangeRule'   => 'refund_change_rule',
        'segmentKeyList'     => 'segment_key_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageRule) {
            $res['baggage_rule'] = null !== $this->baggageRule ? $this->baggageRule->toMap() : null;
        }
        if (null !== $this->passengerPriceList) {
            $res['passenger_price_list'] = [];
            if (null !== $this->passengerPriceList && \is_array($this->passengerPriceList)) {
                $n = 0;
                foreach ($this->passengerPriceList as $item) {
                    $res['passenger_price_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->refundChangeRule) {
            $res['refund_change_rule'] = null !== $this->refundChangeRule ? $this->refundChangeRule->toMap() : null;
        }
        if (null !== $this->segmentKeyList) {
            $res['segment_key_list'] = $this->segmentKeyList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_rule'])) {
            $model->baggageRule = baggageRule::fromMap($map['baggage_rule']);
        }
        if (isset($map['passenger_price_list'])) {
            if (!empty($map['passenger_price_list'])) {
                $model->passengerPriceList = [];
                $n                         = 0;
                foreach ($map['passenger_price_list'] as $item) {
                    $model->passengerPriceList[$n++] = null !== $item ? passengerPriceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['refund_change_rule'])) {
            $model->refundChangeRule = refundChangeRule::fromMap($map['refund_change_rule']);
        }
        if (isset($map['segment_key_list'])) {
            if (!empty($map['segment_key_list'])) {
                $model->segmentKeyList = $map['segment_key_list'];
            }
        }

        return $model;
    }
}
