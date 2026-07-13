<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetModelInvocationSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetModelInvocationSummaryResponseBody\data\providerDistribution;

class data extends Model
{
    /**
     * @var float
     */
    public $callFrequency;

    /**
     * @var providerDistribution[]
     */
    public $providerDistribution;

    /**
     * @var int
     */
    public $todayCallCount;

    /**
     * @var float
     */
    public $todayChangeRate;

    /**
     * @var int
     */
    public $weekCallCount;

    /**
     * @var float
     */
    public $weekChangeRate;
    protected $_name = [
        'callFrequency' => 'CallFrequency',
        'providerDistribution' => 'ProviderDistribution',
        'todayCallCount' => 'TodayCallCount',
        'todayChangeRate' => 'TodayChangeRate',
        'weekCallCount' => 'WeekCallCount',
        'weekChangeRate' => 'WeekChangeRate',
    ];

    public function validate()
    {
        if (\is_array($this->providerDistribution)) {
            Model::validateArray($this->providerDistribution);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callFrequency) {
            $res['CallFrequency'] = $this->callFrequency;
        }

        if (null !== $this->providerDistribution) {
            if (\is_array($this->providerDistribution)) {
                $res['ProviderDistribution'] = [];
                $n1 = 0;
                foreach ($this->providerDistribution as $item1) {
                    $res['ProviderDistribution'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->todayCallCount) {
            $res['TodayCallCount'] = $this->todayCallCount;
        }

        if (null !== $this->todayChangeRate) {
            $res['TodayChangeRate'] = $this->todayChangeRate;
        }

        if (null !== $this->weekCallCount) {
            $res['WeekCallCount'] = $this->weekCallCount;
        }

        if (null !== $this->weekChangeRate) {
            $res['WeekChangeRate'] = $this->weekChangeRate;
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
        if (isset($map['CallFrequency'])) {
            $model->callFrequency = $map['CallFrequency'];
        }

        if (isset($map['ProviderDistribution'])) {
            if (!empty($map['ProviderDistribution'])) {
                $model->providerDistribution = [];
                $n1 = 0;
                foreach ($map['ProviderDistribution'] as $item1) {
                    $model->providerDistribution[$n1] = providerDistribution::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TodayCallCount'])) {
            $model->todayCallCount = $map['TodayCallCount'];
        }

        if (isset($map['TodayChangeRate'])) {
            $model->todayChangeRate = $map['TodayChangeRate'];
        }

        if (isset($map['WeekCallCount'])) {
            $model->weekCallCount = $map['WeekCallCount'];
        }

        if (isset($map['WeekChangeRate'])) {
            $model->weekChangeRate = $map['WeekChangeRate'];
        }

        return $model;
    }
}
