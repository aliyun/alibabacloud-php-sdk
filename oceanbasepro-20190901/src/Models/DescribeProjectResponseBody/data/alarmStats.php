<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data;

use AlibabaCloud\Dara\Model;

class alarmStats extends Model
{
    /**
     * @var string
     */
    public $alarmContent;

    /**
     * @var bool
     */
    public $alarming;

    /**
     * @var bool
     */
    public $openMonitor;

    /**
     * @var int
     */
    public $recentlyTriggerCount;

    /**
     * @var int[]
     */
    public $ruleToRecentlyTriggerCount;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'alarmContent' => 'AlarmContent',
        'alarming' => 'Alarming',
        'openMonitor' => 'OpenMonitor',
        'recentlyTriggerCount' => 'RecentlyTriggerCount',
        'ruleToRecentlyTriggerCount' => 'RuleToRecentlyTriggerCount',
        'target' => 'Target',
    ];

    public function validate()
    {
        if (\is_array($this->ruleToRecentlyTriggerCount)) {
            Model::validateArray($this->ruleToRecentlyTriggerCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmContent) {
            $res['AlarmContent'] = $this->alarmContent;
        }

        if (null !== $this->alarming) {
            $res['Alarming'] = $this->alarming;
        }

        if (null !== $this->openMonitor) {
            $res['OpenMonitor'] = $this->openMonitor;
        }

        if (null !== $this->recentlyTriggerCount) {
            $res['RecentlyTriggerCount'] = $this->recentlyTriggerCount;
        }

        if (null !== $this->ruleToRecentlyTriggerCount) {
            if (\is_array($this->ruleToRecentlyTriggerCount)) {
                $res['RuleToRecentlyTriggerCount'] = [];
                foreach ($this->ruleToRecentlyTriggerCount as $key1 => $value1) {
                    $res['RuleToRecentlyTriggerCount'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
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
        if (isset($map['AlarmContent'])) {
            $model->alarmContent = $map['AlarmContent'];
        }

        if (isset($map['Alarming'])) {
            $model->alarming = $map['Alarming'];
        }

        if (isset($map['OpenMonitor'])) {
            $model->openMonitor = $map['OpenMonitor'];
        }

        if (isset($map['RecentlyTriggerCount'])) {
            $model->recentlyTriggerCount = $map['RecentlyTriggerCount'];
        }

        if (isset($map['RuleToRecentlyTriggerCount'])) {
            if (!empty($map['RuleToRecentlyTriggerCount'])) {
                $model->ruleToRecentlyTriggerCount = [];
                foreach ($map['RuleToRecentlyTriggerCount'] as $key1 => $value1) {
                    $model->ruleToRecentlyTriggerCount[$key1] = $value1;
                }
            }
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
