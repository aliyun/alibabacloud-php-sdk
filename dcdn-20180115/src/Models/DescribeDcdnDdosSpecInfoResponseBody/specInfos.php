<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDdosSpecInfoResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDdosSpecInfoResponseBody\specInfos\configs;
use AlibabaCloud\Tea\Model;

class specInfos extends Model
{
    /**
     * @description The configurations of the version rule.
     *
     * @var configs[]
     */
    public $configs;

    /**
     * @description The version rule. Valid values:
     *
     *   **version_defense_num**: the rule for the number of version mitigation sessions
     *   **domain_num**: the rule for the limit on the number of domain names
     *   **defence_package_num**: the rule for extra mitigation session plans
     *
     * @example version_defense_num
     *
     * @var string
     */
    public $rule;
    protected $_name = [
        'configs' => 'Configs',
        'rule'    => 'Rule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['Configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return specInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['Configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        return $model;
    }
}
