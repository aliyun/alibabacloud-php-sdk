<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoThrottleRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoThrottleRulesResponseBody\data\enableAutoThrottleList;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoThrottleRulesResponseBody\data\turnOffAutoThrottleList;

class data extends Model
{
    /**
     * @var int
     */
    public $enableAutoThrottleCount;

    /**
     * @var enableAutoThrottleList[]
     */
    public $enableAutoThrottleList;

    /**
     * @var int
     */
    public $neverEnableAutoThrottleOrReleasedInstanceCount;

    /**
     * @var string[]
     */
    public $neverEnableAutoThrottleOrReleasedInstanceIdList;

    /**
     * @var int
     */
    public $totalAutoThrottleRulesCount;

    /**
     * @var int
     */
    public $turnOffAutoThrottleCount;

    /**
     * @var turnOffAutoThrottleList[]
     */
    public $turnOffAutoThrottleList;
    protected $_name = [
        'enableAutoThrottleCount' => 'EnableAutoThrottleCount',
        'enableAutoThrottleList' => 'EnableAutoThrottleList',
        'neverEnableAutoThrottleOrReleasedInstanceCount' => 'NeverEnableAutoThrottleOrReleasedInstanceCount',
        'neverEnableAutoThrottleOrReleasedInstanceIdList' => 'NeverEnableAutoThrottleOrReleasedInstanceIdList',
        'totalAutoThrottleRulesCount' => 'TotalAutoThrottleRulesCount',
        'turnOffAutoThrottleCount' => 'TurnOffAutoThrottleCount',
        'turnOffAutoThrottleList' => 'TurnOffAutoThrottleList',
    ];

    public function validate()
    {
        if (\is_array($this->enableAutoThrottleList)) {
            Model::validateArray($this->enableAutoThrottleList);
        }
        if (\is_array($this->neverEnableAutoThrottleOrReleasedInstanceIdList)) {
            Model::validateArray($this->neverEnableAutoThrottleOrReleasedInstanceIdList);
        }
        if (\is_array($this->turnOffAutoThrottleList)) {
            Model::validateArray($this->turnOffAutoThrottleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableAutoThrottleCount) {
            $res['EnableAutoThrottleCount'] = $this->enableAutoThrottleCount;
        }

        if (null !== $this->enableAutoThrottleList) {
            if (\is_array($this->enableAutoThrottleList)) {
                $res['EnableAutoThrottleList'] = [];
                $n1 = 0;
                foreach ($this->enableAutoThrottleList as $item1) {
                    $res['EnableAutoThrottleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->neverEnableAutoThrottleOrReleasedInstanceCount) {
            $res['NeverEnableAutoThrottleOrReleasedInstanceCount'] = $this->neverEnableAutoThrottleOrReleasedInstanceCount;
        }

        if (null !== $this->neverEnableAutoThrottleOrReleasedInstanceIdList) {
            if (\is_array($this->neverEnableAutoThrottleOrReleasedInstanceIdList)) {
                $res['NeverEnableAutoThrottleOrReleasedInstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->neverEnableAutoThrottleOrReleasedInstanceIdList as $item1) {
                    $res['NeverEnableAutoThrottleOrReleasedInstanceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalAutoThrottleRulesCount) {
            $res['TotalAutoThrottleRulesCount'] = $this->totalAutoThrottleRulesCount;
        }

        if (null !== $this->turnOffAutoThrottleCount) {
            $res['TurnOffAutoThrottleCount'] = $this->turnOffAutoThrottleCount;
        }

        if (null !== $this->turnOffAutoThrottleList) {
            if (\is_array($this->turnOffAutoThrottleList)) {
                $res['TurnOffAutoThrottleList'] = [];
                $n1 = 0;
                foreach ($this->turnOffAutoThrottleList as $item1) {
                    $res['TurnOffAutoThrottleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['EnableAutoThrottleCount'])) {
            $model->enableAutoThrottleCount = $map['EnableAutoThrottleCount'];
        }

        if (isset($map['EnableAutoThrottleList'])) {
            if (!empty($map['EnableAutoThrottleList'])) {
                $model->enableAutoThrottleList = [];
                $n1 = 0;
                foreach ($map['EnableAutoThrottleList'] as $item1) {
                    $model->enableAutoThrottleList[$n1] = enableAutoThrottleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NeverEnableAutoThrottleOrReleasedInstanceCount'])) {
            $model->neverEnableAutoThrottleOrReleasedInstanceCount = $map['NeverEnableAutoThrottleOrReleasedInstanceCount'];
        }

        if (isset($map['NeverEnableAutoThrottleOrReleasedInstanceIdList'])) {
            if (!empty($map['NeverEnableAutoThrottleOrReleasedInstanceIdList'])) {
                $model->neverEnableAutoThrottleOrReleasedInstanceIdList = [];
                $n1 = 0;
                foreach ($map['NeverEnableAutoThrottleOrReleasedInstanceIdList'] as $item1) {
                    $model->neverEnableAutoThrottleOrReleasedInstanceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalAutoThrottleRulesCount'])) {
            $model->totalAutoThrottleRulesCount = $map['TotalAutoThrottleRulesCount'];
        }

        if (isset($map['TurnOffAutoThrottleCount'])) {
            $model->turnOffAutoThrottleCount = $map['TurnOffAutoThrottleCount'];
        }

        if (isset($map['TurnOffAutoThrottleList'])) {
            if (!empty($map['TurnOffAutoThrottleList'])) {
                $model->turnOffAutoThrottleList = [];
                $n1 = 0;
                foreach ($map['TurnOffAutoThrottleList'] as $item1) {
                    $model->turnOffAutoThrottleList[$n1] = turnOffAutoThrottleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
