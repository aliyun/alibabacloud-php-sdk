<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\management;

use AlibabaCloud\Tea\Model;

class autoUpgradePolicy extends Model
{
    /**
     * @description Specifies whether to allow auto update of the kubelet.
     *
     * @example true
     *
     * @var bool
     */
    public $autoUpgradeKubelet;
    protected $_name = [
        'autoUpgradeKubelet' => 'auto_upgrade_kubelet',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUpgradeKubelet) {
            $res['auto_upgrade_kubelet'] = $this->autoUpgradeKubelet;
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

        return $model;
    }
}
