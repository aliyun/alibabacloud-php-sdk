<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management;

use AlibabaCloud\Tea\Model;

class autoUpgradePolicy extends Model
{
    /**
     * @description Specifies whether to allow auto update of the kubelet. This parameter takes effect only if you set `auto_upgrade` to true. Valid values:
     *
     *   `true`: allows auto update of the kubelet.
     *   `false`: does not allow auto update of the kubelet.
     *
     * When `auto_upgrade` is set to true, the default value of this parameter is `true`. When `auto_upgrade` is set to false, the default value of this parameter is `false`.
     * @example true
     *
     * @var bool
     */
    public $autoUpgradeKubelet;

    /**
     * @description Specifies whether to allow auto update of the operating system (OS). This parameter takes effect only if you set `auto_upgrade` to true. Valid values:
     *
     *   `true`: allows auto update of the OS.
     *   `false`: does not allow auto update of the OS.
     *
     * Default value: `false`.
     * @var bool
     */
    public $autoUpgradeOs;

    /**
     * @description Specifies whether to allow auto update of the runtime. This parameter takes effect only if you set `auto_upgrade` to true. Valid values:
     *
     *   `true`: allows auto update of the runtime.
     *   `false`: does not allow auto update of the runtime.
     *
     * Default value: `false`.
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
