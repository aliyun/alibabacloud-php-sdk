<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryResponseBody\module\items\mainReserveRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardListQueryResponseBody\module\items\reserveRuleDesc;
use AlibabaCloud\Tea\Model;

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
     * @example 1
     *
     * @var int
     */
    public $scope;
    protected $_name = [
        'mainReserveRule' => 'main_reserve_rule',
        'reserveRuleDesc' => 'reserve_rule_desc',
        'scope'           => 'scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mainReserveRule) {
            $res['main_reserve_rule'] = null !== $this->mainReserveRule ? $this->mainReserveRule->toMap() : null;
        }
        if (null !== $this->reserveRuleDesc) {
            $res['reserve_rule_desc'] = [];
            if (null !== $this->reserveRuleDesc && \is_array($this->reserveRuleDesc)) {
                $n = 0;
                foreach ($this->reserveRuleDesc as $item) {
                    $res['reserve_rule_desc'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['main_reserve_rule'])) {
            $model->mainReserveRule = mainReserveRule::fromMap($map['main_reserve_rule']);
        }
        if (isset($map['reserve_rule_desc'])) {
            if (!empty($map['reserve_rule_desc'])) {
                $model->reserveRuleDesc = [];
                $n                      = 0;
                foreach ($map['reserve_rule_desc'] as $item) {
                    $model->reserveRuleDesc[$n++] = null !== $item ? reserveRuleDesc::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        return $model;
    }
}
