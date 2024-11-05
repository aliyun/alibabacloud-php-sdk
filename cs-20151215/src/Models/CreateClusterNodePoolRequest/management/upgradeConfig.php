<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest\management;

use AlibabaCloud\Tea\Model;

class upgradeConfig extends Model
{
    /**
     * @description Specifies whether to enable auto update. Valid values:
     *
     *   `true`: enables auto update.
     *   `false`: disables auto update.
     *
     **
     *
     **Caution** This parameter is deprecated. Use the preceding auto_upgrade parameter instead.
     *
     * @example false
     *
     * @deprecated
     *
     * @var bool
     */
    public $autoUpgrade;

    /**
     * @description The maximum number of nodes that can be in the Unavailable state. Valid values: 1 to 1000.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $maxUnavailable;

    /**
     * @description The number of additional nodes.
     *
     * @example 0
     *
     * @var int
     */
    public $surge;

    /**
     * @description The percentage of additional nodes that are temporarily added to the node pool during an auto update. You must set this parameter or `surge`.
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
