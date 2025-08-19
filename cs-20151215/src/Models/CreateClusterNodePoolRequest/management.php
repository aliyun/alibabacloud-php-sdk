<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management\autoRepairPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management\autoUpgradePolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management\autoVulFixPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management\upgradeConfig;

class management extends Model
{
    /**
     * @var bool
     */
    public $autoRepair;

    /**
     * @var autoRepairPolicy
     */
    public $autoRepairPolicy;

    /**
     * @var bool
     */
    public $autoUpgrade;

    /**
     * @var autoUpgradePolicy
     */
    public $autoUpgradePolicy;

    /**
     * @var bool
     */
    public $autoVulFix;

    /**
     * @var autoVulFixPolicy
     */
    public $autoVulFixPolicy;

    /**
     * @var bool
     */
    public $enable;

    /**
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

    public function validate()
    {
        if (null !== $this->autoRepairPolicy) {
            $this->autoRepairPolicy->validate();
        }
        if (null !== $this->autoUpgradePolicy) {
            $this->autoUpgradePolicy->validate();
        }
        if (null !== $this->autoVulFixPolicy) {
            $this->autoVulFixPolicy->validate();
        }
        if (null !== $this->upgradeConfig) {
            $this->upgradeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRepair) {
            $res['auto_repair'] = $this->autoRepair;
        }

        if (null !== $this->autoRepairPolicy) {
            $res['auto_repair_policy'] = null !== $this->autoRepairPolicy ? $this->autoRepairPolicy->toArray($noStream) : $this->autoRepairPolicy;
        }

        if (null !== $this->autoUpgrade) {
            $res['auto_upgrade'] = $this->autoUpgrade;
        }

        if (null !== $this->autoUpgradePolicy) {
            $res['auto_upgrade_policy'] = null !== $this->autoUpgradePolicy ? $this->autoUpgradePolicy->toArray($noStream) : $this->autoUpgradePolicy;
        }

        if (null !== $this->autoVulFix) {
            $res['auto_vul_fix'] = $this->autoVulFix;
        }

        if (null !== $this->autoVulFixPolicy) {
            $res['auto_vul_fix_policy'] = null !== $this->autoVulFixPolicy ? $this->autoVulFixPolicy->toArray($noStream) : $this->autoVulFixPolicy;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->upgradeConfig) {
            $res['upgrade_config'] = null !== $this->upgradeConfig ? $this->upgradeConfig->toArray($noStream) : $this->upgradeConfig;
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
