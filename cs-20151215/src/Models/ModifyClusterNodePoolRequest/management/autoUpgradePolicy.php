<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\management;

use AlibabaCloud\Tea\Model;

class autoUpgradePolicy extends Model
{
    /**
     * @description Specifies whether ACK is allowed to automatically update the kubelet. Valid values:
     *
     *   `true`: yes.
     *   `false`: no.
     *
     * @example true
     *
     * @var bool
     */
    public $autoUpgradeKubelet;

    /**
     * @description Specifies whether ACK is allowed to automatically update the operating system. This parameter takes effect only when you specify `auto_upgrade=true`. Valid values:
     *
     *   `true`: yes.
     *   `false`: no.
     *
     * Default value: `false`.
     * @var bool
     */
    public $autoUpgradeOs;

    /**
     * @description Specifies whether ACK is allowed to automatically update the runtime. This parameter takes effect only when you specify `auto_upgrade=true`. Valid values:
     *
     *   `true`: yes.
     *   `false`: no.
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
