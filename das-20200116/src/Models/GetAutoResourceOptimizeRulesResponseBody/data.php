<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesResponseBody\data\enableAutoResourceOptimizeList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesResponseBody\data\hasEnableRuleButNotDasProList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoResourceOptimizeRulesResponseBody\data\turnOffAutoResourceOptimizeList;

class data extends Model
{
    /**
     * @var int
     */
    public $enableAutoResourceOptimizeCount;

    /**
     * @var enableAutoResourceOptimizeList[]
     */
    public $enableAutoResourceOptimizeList;

    /**
     * @var int
     */
    public $hasEnableRuleButNotDasProCount;

    /**
     * @var hasEnableRuleButNotDasProList[]
     */
    public $hasEnableRuleButNotDasProList;

    /**
     * @var int
     */
    public $neverEnableAutoResourceOptimizeOrReleasedInstanceCount;

    /**
     * @var string[]
     */
    public $neverEnableAutoResourceOptimizeOrReleasedInstanceIdList;

    /**
     * @var int
     */
    public $totalAutoResourceOptimizeRulesCount;

    /**
     * @var int
     */
    public $turnOffAutoResourceOptimizeCount;

    /**
     * @var turnOffAutoResourceOptimizeList[]
     */
    public $turnOffAutoResourceOptimizeList;
    protected $_name = [
        'enableAutoResourceOptimizeCount' => 'EnableAutoResourceOptimizeCount',
        'enableAutoResourceOptimizeList' => 'EnableAutoResourceOptimizeList',
        'hasEnableRuleButNotDasProCount' => 'HasEnableRuleButNotDasProCount',
        'hasEnableRuleButNotDasProList' => 'HasEnableRuleButNotDasProList',
        'neverEnableAutoResourceOptimizeOrReleasedInstanceCount' => 'NeverEnableAutoResourceOptimizeOrReleasedInstanceCount',
        'neverEnableAutoResourceOptimizeOrReleasedInstanceIdList' => 'NeverEnableAutoResourceOptimizeOrReleasedInstanceIdList',
        'totalAutoResourceOptimizeRulesCount' => 'TotalAutoResourceOptimizeRulesCount',
        'turnOffAutoResourceOptimizeCount' => 'TurnOffAutoResourceOptimizeCount',
        'turnOffAutoResourceOptimizeList' => 'TurnOffAutoResourceOptimizeList',
    ];

    public function validate()
    {
        if (\is_array($this->enableAutoResourceOptimizeList)) {
            Model::validateArray($this->enableAutoResourceOptimizeList);
        }
        if (\is_array($this->hasEnableRuleButNotDasProList)) {
            Model::validateArray($this->hasEnableRuleButNotDasProList);
        }
        if (\is_array($this->neverEnableAutoResourceOptimizeOrReleasedInstanceIdList)) {
            Model::validateArray($this->neverEnableAutoResourceOptimizeOrReleasedInstanceIdList);
        }
        if (\is_array($this->turnOffAutoResourceOptimizeList)) {
            Model::validateArray($this->turnOffAutoResourceOptimizeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableAutoResourceOptimizeCount) {
            $res['EnableAutoResourceOptimizeCount'] = $this->enableAutoResourceOptimizeCount;
        }

        if (null !== $this->enableAutoResourceOptimizeList) {
            if (\is_array($this->enableAutoResourceOptimizeList)) {
                $res['EnableAutoResourceOptimizeList'] = [];
                $n1 = 0;
                foreach ($this->enableAutoResourceOptimizeList as $item1) {
                    $res['EnableAutoResourceOptimizeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->hasEnableRuleButNotDasProCount) {
            $res['HasEnableRuleButNotDasProCount'] = $this->hasEnableRuleButNotDasProCount;
        }

        if (null !== $this->hasEnableRuleButNotDasProList) {
            if (\is_array($this->hasEnableRuleButNotDasProList)) {
                $res['HasEnableRuleButNotDasProList'] = [];
                $n1 = 0;
                foreach ($this->hasEnableRuleButNotDasProList as $item1) {
                    $res['HasEnableRuleButNotDasProList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->neverEnableAutoResourceOptimizeOrReleasedInstanceCount) {
            $res['NeverEnableAutoResourceOptimizeOrReleasedInstanceCount'] = $this->neverEnableAutoResourceOptimizeOrReleasedInstanceCount;
        }

        if (null !== $this->neverEnableAutoResourceOptimizeOrReleasedInstanceIdList) {
            if (\is_array($this->neverEnableAutoResourceOptimizeOrReleasedInstanceIdList)) {
                $res['NeverEnableAutoResourceOptimizeOrReleasedInstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->neverEnableAutoResourceOptimizeOrReleasedInstanceIdList as $item1) {
                    $res['NeverEnableAutoResourceOptimizeOrReleasedInstanceIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->totalAutoResourceOptimizeRulesCount) {
            $res['TotalAutoResourceOptimizeRulesCount'] = $this->totalAutoResourceOptimizeRulesCount;
        }

        if (null !== $this->turnOffAutoResourceOptimizeCount) {
            $res['TurnOffAutoResourceOptimizeCount'] = $this->turnOffAutoResourceOptimizeCount;
        }

        if (null !== $this->turnOffAutoResourceOptimizeList) {
            if (\is_array($this->turnOffAutoResourceOptimizeList)) {
                $res['TurnOffAutoResourceOptimizeList'] = [];
                $n1 = 0;
                foreach ($this->turnOffAutoResourceOptimizeList as $item1) {
                    $res['TurnOffAutoResourceOptimizeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['EnableAutoResourceOptimizeCount'])) {
            $model->enableAutoResourceOptimizeCount = $map['EnableAutoResourceOptimizeCount'];
        }

        if (isset($map['EnableAutoResourceOptimizeList'])) {
            if (!empty($map['EnableAutoResourceOptimizeList'])) {
                $model->enableAutoResourceOptimizeList = [];
                $n1 = 0;
                foreach ($map['EnableAutoResourceOptimizeList'] as $item1) {
                    $model->enableAutoResourceOptimizeList[$n1++] = enableAutoResourceOptimizeList::fromMap($item1);
                }
            }
        }

        if (isset($map['HasEnableRuleButNotDasProCount'])) {
            $model->hasEnableRuleButNotDasProCount = $map['HasEnableRuleButNotDasProCount'];
        }

        if (isset($map['HasEnableRuleButNotDasProList'])) {
            if (!empty($map['HasEnableRuleButNotDasProList'])) {
                $model->hasEnableRuleButNotDasProList = [];
                $n1 = 0;
                foreach ($map['HasEnableRuleButNotDasProList'] as $item1) {
                    $model->hasEnableRuleButNotDasProList[$n1++] = hasEnableRuleButNotDasProList::fromMap($item1);
                }
            }
        }

        if (isset($map['NeverEnableAutoResourceOptimizeOrReleasedInstanceCount'])) {
            $model->neverEnableAutoResourceOptimizeOrReleasedInstanceCount = $map['NeverEnableAutoResourceOptimizeOrReleasedInstanceCount'];
        }

        if (isset($map['NeverEnableAutoResourceOptimizeOrReleasedInstanceIdList'])) {
            if (!empty($map['NeverEnableAutoResourceOptimizeOrReleasedInstanceIdList'])) {
                $model->neverEnableAutoResourceOptimizeOrReleasedInstanceIdList = [];
                $n1 = 0;
                foreach ($map['NeverEnableAutoResourceOptimizeOrReleasedInstanceIdList'] as $item1) {
                    $model->neverEnableAutoResourceOptimizeOrReleasedInstanceIdList[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['TurnOffAutoResourceOptimizeList'] as $item1) {
                    $model->turnOffAutoResourceOptimizeList[$n1++] = turnOffAutoResourceOptimizeList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
