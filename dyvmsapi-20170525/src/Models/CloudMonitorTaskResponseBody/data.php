<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody\data\agentInfo;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody\data\agentStatisticList;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody\data\channelInfo;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody\data\removedAgentStatisticList;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody\data\statistic;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudMonitorTaskResponseBody\data\todayStatistic;

class data extends Model
{
    /**
     * @var agentInfo
     */
    public $agentInfo;

    /**
     * @var agentStatisticList[]
     */
    public $agentStatisticList;

    /**
     * @var channelInfo
     */
    public $channelInfo;

    /**
     * @var removedAgentStatisticList[]
     */
    public $removedAgentStatisticList;

    /**
     * @var statistic
     */
    public $statistic;

    /**
     * @var todayStatistic
     */
    public $todayStatistic;
    protected $_name = [
        'agentInfo' => 'AgentInfo',
        'agentStatisticList' => 'AgentStatisticList',
        'channelInfo' => 'ChannelInfo',
        'removedAgentStatisticList' => 'RemovedAgentStatisticList',
        'statistic' => 'Statistic',
        'todayStatistic' => 'TodayStatistic',
    ];

    public function validate()
    {
        if (null !== $this->agentInfo) {
            $this->agentInfo->validate();
        }
        if (\is_array($this->agentStatisticList)) {
            Model::validateArray($this->agentStatisticList);
        }
        if (null !== $this->channelInfo) {
            $this->channelInfo->validate();
        }
        if (\is_array($this->removedAgentStatisticList)) {
            Model::validateArray($this->removedAgentStatisticList);
        }
        if (null !== $this->statistic) {
            $this->statistic->validate();
        }
        if (null !== $this->todayStatistic) {
            $this->todayStatistic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentInfo) {
            $res['AgentInfo'] = null !== $this->agentInfo ? $this->agentInfo->toArray($noStream) : $this->agentInfo;
        }

        if (null !== $this->agentStatisticList) {
            if (\is_array($this->agentStatisticList)) {
                $res['AgentStatisticList'] = [];
                $n1 = 0;
                foreach ($this->agentStatisticList as $item1) {
                    $res['AgentStatisticList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->channelInfo) {
            $res['ChannelInfo'] = null !== $this->channelInfo ? $this->channelInfo->toArray($noStream) : $this->channelInfo;
        }

        if (null !== $this->removedAgentStatisticList) {
            if (\is_array($this->removedAgentStatisticList)) {
                $res['RemovedAgentStatisticList'] = [];
                $n1 = 0;
                foreach ($this->removedAgentStatisticList as $item1) {
                    $res['RemovedAgentStatisticList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->statistic) {
            $res['Statistic'] = null !== $this->statistic ? $this->statistic->toArray($noStream) : $this->statistic;
        }

        if (null !== $this->todayStatistic) {
            $res['TodayStatistic'] = null !== $this->todayStatistic ? $this->todayStatistic->toArray($noStream) : $this->todayStatistic;
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
        if (isset($map['AgentInfo'])) {
            $model->agentInfo = agentInfo::fromMap($map['AgentInfo']);
        }

        if (isset($map['AgentStatisticList'])) {
            if (!empty($map['AgentStatisticList'])) {
                $model->agentStatisticList = [];
                $n1 = 0;
                foreach ($map['AgentStatisticList'] as $item1) {
                    $model->agentStatisticList[$n1] = agentStatisticList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ChannelInfo'])) {
            $model->channelInfo = channelInfo::fromMap($map['ChannelInfo']);
        }

        if (isset($map['RemovedAgentStatisticList'])) {
            if (!empty($map['RemovedAgentStatisticList'])) {
                $model->removedAgentStatisticList = [];
                $n1 = 0;
                foreach ($map['RemovedAgentStatisticList'] as $item1) {
                    $model->removedAgentStatisticList[$n1] = removedAgentStatisticList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Statistic'])) {
            $model->statistic = statistic::fromMap($map['Statistic']);
        }

        if (isset($map['TodayStatistic'])) {
            $model->todayStatistic = todayStatistic::fromMap($map['TodayStatistic']);
        }

        return $model;
    }
}
