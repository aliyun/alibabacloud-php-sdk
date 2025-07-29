<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management\autoRepairPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management\autoUpgradePolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management\autoVulFixPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management\upgradeConfig;
use AlibabaCloud\Tea\Model;

class management extends Model
{
    /**
     * @description Specifies whether to enable auto node repair. This parameter takes effect only when `enable` is set to true.
     *
     *   `true`: enables auto node repair.
     *   `false`: disables auto node repair.
     *
     * If `enable` is set to true, the default value of this parameter is `true`. If `enable` is set to false, the default value of this parameter is `false`.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRepair;

    /**
     * @description The auto node repair policy.
     *
     * @var autoRepairPolicy
     */
    public $autoRepairPolicy;

    /**
     * @description Specifies whether to enable auto node upgrade. This parameter takes effect only when `enable` is set to true.
     *
     *   `true`: enables auto node upgrade.
     *   `false`: disables auto node upgrade.
     *
     * If `enable` is set to true, the default value of this parameter is `true`. If `enable` is set to false, the default value of this parameter is `false`.
     *
     * @example true
     *
     * @var bool
     */
    public $autoUpgrade;

    /**
     * @description The auto node upgrade policy.
     *
     * @var autoUpgradePolicy
     */
    public $autoUpgradePolicy;

    /**
     * @description Specifies whether to enable auto Common Vulnerabilities and Exposures (CVE) patching. This parameter takes effect only when `enable` is set to true.
     *
     *   `true`: enables auto CVE patching.
     *   `false`: disables auto CVE patching.
     *
     * If `enable` is set to true, the default value of this parameter is `true`. If `enable` is set to false, the default value of this parameter is `false`.
     *
     * @example true
     *
     * @var bool
     */
    public $autoVulFix;

    /**
     * @description The auto CVE patching policy.
     *
     * @var autoVulFixPolicy
     */
    public $autoVulFixPolicy;

    /**
     * @description Specifies whether to enable the managed node pool feature. Valid values:
     *
     *   `true`: enables the managed node pool feature.
     *   `false`: disables the managed node pool feature. Other parameters in this section take effect only when enable is set to true.
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The configurations of auto upgrade. The configurations take effect only when `enable` is set to true.
     *
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
