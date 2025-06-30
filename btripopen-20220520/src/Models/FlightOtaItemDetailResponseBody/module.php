<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody\module\baggageRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody\module\changeRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody\module\refundRule;

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
     * @var int
     */
    public $sellPrice;

    /**
     * @var int[]
     */
    public $sellPriceList;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'baggageRule' => 'baggage_rule',
        'changeRule' => 'change_rule',
        'refundRule' => 'refund_rule',
        'sellPrice' => 'sell_price',
        'sellPriceList' => 'sell_price_list',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        if (\is_array($this->baggageRule)) {
            Model::validateArray($this->baggageRule);
        }
        if (\is_array($this->changeRule)) {
            Model::validateArray($this->changeRule);
        }
        if (\is_array($this->refundRule)) {
            Model::validateArray($this->refundRule);
        }
        if (\is_array($this->sellPriceList)) {
            Model::validateArray($this->sellPriceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageRule) {
            if (\is_array($this->baggageRule)) {
                $res['baggage_rule'] = [];
                $n1 = 0;
                foreach ($this->baggageRule as $item1) {
                    $res['baggage_rule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->changeRule) {
            if (\is_array($this->changeRule)) {
                $res['change_rule'] = [];
                $n1 = 0;
                foreach ($this->changeRule as $item1) {
                    $res['change_rule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundRule) {
            if (\is_array($this->refundRule)) {
                $res['refund_rule'] = [];
                $n1 = 0;
                foreach ($this->refundRule as $item1) {
                    $res['refund_rule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sellPrice) {
            $res['sell_price'] = $this->sellPrice;
        }

        if (null !== $this->sellPriceList) {
            if (\is_array($this->sellPriceList)) {
                $res['sell_price_list'] = [];
                $n1 = 0;
                foreach ($this->sellPriceList as $item1) {
                    $res['sell_price_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
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
            if (!empty($map['baggage_rule'])) {
                $model->baggageRule = [];
                $n1 = 0;
                foreach ($map['baggage_rule'] as $item1) {
                    $model->baggageRule[$n1] = baggageRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['change_rule'])) {
            if (!empty($map['change_rule'])) {
                $model->changeRule = [];
                $n1 = 0;
                foreach ($map['change_rule'] as $item1) {
                    $model->changeRule[$n1] = changeRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['refund_rule'])) {
            if (!empty($map['refund_rule'])) {
                $model->refundRule = [];
                $n1 = 0;
                foreach ($map['refund_rule'] as $item1) {
                    $model->refundRule[$n1] = refundRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sell_price'])) {
            $model->sellPrice = $map['sell_price'];
        }

        if (isset($map['sell_price_list'])) {
            if (!empty($map['sell_price_list'])) {
                $model->sellPriceList = [];
                $n1 = 0;
                foreach ($map['sell_price_list'] as $item1) {
                    $model->sellPriceList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
