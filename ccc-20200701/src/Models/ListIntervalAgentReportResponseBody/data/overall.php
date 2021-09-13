<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponseBody\data;

use AlibabaCloud\Tea\Model;

class overall extends Model
{
    /**
     * @var float
     */
    public $occupancyRate;

    /**
     * @var int
     */
    public $totalWorkTime;

    /**
     * @var int
     */
    public $maxWorkTime;

    /**
     * @var int
     */
    public $totalHoldTime;

    /**
     * @var float
     */
    public $averageWorkTime;

    /**
     * @var int
     */
    public $maxBreakTime;

    /**
     * @var float
     */
    public $satisfactionIndex;

    /**
     * @var int
     */
    public $maxReadyTime;

    /**
     * @var int
     */
    public $maxTalkTime;

    /**
     * @var int
     */
    public $totalReadyTime;

    /**
     * @var int
     */
    public $lastCheckoutTime;

    /**
     * @var int
     */
    public $totalCalls;

    /**
     * @var int
     */
    public $totalLoggedInTime;

    /**
     * @var int
     */
    public $totalTalkTime;

    /**
     * @var int
     */
    public $maxHoldTime;

    /**
     * @var float
     */
    public $averageBreakTime;

    /**
     * @var float
     */
    public $averageTalkTime;

    /**
     * @var float
     */
    public $satisfactionRate;

    /**
     * @var int
     */
    public $satisfactionSurveysOffered;

    /**
     * @var int
     */
    public $firstCheckInTime;

    /**
     * @var int
     */
    public $satisfactionSurveysResponded;

    /**
     * @var float
     */
    public $averageHoldTime;

    /**
     * @var float
     */
    public $averageReadyTime;

    /**
     * @var int
     */
    public $totalBreakTime;
    protected $_name = [
        'occupancyRate'                => 'OccupancyRate',
        'totalWorkTime'                => 'TotalWorkTime',
        'maxWorkTime'                  => 'MaxWorkTime',
        'totalHoldTime'                => 'TotalHoldTime',
        'averageWorkTime'              => 'AverageWorkTime',
        'maxBreakTime'                 => 'MaxBreakTime',
        'satisfactionIndex'            => 'SatisfactionIndex',
        'maxReadyTime'                 => 'MaxReadyTime',
        'maxTalkTime'                  => 'MaxTalkTime',
        'totalReadyTime'               => 'TotalReadyTime',
        'lastCheckoutTime'             => 'LastCheckoutTime',
        'totalCalls'                   => 'TotalCalls',
        'totalLoggedInTime'            => 'TotalLoggedInTime',
        'totalTalkTime'                => 'TotalTalkTime',
        'maxHoldTime'                  => 'MaxHoldTime',
        'averageBreakTime'             => 'AverageBreakTime',
        'averageTalkTime'              => 'AverageTalkTime',
        'satisfactionRate'             => 'SatisfactionRate',
        'satisfactionSurveysOffered'   => 'SatisfactionSurveysOffered',
        'firstCheckInTime'             => 'FirstCheckInTime',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'averageHoldTime'              => 'AverageHoldTime',
        'averageReadyTime'             => 'AverageReadyTime',
        'totalBreakTime'               => 'TotalBreakTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->occupancyRate) {
            $res['OccupancyRate'] = $this->occupancyRate;
        }
        if (null !== $this->totalWorkTime) {
            $res['TotalWorkTime'] = $this->totalWorkTime;
        }
        if (null !== $this->maxWorkTime) {
            $res['MaxWorkTime'] = $this->maxWorkTime;
        }
        if (null !== $this->totalHoldTime) {
            $res['TotalHoldTime'] = $this->totalHoldTime;
        }
        if (null !== $this->averageWorkTime) {
            $res['AverageWorkTime'] = $this->averageWorkTime;
        }
        if (null !== $this->maxBreakTime) {
            $res['MaxBreakTime'] = $this->maxBreakTime;
        }
        if (null !== $this->satisfactionIndex) {
            $res['SatisfactionIndex'] = $this->satisfactionIndex;
        }
        if (null !== $this->maxReadyTime) {
            $res['MaxReadyTime'] = $this->maxReadyTime;
        }
        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }
        if (null !== $this->totalReadyTime) {
            $res['TotalReadyTime'] = $this->totalReadyTime;
        }
        if (null !== $this->lastCheckoutTime) {
            $res['LastCheckoutTime'] = $this->lastCheckoutTime;
        }
        if (null !== $this->totalCalls) {
            $res['TotalCalls'] = $this->totalCalls;
        }
        if (null !== $this->totalLoggedInTime) {
            $res['TotalLoggedInTime'] = $this->totalLoggedInTime;
        }
        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
        }
        if (null !== $this->maxHoldTime) {
            $res['MaxHoldTime'] = $this->maxHoldTime;
        }
        if (null !== $this->averageBreakTime) {
            $res['AverageBreakTime'] = $this->averageBreakTime;
        }
        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
        }
        if (null !== $this->satisfactionRate) {
            $res['SatisfactionRate'] = $this->satisfactionRate;
        }
        if (null !== $this->satisfactionSurveysOffered) {
            $res['SatisfactionSurveysOffered'] = $this->satisfactionSurveysOffered;
        }
        if (null !== $this->firstCheckInTime) {
            $res['FirstCheckInTime'] = $this->firstCheckInTime;
        }
        if (null !== $this->satisfactionSurveysResponded) {
            $res['SatisfactionSurveysResponded'] = $this->satisfactionSurveysResponded;
        }
        if (null !== $this->averageHoldTime) {
            $res['AverageHoldTime'] = $this->averageHoldTime;
        }
        if (null !== $this->averageReadyTime) {
            $res['AverageReadyTime'] = $this->averageReadyTime;
        }
        if (null !== $this->totalBreakTime) {
            $res['TotalBreakTime'] = $this->totalBreakTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overall
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OccupancyRate'])) {
            $model->occupancyRate = $map['OccupancyRate'];
        }
        if (isset($map['TotalWorkTime'])) {
            $model->totalWorkTime = $map['TotalWorkTime'];
        }
        if (isset($map['MaxWorkTime'])) {
            $model->maxWorkTime = $map['MaxWorkTime'];
        }
        if (isset($map['TotalHoldTime'])) {
            $model->totalHoldTime = $map['TotalHoldTime'];
        }
        if (isset($map['AverageWorkTime'])) {
            $model->averageWorkTime = $map['AverageWorkTime'];
        }
        if (isset($map['MaxBreakTime'])) {
            $model->maxBreakTime = $map['MaxBreakTime'];
        }
        if (isset($map['SatisfactionIndex'])) {
            $model->satisfactionIndex = $map['SatisfactionIndex'];
        }
        if (isset($map['MaxReadyTime'])) {
            $model->maxReadyTime = $map['MaxReadyTime'];
        }
        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }
        if (isset($map['TotalReadyTime'])) {
            $model->totalReadyTime = $map['TotalReadyTime'];
        }
        if (isset($map['LastCheckoutTime'])) {
            $model->lastCheckoutTime = $map['LastCheckoutTime'];
        }
        if (isset($map['TotalCalls'])) {
            $model->totalCalls = $map['TotalCalls'];
        }
        if (isset($map['TotalLoggedInTime'])) {
            $model->totalLoggedInTime = $map['TotalLoggedInTime'];
        }
        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }
        if (isset($map['MaxHoldTime'])) {
            $model->maxHoldTime = $map['MaxHoldTime'];
        }
        if (isset($map['AverageBreakTime'])) {
            $model->averageBreakTime = $map['AverageBreakTime'];
        }
        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
        }
        if (isset($map['SatisfactionRate'])) {
            $model->satisfactionRate = $map['SatisfactionRate'];
        }
        if (isset($map['SatisfactionSurveysOffered'])) {
            $model->satisfactionSurveysOffered = $map['SatisfactionSurveysOffered'];
        }
        if (isset($map['FirstCheckInTime'])) {
            $model->firstCheckInTime = $map['FirstCheckInTime'];
        }
        if (isset($map['SatisfactionSurveysResponded'])) {
            $model->satisfactionSurveysResponded = $map['SatisfactionSurveysResponded'];
        }
        if (isset($map['AverageHoldTime'])) {
            $model->averageHoldTime = $map['AverageHoldTime'];
        }
        if (isset($map['AverageReadyTime'])) {
            $model->averageReadyTime = $map['AverageReadyTime'];
        }
        if (isset($map['TotalBreakTime'])) {
            $model->totalBreakTime = $map['TotalBreakTime'];
        }

        return $model;
    }
}
