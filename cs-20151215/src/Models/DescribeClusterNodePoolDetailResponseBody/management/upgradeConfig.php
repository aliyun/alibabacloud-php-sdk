<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\management;

use AlibabaCloud\Tea\Model;

class upgradeConfig extends Model
{
    /**
     * @description Indicates whether auto upgrade is enabled. Valid values:
     *
     *   `true`: Auto upgrade is enabled.
     *   `false`: Auto upgrade is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $autoUpgrade;

    /**
     * @description The maximum number of nodes that can be in the Unavailable state. Valid values: 1 to 1000.
     *
     * Default value: 1
     * @example 1
     *
     * @var int
     */
    public $maxUnavailable;

    /**
     * @description The number of nodes that are temporarily added to the node pool during an auto upgrade.
     *
     * @example 5
     *
     * @var int
     */
    public $surge;

    /**
     * @description The percentage of temporary nodes to the nodes in the node pool. You must set this parameter or `surge`.
     *
     * @example 50
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
