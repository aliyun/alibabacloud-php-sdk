<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesResponseBody\data\enableAutoResourceOptimizeList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesResponseBody\data\hasEnableRuleButNotDasProList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesResponseBody\data\turnOffAutoResourceOptimizeList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of database instances for which the automatic fragment recycling feature is currently enabled.
     *
     * @example 1
     *
     * @var int
     */
    public $enableAutoResourceOptimizeCount;

    /**
     * @description The database instances for which the automatic fragment recycling feature is currently enabled.
     *
     * @var enableAutoResourceOptimizeList[]
     */
    public $enableAutoResourceOptimizeList;

    /**
     * @description The number of database instances for which the automatic fragment recycling feature is enabled and DAS Professional Edition is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $hasEnableRuleButNotDasProCount;

    /**
     * @description The database instances for which the automatic fragment recycling feature is enabled and DAS Professional Edition is disabled.
     *
     * > This type of database instance does not perform automatic fragment recycling tasks until DAS Professional Edition is enabled for the instances again.
     * @var hasEnableRuleButNotDasProList[]
     */
    public $hasEnableRuleButNotDasProList;

    /**
     * @description The number of database instances that do not exist or for which the automatic fragment recycling feature has never been enabled.
     *
     * >  If a database instance does not exist, the instance has been released or the specified instance ID is invalid.
     * @example 1
     *
     * @var int
     */
    public $neverEnableAutoResourceOptimizeOrReleasedInstanceCount;

    /**
     * @description The database instances that do not exist or for which the automatic fragment recycling feature has never been enabled.
     *
     * @var string[]
     */
    public $neverEnableAutoResourceOptimizeOrReleasedInstanceIdList;

    /**
     * @description The number of database instances for which the automatic fragment recycling feature has been enabled.
     *
     * @example 3
     *
     * @var int
     */
    public $totalAutoResourceOptimizeRulesCount;

    /**
     * @description The number of database instances for which the automatic fragment recycling feature was once enabled but is currently disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $turnOffAutoResourceOptimizeCount;

    /**
     * @description The database instances for which the automatic fragment recycling feature was once enabled but is currently disabled.
     *
     * @var turnOffAutoResourceOptimizeList[]
     */
    public $turnOffAutoResourceOptimizeList;
    protected $_name = [
        'enableAutoResourceOptimizeCount'                         => 'EnableAutoResourceOptimizeCount',
        'enableAutoResourceOptimizeList'                          => 'EnableAutoResourceOptimizeList',
        'hasEnableRuleButNotDasProCount'                          => 'HasEnableRuleButNotDasProCount',
        'hasEnableRuleButNotDasProList'                           => 'HasEnableRuleButNotDasProList',
        'neverEnableAutoResourceOptimizeOrReleasedInstanceCount'  => 'NeverEnableAutoResourceOptimizeOrReleasedInstanceCount',
        'neverEnableAutoResourceOptimizeOrReleasedInstanceIdList' => 'NeverEnableAutoResourceOptimizeOrReleasedInstanceIdList',
        'totalAutoResourceOptimizeRulesCount'                     => 'TotalAutoResourceOptimizeRulesCount',
        'turnOffAutoResourceOptimizeCount'                        => 'TurnOffAutoResourceOptimizeCount',
        'turnOffAutoResourceOptimizeList'                         => 'TurnOffAutoResourceOptimizeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableAutoResourceOptimizeCount) {
            $res['EnableAutoResourceOptimizeCount'] = $this->enableAutoResourceOptimizeCount;
        }
        if (null !== $this->enableAutoResourceOptimizeList) {
            $res['EnableAutoResourceOptimizeList'] = [];
            if (null !== $this->enableAutoResourceOptimizeList && \is_array($this->enableAutoResourceOptimizeList)) {
                $n = 0;
                foreach ($this->enableAutoResourceOptimizeList as $item) {
                    $res['EnableAutoResourceOptimizeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasEnableRuleButNotDasProCount) {
            $res['HasEnableRuleButNotDasProCount'] = $this->hasEnableRuleButNotDasProCount;
        }
        if (null !== $this->hasEnableRuleButNotDasProList) {
            $res['HasEnableRuleButNotDasProList'] = [];
            if (null !== $this->hasEnableRuleButNotDasProList && \is_array($this->hasEnableRuleButNotDasProList)) {
                $n = 0;
                foreach ($this->hasEnableRuleButNotDasProList as $item) {
                    $res['HasEnableRuleButNotDasProList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->neverEnableAutoResourceOptimizeOrReleasedInstanceCount) {
            $res['NeverEnableAutoResourceOptimizeOrReleasedInstanceCount'] = $this->neverEnableAutoResourceOptimizeOrReleasedInstanceCount;
        }
        if (null !== $this->neverEnableAutoResourceOptimizeOrReleasedInstanceIdList) {
            $res['NeverEnableAutoResourceOptimizeOrReleasedInstanceIdList'] = $this->neverEnableAutoResourceOptimizeOrReleasedInstanceIdList;
        }
        if (null !== $this->totalAutoResourceOptimizeRulesCount) {
            $res['TotalAutoResourceOptimizeRulesCount'] = $this->totalAutoResourceOptimizeRulesCount;
        }
        if (null !== $this->turnOffAutoResourceOptimizeCount) {
            $res['TurnOffAutoResourceOptimizeCount'] = $this->turnOffAutoResourceOptimizeCount;
        }
        if (null !== $this->turnOffAutoResourceOptimizeList) {
            $res['TurnOffAutoResourceOptimizeList'] = [];
            if (null !== $this->turnOffAutoResourceOptimizeList && \is_array($this->turnOffAutoResourceOptimizeList)) {
                $n = 0;
                foreach ($this->turnOffAutoResourceOptimizeList as $item) {
                    $res['TurnOffAutoResourceOptimizeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableAutoResourceOptimizeCount'])) {
            $model->enableAutoResourceOptimizeCount = $map['EnableAutoResourceOptimizeCount'];
        }
        if (isset($map['EnableAutoResourceOptimizeList'])) {
            if (!empty($map['EnableAutoResourceOptimizeList'])) {
                $model->enableAutoResourceOptimizeList = [];
                $n                                     = 0;
                foreach ($map['EnableAutoResourceOptimizeList'] as $item) {
                    $model->enableAutoResourceOptimizeList[$n++] = null !== $item ? enableAutoResourceOptimizeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasEnableRuleButNotDasProCount'])) {
            $model->hasEnableRuleButNotDasProCount = $map['HasEnableRuleButNotDasProCount'];
        }
        if (isset($map['HasEnableRuleButNotDasProList'])) {
            if (!empty($map['HasEnableRuleButNotDasProList'])) {
                $model->hasEnableRuleButNotDasProList = [];
                $n                                    = 0;
                foreach ($map['HasEnableRuleButNotDasProList'] as $item) {
                    $model->hasEnableRuleButNotDasProList[$n++] = null !== $item ? hasEnableRuleButNotDasProList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NeverEnableAutoResourceOptimizeOrReleasedInstanceCount'])) {
            $model->neverEnableAutoResourceOptimizeOrReleasedInstanceCount = $map['NeverEnableAutoResourceOptimizeOrReleasedInstanceCount'];
        }
        if (isset($map['NeverEnableAutoResourceOptimizeOrReleasedInstanceIdList'])) {
            if (!empty($map['NeverEnableAutoResourceOptimizeOrReleasedInstanceIdList'])) {
                $model->neverEnableAutoResourceOptimizeOrReleasedInstanceIdList = $map['NeverEnableAutoResourceOptimizeOrReleasedInstanceIdList'];
            }
        }
        if (isset($map['TotalAutoResourceOptimizeRulesCount'])) {
            $model->totalAutoResourceOptimizeRulesCount = $map['TotalAutoResourceOptimizeRulesCount'];
        }
        if (isset($map['TurnOffAutoResourceOptimizeCount'])) {
            $model->turnOffAutoResourceOptimizeCount = $map['TurnOffAutoResourceOptimizeCount'];
        }
        if (isset($map['TurnOffAutoResourceOptimizeList'])) {
            if (!empty($map['TurnOffAutoResourceOptimizeList'])) {
                $model->turnOffAutoResourceOptimizeList = [];
                $n                                      = 0;
                foreach ($map['TurnOffAutoResourceOptimizeList'] as $item) {
                    $model->turnOffAutoResourceOptimizeList[$n++] = null !== $item ? turnOffAutoResourceOptimizeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
