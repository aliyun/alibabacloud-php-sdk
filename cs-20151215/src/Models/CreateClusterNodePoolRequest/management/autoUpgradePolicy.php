<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management;

use AlibabaCloud\Tea\Model;

class autoUpgradePolicy extends Model
{
    /**
     * @description Specifies whether to allow auto update of the kubelet. This parameter takes effect only if `auto_upgrade` is set to true. Valid values:
     *
     *   `true`
     *   `false`
     *
     * If `auto_upgrade` is set to true, the default value of this parameter is `true`. If `auto_upgrade` is set to false, the default value of this parameter is `false`.
     * @example true
     *
     * @var bool
     */
    public $autoUpgradeKubelet;

    /**
     * @description 是否允许自动升级操作系统，仅当`auto_upgrade=true`时生效。取值：
     * 默认值为`false`
     * @var bool
     */
    public $autoUpgradeOs;

    /**
     * @description 是否允许自动升级运行时，仅当`auto_upgrade=true`时生效。取值：
     * 默认值为`false`
     * @var bool
     */
    public $autoUpgradeRuntime;
    protected $_name = [
        'autoUpgradeKubelet' => 'auto_upgrade_kubelet',
        'autoUpgradeOs'      => 'auto_upgrade_os',
        'autoUpgradeRuntime' => 'auto_upgrade_runtime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUpgradeKubelet) {
            $res['auto_upgrade_kubelet'] = $this->autoUpgradeKubelet;
        }
        if (null !== $this->autoUpgradeOs) {
            $res['auto_upgrade_os'] = $this->autoUpgradeOs;
        }
        if (null !== $this->autoUpgradeRuntime) {
            $res['auto_upgrade_runtime'] = $this->autoUpgradeRuntime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoUpgradePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_upgrade_kubelet'])) {
            $model->autoUpgradeKubelet = $map['auto_upgrade_kubelet'];
        }
        if (isset($map['auto_upgrade_os'])) {
            $model->autoUpgradeOs = $map['auto_upgrade_os'];
        }
        if (isset($map['auto_upgrade_runtime'])) {
            $model->autoUpgradeRuntime = $map['auto_upgrade_runtime'];
        }

        return $model;
    }
}
