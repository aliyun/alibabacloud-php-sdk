<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolDetailResponseBody\management;

use AlibabaCloud\Tea\Model;

class upgradeConfig extends Model
{
    /**
     * @description 是否启用自动升级，自修复。
     *
     * @var bool
     */
    public $autoUpgrade;

    /**
     * @description 额外节点数量。
     *
     * @var int
     */
    public $surge;

    /**
     * @description 额外节点比例， 和surge 二选一。
     *
     * @var int
     */
    public $surgePercentage;

    /**
     * @description 最大不可用节点数量。
     *
     * @var int
     */
    public $maxUnavailable;
    protected $_name = [
        'autoUpgrade'     => 'auto_upgrade',
        'surge'           => 'surge',
        'surgePercentage' => 'surge_percentage',
        'maxUnavailable'  => 'max_unavailable',
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
        if (null !== $this->surge) {
            $res['surge'] = $this->surge;
        }
        if (null !== $this->surgePercentage) {
            $res['surge_percentage'] = $this->surgePercentage;
        }
        if (null !== $this->maxUnavailable) {
            $res['max_unavailable'] = $this->maxUnavailable;
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
        if (isset($map['surge'])) {
            $model->surge = $map['surge'];
        }
        if (isset($map['surge_percentage'])) {
            $model->surgePercentage = $map['surge_percentage'];
        }
        if (isset($map['max_unavailable'])) {
            $model->maxUnavailable = $map['max_unavailable'];
        }

        return $model;
    }
}
