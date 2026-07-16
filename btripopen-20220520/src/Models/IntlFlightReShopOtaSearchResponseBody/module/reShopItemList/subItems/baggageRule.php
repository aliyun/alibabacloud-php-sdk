<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopOtaSearchResponseBody\module\reShopItemList\subItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleReShopItemListSubItemsBaggageRuleOfferBaggageInfoMapValue;

class baggageRule extends Model
{
    /**
     * @var string
     */
    public $baggageDescShowColor;

    /**
     * @var string
     */
    public $baggageDigest;

    /**
     * @var string
     */
    public $baggageRuleDesc;

    /**
     * @var ModuleReShopItemListSubItemsBaggageRuleOfferBaggageInfoMapValue[][]
     */
    public $offerBaggageInfoMap;

    /**
     * @var bool
     */
    public $structuredBaggage;
    protected $_name = [
        'baggageDescShowColor' => 'baggage_desc_show_color',
        'baggageDigest' => 'baggage_digest',
        'baggageRuleDesc' => 'baggage_rule_desc',
        'offerBaggageInfoMap' => 'offer_baggage_info_map',
        'structuredBaggage' => 'structured_baggage',
    ];

    public function validate()
    {
        if (\is_array($this->offerBaggageInfoMap)) {
            Model::validateArray($this->offerBaggageInfoMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageDescShowColor) {
            $res['baggage_desc_show_color'] = $this->baggageDescShowColor;
        }

        if (null !== $this->baggageDigest) {
            $res['baggage_digest'] = $this->baggageDigest;
        }

        if (null !== $this->baggageRuleDesc) {
            $res['baggage_rule_desc'] = $this->baggageRuleDesc;
        }

        if (null !== $this->offerBaggageInfoMap) {
            if (\is_array($this->offerBaggageInfoMap)) {
                $res['offer_baggage_info_map'] = [];
                foreach ($this->offerBaggageInfoMap as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['offer_baggage_info_map'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['offer_baggage_info_map'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (null !== $this->structuredBaggage) {
            $res['structured_baggage'] = $this->structuredBaggage;
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
        if (isset($map['baggage_desc_show_color'])) {
            $model->baggageDescShowColor = $map['baggage_desc_show_color'];
        }

        if (isset($map['baggage_digest'])) {
            $model->baggageDigest = $map['baggage_digest'];
        }

        if (isset($map['baggage_rule_desc'])) {
            $model->baggageRuleDesc = $map['baggage_rule_desc'];
        }

        if (isset($map['offer_baggage_info_map'])) {
            if (!empty($map['offer_baggage_info_map'])) {
                $model->offerBaggageInfoMap = [];
                foreach ($map['offer_baggage_info_map'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->offerBaggageInfoMap[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->offerBaggageInfoMap[$key1][$n2] = ModuleReShopItemListSubItemsBaggageRuleOfferBaggageInfoMapValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        if (isset($map['structured_baggage'])) {
            $model->structuredBaggage = $map['structured_baggage'];
        }

        return $model;
    }
}
