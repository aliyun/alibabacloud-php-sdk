<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyGroupMonitoringAgentProcessRequest\alertConfig\targetList;

class alertConfig extends Model
{
    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $effectiveInterval;

    /**
     * @var string
     */
    public $escalationsLevel;

    /**
     * @var string
     */
    public $noEffectiveInterval;

    /**
     * @var string
     */
    public $silenceTime;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var targetList[]
     */
    public $targetList;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var string
     */
    public $times;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'effectiveInterval' => 'EffectiveInterval',
        'escalationsLevel' => 'EscalationsLevel',
        'noEffectiveInterval' => 'NoEffectiveInterval',
        'silenceTime' => 'SilenceTime',
        'statistics' => 'Statistics',
        'targetList' => 'TargetList',
        'threshold' => 'Threshold',
        'times' => 'Times',
        'webhook' => 'Webhook',
    ];

    public function validate()
    {
        if (\is_array($this->targetList)) {
            Model::validateArray($this->targetList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }

        if (null !== $this->effectiveInterval) {
            $res['EffectiveInterval'] = $this->effectiveInterval;
        }

        if (null !== $this->escalationsLevel) {
            $res['EscalationsLevel'] = $this->escalationsLevel;
        }

        if (null !== $this->noEffectiveInterval) {
            $res['NoEffectiveInterval'] = $this->noEffectiveInterval;
        }

        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }

        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }

        if (null !== $this->targetList) {
            if (\is_array($this->targetList)) {
                $res['TargetList'] = [];
                $n1 = 0;
                foreach ($this->targetList as $item1) {
                    $res['TargetList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
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
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }

        if (isset($map['EffectiveInterval'])) {
            $model->effectiveInterval = $map['EffectiveInterval'];
        }

        if (isset($map['EscalationsLevel'])) {
            $model->escalationsLevel = $map['EscalationsLevel'];
        }

        if (isset($map['NoEffectiveInterval'])) {
            $model->noEffectiveInterval = $map['NoEffectiveInterval'];
        }

        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }

        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }

        if (isset($map['TargetList'])) {
            if (!empty($map['TargetList'])) {
                $model->targetList = [];
                $n1 = 0;
                foreach ($map['TargetList'] as $item1) {
                    $model->targetList[$n1] = targetList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
