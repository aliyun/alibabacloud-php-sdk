<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\Nodepool;

use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\management\autoRepairPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\management\autoUpgradePolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\management\autoVulFixPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\management\upgradeConfig;
use AlibabaCloud\Tea\Model;

class management extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRepair;

    /**
     * @var autoRepairPolicy
     */
    public $autoRepairPolicy;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoUpgrade;

    /**
     * @var autoUpgradePolicy
     */
    public $autoUpgradePolicy;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoVulFix;

    /**
     * @var autoVulFixPolicy
     */
    public $autoVulFixPolicy;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @deprecated
     *
     * @var upgradeConfig
     */
    public $upgradeConfig;
    protected $_name = [
        'autoRepair' => 'auto_repair',
        'autoRepairPolicy' => 'auto_repair_policy',
        'autoUpgrade' => 'auto_upgrade',
        'autoUpgradePolicy' => 'auto_upgrade_policy',
        'autoVulFix' => 'auto_vul_fix',
        'autoVulFixPolicy' => 'auto_vul_fix_policy',
        'enable' => 'enable',
        'upgradeConfig' => 'upgrade_config',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRepair) {
            $res['auto_repair'] = $this->autoRepair;
        }
        if (null !== $this->autoRepairPolicy) {
            $res['auto_repair_policy'] = null !== $this->autoRepairPolicy ? $this->autoRepairPolicy->toMap() : null;
        }
        if (null !== $this->autoUpgrade) {
            $res['auto_upgrade'] = $this->autoUpgrade;
        }
        if (null !== $this->autoUpgradePolicy) {
            $res['auto_upgrade_policy'] = null !== $this->autoUpgradePolicy ? $this->autoUpgradePolicy->toMap() : null;
        }
        if (null !== $this->autoVulFix) {
            $res['auto_vul_fix'] = $this->autoVulFix;
        }
        if (null !== $this->autoVulFixPolicy) {
            $res['auto_vul_fix_policy'] = null !== $this->autoVulFixPolicy ? $this->autoVulFixPolicy->toMap() : null;
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
        if (isset($map['auto_repair_policy'])) {
            $model->autoRepairPolicy = autoRepairPolicy::fromMap($map['auto_repair_policy']);
        }
        if (isset($map['auto_upgrade'])) {
            $model->autoUpgrade = $map['auto_upgrade'];
        }
        if (isset($map['auto_upgrade_policy'])) {
            $model->autoUpgradePolicy = autoUpgradePolicy::fromMap($map['auto_upgrade_policy']);
        }
        if (isset($map['auto_vul_fix'])) {
            $model->autoVulFix = $map['auto_vul_fix'];
        }
        if (isset($map['auto_vul_fix_policy'])) {
            $model->autoVulFixPolicy = autoVulFixPolicy::fromMap($map['auto_vul_fix_policy']);
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
