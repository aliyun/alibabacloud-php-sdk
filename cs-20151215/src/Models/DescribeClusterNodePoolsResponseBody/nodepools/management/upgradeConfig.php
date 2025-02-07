<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\management;

use AlibabaCloud\Dara\Model;

class upgradeConfig extends Model
{
    /**
     * @var bool
     */
    public $autoUpgrade;
    /**
     * @var int
     */
    public $maxUnavailable;
    /**
     * @var int
     */
    public $surge;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
