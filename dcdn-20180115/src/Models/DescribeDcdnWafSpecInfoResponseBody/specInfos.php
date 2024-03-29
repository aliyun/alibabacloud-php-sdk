<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafSpecInfoResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafSpecInfoResponseBody\specInfos\configs;
use AlibabaCloud\Tea\Model;

class specInfos extends Model
{
    /**
     * @description The configuration information of the protection rule.
     *
     * @var configs[]
     */
    public $configs;

    /**
     * @description The type of the protection policy. Valid values:
     *
     *   waf_group: basic web protection
     *   custom_acl: custom
     *   whitelist: whitelist
     *   ip_blacklist: IP address blacklist
     *   region_block: region blacklist
     *   bot: bot management
     *
     * @example custom_acl
     *
     * @var string
     */
    public $defenseScene;
    protected $_name = [
        'configs'      => 'Configs',
        'defenseScene' => 'DefenseScene',
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
        if (null !== $this->defenseScene) {
            $res['DefenseScene'] = $this->defenseScene;
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
        if (isset($map['DefenseScene'])) {
            $model->defenseScene = $map['DefenseScene'];
        }

        return $model;
    }
}
