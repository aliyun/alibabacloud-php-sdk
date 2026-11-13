<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class GetMetricDataShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $groupByShrink;

    /**
     * @var string
     */
    public $metricNamesShrink;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $sandboxID;

    /**
     * @var string
     */
    public $sandboxPlan;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $templateID;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'endTime' => 'endTime',
        'groupByShrink' => 'groupBy',
        'metricNamesShrink' => 'metricNames',
        'period' => 'period',
        'sandboxID' => 'sandboxID',
        'sandboxPlan' => 'sandboxPlan',
        'startTime' => 'startTime',
        'teamID' => 'teamID',
        'templateID' => 'templateID',
        'time' => 'time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->groupByShrink) {
            $res['groupBy'] = $this->groupByShrink;
        }

        if (null !== $this->metricNamesShrink) {
            $res['metricNames'] = $this->metricNamesShrink;
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        if (null !== $this->sandboxID) {
            $res['sandboxID'] = $this->sandboxID;
        }

        if (null !== $this->sandboxPlan) {
            $res['sandboxPlan'] = $this->sandboxPlan;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['groupBy'])) {
            $model->groupByShrink = $map['groupBy'];
        }

        if (isset($map['metricNames'])) {
            $model->metricNamesShrink = $map['metricNames'];
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        if (isset($map['sandboxID'])) {
            $model->sandboxID = $map['sandboxID'];
        }

        if (isset($map['sandboxPlan'])) {
            $model->sandboxPlan = $map['sandboxPlan'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
