<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management\upgradeConfig;
use AlibabaCloud\Tea\Model;

class management extends Model
{
    /**
     * @description Specifies whether to enable auto repair. This parameter takes effect only when you specify `enable=true`.
     *
     *   `true`: enables auto repair.
     *   `false`: disables auto repair.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRepair;

    /**
     * @description Specifies whether to enable the managed node pool feature. Valid values:
     *
     *   `true`: enables the managed node pool feature.
     *   `false`: disables the managed node pool feature. Other parameters in this section take effect only when you specify enable=true.
     *
     * @example false
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The configurations about auto update. The configurations take effect only when you specify `enable=true`.
     *
     * @var upgradeConfig
     */
    public $upgradeConfig;
    protected $_name = [
        'autoRepair'    => 'auto_repair',
        'enable'        => 'enable',
        'upgradeConfig' => 'upgrade_config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRepair) {
            $res['auto_repair'] = $this->autoRepair;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->upgradeConfig) {
            $res['upgrade_config'] = null !== $this->upgradeConfig ? $this->upgradeConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return management
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_repair'])) {
            $model->autoRepair = $map['auto_repair'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['upgrade_config'])) {
            $model->upgradeConfig = upgradeConfig::fromMap($map['upgrade_config']);
        }

        return $model;
    }
}
