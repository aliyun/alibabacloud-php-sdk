<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\management;

use AlibabaCloud\Tea\Model;

class upgradeConfig extends Model
{
    /**
     * @description This parameter is deprecated. Use the preceding `auto_upgrade` parameter instead.
     *
     * Specifies whether to enable auto upgrade. Valid values:
     *
     *   true: enables auto upgrade.
     *   false: disables auto upgrade.
     *
     * Default value: `true`.
     *
     * @example true
     *
     * @deprecated
     *
     * @var bool
     */
    public $autoUpgrade;

    /**
     * @description The maximum number of nodes that can be in the Unavailable state.
     *
     * Valid values: 1 to 1000.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $maxUnavailable;

    /**
     * @description The number of additional nodes that are temporarily added to the node pool during an auto upgrade. Specify this parameter or `surge_percentage`.
     *
     * A node is unavailable during an upgrade. Additional nodes are used to temporarily host the workloads of nodes that are being upgraded.
     *
     * >  We recommend that you specify a value that does not exceed the current number of nodes in the node pool.
     *
     * @example 5
     *
     * @var int
     */
    public $surge;

    /**
     * @description The percentage of additional nodes in the node pool. Specify this parameter or the `surge` parameter is specified.
     *
     * The number of additional nodes = The percentage of additional nodes × The number of nodes in the node pool. For example, if the percentage of additional nodes is 50% and the number of nodes in the node pool is 6, the number of additional nodes is 3.
     *
     * @example 0
     *
     * @var int
     */
    public $surgePercentage;
    protected $_name = [
        'autoUpgrade' => 'auto_upgrade',
        'maxUnavailable' => 'max_unavailable',
        'surge' => 'surge',
        'surgePercentage' => 'surge_percentage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoUpgrade) {
            $res['auto_upgrade'] = $this->autoUpgrade;
        }
        if (null !== $this->maxUnavailable) {
            $res['max_unavailable'] = $this->maxUnavailable;
        }
        if (null !== $this->surge) {
            $res['surge'] = $this->surge;
        }
        if (null !== $this->surgePercentage) {
            $res['surge_percentage'] = $this->surgePercentage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upgradeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_upgrade'])) {
            $model->autoUpgrade = $map['auto_upgrade'];
        }
        if (isset($map['max_unavailable'])) {
            $model->maxUnavailable = $map['max_unavailable'];
        }
        if (isset($map['surge'])) {
            $model->surge = $map['surge'];
        }
        if (isset($map['surge_percentage'])) {
            $model->surgePercentage = $map['surge_percentage'];
        }

        return $model;
    }
}
