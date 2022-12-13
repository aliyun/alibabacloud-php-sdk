<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ProblemLevelGroupValue extends Model
{
    /**
     * @var int
     */
    public $childRuleRelation;

    /**
     * @var int
     */
    public $matchCount;

    /**
     * @var int
     */
    public $timeWindow;

    /**
     * @var string
     */
    public $timeWindowUnit;

    /**
     * @var bool
     */
    public $enableUpgrade;

    /**
     * @var int
     */
    public $upgradeTimeWindow;

    /**
     * @var string
     */
    public $upgradeTimeWindowUnit;
    protected $_name = [
        'childRuleRelation'     => 'childRuleRelation',
        'matchCount'            => 'matchCount',
        'timeWindow'            => 'timeWindow',
        'timeWindowUnit'        => 'timeWindowUnit',
        'enableUpgrade'         => 'enableUpgrade',
        'upgradeTimeWindow'     => 'upgradeTimeWindow',
        'upgradeTimeWindowUnit' => 'upgradeTimeWindowUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childRuleRelation) {
            $res['childRuleRelation'] = $this->childRuleRelation;
        }
        if (null !== $this->matchCount) {
            $res['matchCount'] = $this->matchCount;
        }
        if (null !== $this->timeWindow) {
            $res['timeWindow'] = $this->timeWindow;
        }
        if (null !== $this->timeWindowUnit) {
            $res['timeWindowUnit'] = $this->timeWindowUnit;
        }
        if (null !== $this->enableUpgrade) {
            $res['enableUpgrade'] = $this->enableUpgrade;
        }
        if (null !== $this->upgradeTimeWindow) {
            $res['upgradeTimeWindow'] = $this->upgradeTimeWindow;
        }
        if (null !== $this->upgradeTimeWindowUnit) {
            $res['upgradeTimeWindowUnit'] = $this->upgradeTimeWindowUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProblemLevelGroupValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['childRuleRelation'])) {
            $model->childRuleRelation = $map['childRuleRelation'];
        }
        if (isset($map['matchCount'])) {
            $model->matchCount = $map['matchCount'];
        }
        if (isset($map['timeWindow'])) {
            $model->timeWindow = $map['timeWindow'];
        }
        if (isset($map['timeWindowUnit'])) {
            $model->timeWindowUnit = $map['timeWindowUnit'];
        }
        if (isset($map['enableUpgrade'])) {
            $model->enableUpgrade = $map['enableUpgrade'];
        }
        if (isset($map['upgradeTimeWindow'])) {
            $model->upgradeTimeWindow = $map['upgradeTimeWindow'];
        }
        if (isset($map['upgradeTimeWindowUnit'])) {
            $model->upgradeTimeWindowUnit = $map['upgradeTimeWindowUnit'];
        }

        return $model;
    }
}
