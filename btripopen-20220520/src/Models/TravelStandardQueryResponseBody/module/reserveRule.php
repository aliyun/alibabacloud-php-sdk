<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody\module\reserveRule\mainReserveRule;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TravelStandardQueryResponseBody\module\reserveRule\moduleConfigList;
use AlibabaCloud\Tea\Model;

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
        'mainReserveRule'  => 'main_reserve_rule',
        'moduleConfigList' => 'module_config_list',
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
        if (null !== $this->moduleConfigList) {
            $res['module_config_list'] = [];
            if (null !== $this->moduleConfigList && \is_array($this->moduleConfigList)) {
                $n = 0;
                foreach ($this->moduleConfigList as $item) {
                    $res['module_config_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reserveRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['main_reserve_rule'])) {
            $model->mainReserveRule = mainReserveRule::fromMap($map['main_reserve_rule']);
        }
        if (isset($map['module_config_list'])) {
            if (!empty($map['module_config_list'])) {
                $model->moduleConfigList = [];
                $n                       = 0;
                foreach ($map['module_config_list'] as $item) {
                    $model->moduleConfigList[$n++] = null !== $item ? moduleConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
