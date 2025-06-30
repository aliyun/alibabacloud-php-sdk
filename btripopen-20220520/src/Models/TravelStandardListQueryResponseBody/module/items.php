<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryResponseBody\module\items\mainReserveRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryResponseBody\module\items\reserveRuleDesc;

class items extends Model
{
    /**
     * @var mainReserveRule
     */
    public $mainReserveRule;

    /**
     * @var reserveRuleDesc[]
     */
    public $reserveRuleDesc;

    /**
     * @var int
     */
    public $scope;
    protected $_name = [
        'mainReserveRule' => 'main_reserve_rule',
        'reserveRuleDesc' => 'reserve_rule_desc',
        'scope' => 'scope',
    ];

    public function validate()
    {
        if (null !== $this->mainReserveRule) {
            $this->mainReserveRule->validate();
        }
        if (\is_array($this->reserveRuleDesc)) {
            Model::validateArray($this->reserveRuleDesc);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mainReserveRule) {
            $res['main_reserve_rule'] = null !== $this->mainReserveRule ? $this->mainReserveRule->toArray($noStream) : $this->mainReserveRule;
        }

        if (null !== $this->reserveRuleDesc) {
            if (\is_array($this->reserveRuleDesc)) {
                $res['reserve_rule_desc'] = [];
                $n1 = 0;
                foreach ($this->reserveRuleDesc as $item1) {
                    $res['reserve_rule_desc'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
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
        if (isset($map['main_reserve_rule'])) {
            $model->mainReserveRule = mainReserveRule::fromMap($map['main_reserve_rule']);
        }

        if (isset($map['reserve_rule_desc'])) {
            if (!empty($map['reserve_rule_desc'])) {
                $model->reserveRuleDesc = [];
                $n1 = 0;
                foreach ($map['reserve_rule_desc'] as $item1) {
                    $model->reserveRuleDesc[$n1] = reserveRuleDesc::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        return $model;
    }
}
