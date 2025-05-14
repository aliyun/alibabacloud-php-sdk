<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management;

use AlibabaCloud\Dara\Model;

class autoUpgradePolicy extends Model
{
    /**
     * @var bool
     */
    public $autoUpgradeKubelet;

    /**
     * @var bool
     */
    public $autoUpgradeOs;

    /**
     * @var bool
     */
    public $autoUpgradeRuntime;
    protected $_name = [
        'autoUpgradeKubelet' => 'auto_upgrade_kubelet',
        'autoUpgradeOs' => 'auto_upgrade_os',
        'autoUpgradeRuntime' => 'auto_upgrade_runtime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
