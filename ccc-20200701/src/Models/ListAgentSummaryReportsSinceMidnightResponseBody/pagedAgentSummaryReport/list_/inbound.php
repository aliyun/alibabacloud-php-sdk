<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentSummaryReportsSinceMidnightResponseBody\pagedAgentSummaryReport\list_;

use AlibabaCloud\Tea\Model;

class inbound extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $averageRingTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $averageTalkTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $averageWorkTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsHandled;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsOffered;

    /**
     * @example 0
     *
     * @var float
     */
    public $handleRate;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxRingTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxTalkTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxWorkTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $satisfactionIndex;

    /**
     * @example 0
     *
     * @var int
     */
    public $satisfactionSurveysOffered;

    /**
     * @example 0
     *
     * @var int
     */
    public $satisfactionSurveysResponded;

    /**
     * @example 0
     *
     * @var float
     */
    public $serviceLevel20;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalRingTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalTalkTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalWorkTime;
    protected $_name = [
        'averageRingTime'              => 'AverageRingTime',
        'averageTalkTime'              => 'AverageTalkTime',
        'averageWorkTime'              => 'AverageWorkTime',
        'callsHandled'                 => 'CallsHandled',
        'callsOffered'                 => 'CallsOffered',
        'handleRate'                   => 'HandleRate',
        'maxRingTime'                  => 'MaxRingTime',
        'maxTalkTime'                  => 'MaxTalkTime',
        'maxWorkTime'                  => 'MaxWorkTime',
        'satisfactionIndex'            => 'SatisfactionIndex',
        'satisfactionSurveysOffered'   => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'serviceLevel20'               => 'ServiceLevel20',
        'totalRingTime'                => 'TotalRingTime',
        'totalTalkTime'                => 'TotalTalkTime',
        'totalWorkTime'                => 'TotalWorkTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageRingTime) {
            $res['AverageRingTime'] = $this->averageRingTime;
        }
        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
        }
        if (null !== $this->averageWorkTime) {
            $res['AverageWorkTime'] = $this->averageWorkTime;
        }
        if (null !== $this->callsHandled) {
            $res['CallsHandled'] = $this->callsHandled;
        }
        if (null !== $this->callsOffered) {
            $res['CallsOffered'] = $this->callsOffered;
        }
        if (null !== $this->handleRate) {
            $res['HandleRate'] = $this->handleRate;
        }
        if (null !== $this->maxRingTime) {
            $res['MaxRingTime'] = $this->maxRingTime;
        }
        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }
        if (null !== $this->maxWorkTime) {
            $res['MaxWorkTime'] = $this->maxWorkTime;
        }
        if (null !== $this->satisfactionIndex) {
            $res['SatisfactionIndex'] = $this->satisfactionIndex;
        }
        if (null !== $this->satisfactionSurveysOffered) {
            $res['SatisfactionSurveysOffered'] = $this->satisfactionSurveysOffered;
        }
        if (null !== $this->satisfactionSurveysResponded) {
            $res['SatisfactionSurveysResponded'] = $this->satisfactionSurveysResponded;
        }
        if (null !== $this->serviceLevel20) {
            $res['ServiceLevel20'] = $this->serviceLevel20;
        }
        if (null !== $this->totalRingTime) {
            $res['TotalRingTime'] = $this->totalRingTime;
        }
        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
        }
        if (null !== $this->totalWorkTime) {
            $res['TotalWorkTime'] = $this->totalWorkTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inbound
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageRingTime'])) {
            $model->averageRingTime = $map['AverageRingTime'];
        }
        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
        }
        if (isset($map['AverageWorkTime'])) {
            $model->averageWorkTime = $map['AverageWorkTime'];
        }
        if (isset($map['CallsHandled'])) {
            $model->callsHandled = $map['CallsHandled'];
        }
        if (isset($map['CallsOffered'])) {
            $model->callsOffered = $map['CallsOffered'];
        }
        if (isset($map['HandleRate'])) {
            $model->handleRate = $map['HandleRate'];
        }
        if (isset($map['MaxRingTime'])) {
            $model->maxRingTime = $map['MaxRingTime'];
        }
        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }
        if (isset($map['MaxWorkTime'])) {
            $model->maxWorkTime = $map['MaxWorkTime'];
        }
        if (isset($map['SatisfactionIndex'])) {
            $model->satisfactionIndex = $map['SatisfactionIndex'];
        }
        if (isset($map['SatisfactionSurveysOffered'])) {
            $model->satisfactionSurveysOffered = $map['SatisfactionSurveysOffered'];
        }
        if (isset($map['SatisfactionSurveysResponded'])) {
            $model->satisfactionSurveysResponded = $map['SatisfactionSurveysResponded'];
        }
        if (isset($map['ServiceLevel20'])) {
            $model->serviceLevel20 = $map['ServiceLevel20'];
        }
        if (isset($map['TotalRingTime'])) {
            $model->totalRingTime = $map['TotalRingTime'];
        }
        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }
        if (isset($map['TotalWorkTime'])) {
            $model->totalWorkTime = $map['TotalWorkTime'];
        }

        return $model;
    }
}
