<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterNodePoolRequest\management;

use AlibabaCloud\Tea\Model;

class upgradeConfig extends Model
{
    /**
     * @description Specifies whether to enable auto update.
     *
     *   true: enables auto update.
     *   false: disables auto update.
     *
     * Default value: `true`.
     * @example true
     *
     * @var bool
     */
    public $autoUpgrade;

    /**
     * @description The maximum number of nodes that can be in the Unavailable state.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $maxUnavailable;

    /**
     * @description The number of additional nodes. Additional nodes are used to host the workloads of nodes that are being updated.
     *
     * > We recommend that you set the number of additional nodes to a value that is no greater than the current number of nodes.
     * @example 5
     *
     * @var int
     */
    public $surge;

    /**
     * @description The percentage of additional nodes to the nodes in the node pool. You must set this parameter or `surge`.
     *
     * @example 0
     *
     * @var int
     */
    public $surgePercentage;
    protected $_name = [
        'autoUpgrade'     => 'auto_upgrade',
        'maxUnavailable'  => 'max_unavailable',
        'surge'           => 'surge',
        'surgePercentage' => 'surge_percentage',
    ];

    public function validate()
    {
    }

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
