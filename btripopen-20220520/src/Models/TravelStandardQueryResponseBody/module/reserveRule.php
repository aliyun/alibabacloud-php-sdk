<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody\module\reserveRule\mainReserveRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody\module\reserveRule\moduleConfigList;

class reserveRule extends Model
{
    /**
     * @var mainReserveRule
     */
    public $mainReserveRule;

    /**
     * @var moduleConfigList[]
     */
    public $moduleConfigList;
    protected $_name = [
        'mainReserveRule' => 'main_reserve_rule',
        'moduleConfigList' => 'module_config_list',
    ];

    public function validate()
    {
        if (null !== $this->mainReserveRule) {
            $this->mainReserveRule->validate();
        }
        if (\is_array($this->moduleConfigList)) {
            Model::validateArray($this->moduleConfigList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mainReserveRule) {
            $res['main_reserve_rule'] = null !== $this->mainReserveRule ? $this->mainReserveRule->toArray($noStream) : $this->mainReserveRule;
        }

        if (null !== $this->moduleConfigList) {
            if (\is_array($this->moduleConfigList)) {
                $res['module_config_list'] = [];
                $n1 = 0;
                foreach ($this->moduleConfigList as $item1) {
                    $res['module_config_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['main_reserve_rule'])) {
            $model->mainReserveRule = mainReserveRule::fromMap($map['main_reserve_rule']);
        }

        if (isset($map['module_config_list'])) {
            if (!empty($map['module_config_list'])) {
                $model->moduleConfigList = [];
                $n1 = 0;
                foreach ($map['module_config_list'] as $item1) {
                    $model->moduleConfigList[$n1] = moduleConfigList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
