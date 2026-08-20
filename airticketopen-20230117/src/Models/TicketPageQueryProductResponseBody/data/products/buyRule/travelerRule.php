<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products\buyRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products\buyRule\travelerRule\crowdLimitRules;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products\buyRule\travelerRule\crowdQuantityLimits;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryProductResponseBody\data\products\buyRule\travelerRule\travelerFieldRule;

class travelerRule extends Model
{
    /**
     * @var crowdLimitRules[]
     */
    public $crowdLimitRules;

    /**
     * @var crowdQuantityLimits[]
     */
    public $crowdQuantityLimits;

    /**
     * @var bool
     */
    public $needFillTraveler;

    /**
     * @var travelerFieldRule
     */
    public $travelerFieldRule;

    /**
     * @var int
     */
    public $travelerFillDimension;

    /**
     * @var int
     */
    public $travelerQuantity;
    protected $_name = [
        'crowdLimitRules' => 'CrowdLimitRules',
        'crowdQuantityLimits' => 'CrowdQuantityLimits',
        'needFillTraveler' => 'NeedFillTraveler',
        'travelerFieldRule' => 'TravelerFieldRule',
        'travelerFillDimension' => 'TravelerFillDimension',
        'travelerQuantity' => 'TravelerQuantity',
    ];

    public function validate()
    {
        if (\is_array($this->crowdLimitRules)) {
            Model::validateArray($this->crowdLimitRules);
        }
        if (\is_array($this->crowdQuantityLimits)) {
            Model::validateArray($this->crowdQuantityLimits);
        }
        if (null !== $this->travelerFieldRule) {
            $this->travelerFieldRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crowdLimitRules) {
            if (\is_array($this->crowdLimitRules)) {
                $res['CrowdLimitRules'] = [];
                $n1 = 0;
                foreach ($this->crowdLimitRules as $item1) {
                    $res['CrowdLimitRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->crowdQuantityLimits) {
            if (\is_array($this->crowdQuantityLimits)) {
                $res['CrowdQuantityLimits'] = [];
                $n1 = 0;
                foreach ($this->crowdQuantityLimits as $item1) {
                    $res['CrowdQuantityLimits'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->needFillTraveler) {
            $res['NeedFillTraveler'] = $this->needFillTraveler;
        }

        if (null !== $this->travelerFieldRule) {
            $res['TravelerFieldRule'] = null !== $this->travelerFieldRule ? $this->travelerFieldRule->toArray($noStream) : $this->travelerFieldRule;
        }

        if (null !== $this->travelerFillDimension) {
            $res['TravelerFillDimension'] = $this->travelerFillDimension;
        }

        if (null !== $this->travelerQuantity) {
            $res['TravelerQuantity'] = $this->travelerQuantity;
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
        if (isset($map['CrowdLimitRules'])) {
            if (!empty($map['CrowdLimitRules'])) {
                $model->crowdLimitRules = [];
                $n1 = 0;
                foreach ($map['CrowdLimitRules'] as $item1) {
                    $model->crowdLimitRules[$n1] = crowdLimitRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CrowdQuantityLimits'])) {
            if (!empty($map['CrowdQuantityLimits'])) {
                $model->crowdQuantityLimits = [];
                $n1 = 0;
                foreach ($map['CrowdQuantityLimits'] as $item1) {
                    $model->crowdQuantityLimits[$n1] = crowdQuantityLimits::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NeedFillTraveler'])) {
            $model->needFillTraveler = $map['NeedFillTraveler'];
        }

        if (isset($map['TravelerFieldRule'])) {
            $model->travelerFieldRule = travelerFieldRule::fromMap($map['TravelerFieldRule']);
        }

        if (isset($map['TravelerFillDimension'])) {
            $model->travelerFillDimension = $map['TravelerFillDimension'];
        }

        if (isset($map['TravelerQuantity'])) {
            $model->travelerQuantity = $map['TravelerQuantity'];
        }

        return $model;
    }
}
