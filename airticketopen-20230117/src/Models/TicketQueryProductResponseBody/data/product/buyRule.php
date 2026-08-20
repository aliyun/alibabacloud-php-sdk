<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\buyRule\aheadBuyTimePointRule;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\buyRule\contactRule;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\buyRule\crossOrderBuyQuantityLimitRules;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\buyRule\perOrderBuyQuantityLimitRule;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryProductResponseBody\data\product\buyRule\travelerRule;

class buyRule extends Model
{
    /**
     * @var aheadBuyTimePointRule
     */
    public $aheadBuyTimePointRule;

    /**
     * @var contactRule
     */
    public $contactRule;

    /**
     * @var crossOrderBuyQuantityLimitRules[]
     */
    public $crossOrderBuyQuantityLimitRules;

    /**
     * @var perOrderBuyQuantityLimitRule
     */
    public $perOrderBuyQuantityLimitRule;

    /**
     * @var travelerRule
     */
    public $travelerRule;
    protected $_name = [
        'aheadBuyTimePointRule' => 'AheadBuyTimePointRule',
        'contactRule' => 'ContactRule',
        'crossOrderBuyQuantityLimitRules' => 'CrossOrderBuyQuantityLimitRules',
        'perOrderBuyQuantityLimitRule' => 'PerOrderBuyQuantityLimitRule',
        'travelerRule' => 'TravelerRule',
    ];

    public function validate()
    {
        if (null !== $this->aheadBuyTimePointRule) {
            $this->aheadBuyTimePointRule->validate();
        }
        if (null !== $this->contactRule) {
            $this->contactRule->validate();
        }
        if (\is_array($this->crossOrderBuyQuantityLimitRules)) {
            Model::validateArray($this->crossOrderBuyQuantityLimitRules);
        }
        if (null !== $this->perOrderBuyQuantityLimitRule) {
            $this->perOrderBuyQuantityLimitRule->validate();
        }
        if (null !== $this->travelerRule) {
            $this->travelerRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aheadBuyTimePointRule) {
            $res['AheadBuyTimePointRule'] = null !== $this->aheadBuyTimePointRule ? $this->aheadBuyTimePointRule->toArray($noStream) : $this->aheadBuyTimePointRule;
        }

        if (null !== $this->contactRule) {
            $res['ContactRule'] = null !== $this->contactRule ? $this->contactRule->toArray($noStream) : $this->contactRule;
        }

        if (null !== $this->crossOrderBuyQuantityLimitRules) {
            if (\is_array($this->crossOrderBuyQuantityLimitRules)) {
                $res['CrossOrderBuyQuantityLimitRules'] = [];
                $n1 = 0;
                foreach ($this->crossOrderBuyQuantityLimitRules as $item1) {
                    $res['CrossOrderBuyQuantityLimitRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->perOrderBuyQuantityLimitRule) {
            $res['PerOrderBuyQuantityLimitRule'] = null !== $this->perOrderBuyQuantityLimitRule ? $this->perOrderBuyQuantityLimitRule->toArray($noStream) : $this->perOrderBuyQuantityLimitRule;
        }

        if (null !== $this->travelerRule) {
            $res['TravelerRule'] = null !== $this->travelerRule ? $this->travelerRule->toArray($noStream) : $this->travelerRule;
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
        if (isset($map['AheadBuyTimePointRule'])) {
            $model->aheadBuyTimePointRule = aheadBuyTimePointRule::fromMap($map['AheadBuyTimePointRule']);
        }

        if (isset($map['ContactRule'])) {
            $model->contactRule = contactRule::fromMap($map['ContactRule']);
        }

        if (isset($map['CrossOrderBuyQuantityLimitRules'])) {
            if (!empty($map['CrossOrderBuyQuantityLimitRules'])) {
                $model->crossOrderBuyQuantityLimitRules = [];
                $n1 = 0;
                foreach ($map['CrossOrderBuyQuantityLimitRules'] as $item1) {
                    $model->crossOrderBuyQuantityLimitRules[$n1] = crossOrderBuyQuantityLimitRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PerOrderBuyQuantityLimitRule'])) {
            $model->perOrderBuyQuantityLimitRule = perOrderBuyQuantityLimitRule::fromMap($map['PerOrderBuyQuantityLimitRule']);
        }

        if (isset($map['TravelerRule'])) {
            $model->travelerRule = travelerRule::fromMap($map['TravelerRule']);
        }

        return $model;
    }
}
