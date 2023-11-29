<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class alarmStats extends Model
{
    /**
     * @example null
     *
     * @var string
     */
    public $alarmContent;

    /**
     * @example false
     *
     * @var bool
     */
    public $alarming;

    /**
     * @example true
     *
     * @var bool
     */
    public $openMonitor;

    /**
     * @example 0
     *
     * @var int
     */
    public $recentlyTriggerCount;

    /**
     * @var int[]
     */
    public $ruleToRecentlyTriggerCount;

    /**
     * @example null
     *
     * @var string
     */
    public $target;
    protected $_name = [
        'alarmContent'               => 'AlarmContent',
        'alarming'                   => 'Alarming',
        'openMonitor'                => 'OpenMonitor',
        'recentlyTriggerCount'       => 'RecentlyTriggerCount',
        'ruleToRecentlyTriggerCount' => 'RuleToRecentlyTriggerCount',
        'target'                     => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['RuleToRecentlyTriggerCount'] = $this->ruleToRecentlyTriggerCount;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmStats
     */
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
            $model->ruleToRecentlyTriggerCount = $map['RuleToRecentlyTriggerCount'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
