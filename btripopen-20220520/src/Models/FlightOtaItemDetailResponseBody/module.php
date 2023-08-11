<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody\module\baggageRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody\module\changeRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody\module\refundRule;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var baggageRule[]
     */
    public $baggageRule;

    /**
     * @var changeRule[]
     */
    public $changeRule;

    /**
     * @var refundRule[]
     */
    public $refundRule;

    /**
     * @example 1830
     *
     * @var int
     */
    public $sellPrice;

    /**
     * @var int[]
     */
    public $sellPriceList;

    /**
     * @example 1
     *
     * @var int
     */
    public $tripType;
    protected $_name = [
        'baggageRule'   => 'baggage_rule',
        'changeRule'    => 'change_rule',
        'refundRule'    => 'refund_rule',
        'sellPrice'     => 'sell_price',
        'sellPriceList' => 'sell_price_list',
        'tripType'      => 'trip_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageRule) {
            $res['baggage_rule'] = [];
            if (null !== $this->baggageRule && \is_array($this->baggageRule)) {
                $n = 0;
                foreach ($this->baggageRule as $item) {
                    $res['baggage_rule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->changeRule) {
            $res['change_rule'] = [];
            if (null !== $this->changeRule && \is_array($this->changeRule)) {
                $n = 0;
                foreach ($this->changeRule as $item) {
                    $res['change_rule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->refundRule) {
            $res['refund_rule'] = [];
            if (null !== $this->refundRule && \is_array($this->refundRule)) {
                $n = 0;
                foreach ($this->refundRule as $item) {
                    $res['refund_rule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sellPrice) {
            $res['sell_price'] = $this->sellPrice;
        }
        if (null !== $this->sellPriceList) {
            $res['sell_price_list'] = $this->sellPriceList;
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
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
        if (isset($map['baggage_rule'])) {
            if (!empty($map['baggage_rule'])) {
                $model->baggageRule = [];
                $n                  = 0;
                foreach ($map['baggage_rule'] as $item) {
                    $model->baggageRule[$n++] = null !== $item ? baggageRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['change_rule'])) {
            if (!empty($map['change_rule'])) {
                $model->changeRule = [];
                $n                 = 0;
                foreach ($map['change_rule'] as $item) {
                    $model->changeRule[$n++] = null !== $item ? changeRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['refund_rule'])) {
            if (!empty($map['refund_rule'])) {
                $model->refundRule = [];
                $n                 = 0;
                foreach ($map['refund_rule'] as $item) {
                    $model->refundRule[$n++] = null !== $item ? refundRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sell_price'])) {
            $model->sellPrice = $map['sell_price'];
        }
        if (isset($map['sell_price_list'])) {
            if (!empty($map['sell_price_list'])) {
                $model->sellPriceList = $map['sell_price_list'];
            }
        }
        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
