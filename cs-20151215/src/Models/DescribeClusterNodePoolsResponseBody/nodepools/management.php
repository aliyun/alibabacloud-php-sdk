<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\management\upgradeConfig;
use AlibabaCloud\Tea\Model;

class management extends Model
{
    /**
     * @description Indicates whether auto repair is enabled. Auto repair is enabled only when `enable=true` is specified.
     *
     *   `true`: Auto repair is enabled.
     *   `false`: Auto repair is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRepair;

    /**
     * @description Indicates whether managed node pools are enabled. Valid values:
     *
     *   `true`: Managed node pools are enabled.
     *   `false`: Managed node pools are disabled. Other parameters in this section take effect only when `enable=true` is specified.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The configurations of auto upgrade. The configurations take effect only when `enable=true` is specified.
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
