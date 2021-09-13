<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalInstanceReportResponseBody\data;

use AlibabaCloud\Tea\Model;

class overall extends Model
{
    /**
     * @var int
     */
    public $totalTalkTime;

    /**
     * @var int
     */
    public $totalLoggedInTime;

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
    public $maxHoldTime;

    /**
     * @var int
     */
    public $maxWorkTime;

    /**
     * @var float
     */
    public $averageBreakTime;

    /**
     * @var int
     */
    public $totalHoldTime;

    /**
     * @var float
     */
    public $satisfactionRate;

    /**
     * @var int
     */
    public $maxBreakTime;

    /**
     * @var float
     */
    public $averageWorkTime;

    /**
     * @var float
     */
    public $averageTalkTime;

    /**
     * @var float
     */
    public $satisfactionIndex;

    /**
     * @var int
     */
    public $satisfactionSurveysOffered;

    /**
     * @var int
     */
    public $satisfactionSurveysResponded;

    /**
     * @var int
     */
    public $maxReadyTime;

    /**
     * @var float
     */
    public $averageReadyTime;

    /**
     * @var float
     */
    public $averageHoldTime;

    /**
     * @var int
     */
    public $totalReadyTime;

    /**
     * @var int
     */
    public $totalBreakTime;

    /**
     * @var int
     */
    public $maxTalkTime;

    /**
     * @var int
     */
    public $totalCalls;
    protected $_name = [
        'totalTalkTime'                => 'TotalTalkTime',
        'totalLoggedInTime'            => 'TotalLoggedInTime',
        'occupancyRate'                => 'OccupancyRate',
        'totalWorkTime'                => 'TotalWorkTime',
        'maxHoldTime'                  => 'MaxHoldTime',
        'maxWorkTime'                  => 'MaxWorkTime',
        'averageBreakTime'             => 'AverageBreakTime',
        'totalHoldTime'                => 'TotalHoldTime',
        'satisfactionRate'             => 'SatisfactionRate',
        'maxBreakTime'                 => 'MaxBreakTime',
        'averageWorkTime'              => 'AverageWorkTime',
        'averageTalkTime'              => 'AverageTalkTime',
        'satisfactionIndex'            => 'SatisfactionIndex',
        'satisfactionSurveysOffered'   => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'maxReadyTime'                 => 'MaxReadyTime',
        'averageReadyTime'             => 'AverageReadyTime',
        'averageHoldTime'              => 'AverageHoldTime',
        'totalReadyTime'               => 'TotalReadyTime',
        'totalBreakTime'               => 'TotalBreakTime',
        'maxTalkTime'                  => 'MaxTalkTime',
        'totalCalls'                   => 'TotalCalls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
        }
        if (null !== $this->totalLoggedInTime) {
            $res['TotalLoggedInTime'] = $this->totalLoggedInTime;
        }
        if (null !== $this->occupancyRate) {
            $res['OccupancyRate'] = $this->occupancyRate;
        }
        if (null !== $this->totalWorkTime) {
            $res['TotalWorkTime'] = $this->totalWorkTime;
        }
        if (null !== $this->maxHoldTime) {
            $res['MaxHoldTime'] = $this->maxHoldTime;
        }
        if (null !== $this->maxWorkTime) {
            $res['MaxWorkTime'] = $this->maxWorkTime;
        }
        if (null !== $this->averageBreakTime) {
            $res['AverageBreakTime'] = $this->averageBreakTime;
        }
        if (null !== $this->totalHoldTime) {
            $res['TotalHoldTime'] = $this->totalHoldTime;
        }
        if (null !== $this->satisfactionRate) {
            $res['SatisfactionRate'] = $this->satisfactionRate;
        }
        if (null !== $this->maxBreakTime) {
            $res['MaxBreakTime'] = $this->maxBreakTime;
        }
        if (null !== $this->averageWorkTime) {
            $res['AverageWorkTime'] = $this->averageWorkTime;
        }
        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
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
        if (null !== $this->maxReadyTime) {
            $res['MaxReadyTime'] = $this->maxReadyTime;
        }
        if (null !== $this->averageReadyTime) {
            $res['AverageReadyTime'] = $this->averageReadyTime;
        }
        if (null !== $this->averageHoldTime) {
            $res['AverageHoldTime'] = $this->averageHoldTime;
        }
        if (null !== $this->totalReadyTime) {
            $res['TotalReadyTime'] = $this->totalReadyTime;
        }
        if (null !== $this->totalBreakTime) {
            $res['TotalBreakTime'] = $this->totalBreakTime;
        }
        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }
        if (null !== $this->totalCalls) {
            $res['TotalCalls'] = $this->totalCalls;
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
        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }
        if (isset($map['TotalLoggedInTime'])) {
            $model->totalLoggedInTime = $map['TotalLoggedInTime'];
        }
        if (isset($map['OccupancyRate'])) {
            $model->occupancyRate = $map['OccupancyRate'];
        }
        if (isset($map['TotalWorkTime'])) {
            $model->totalWorkTime = $map['TotalWorkTime'];
        }
        if (isset($map['MaxHoldTime'])) {
            $model->maxHoldTime = $map['MaxHoldTime'];
        }
        if (isset($map['MaxWorkTime'])) {
            $model->maxWorkTime = $map['MaxWorkTime'];
        }
        if (isset($map['AverageBreakTime'])) {
            $model->averageBreakTime = $map['AverageBreakTime'];
        }
        if (isset($map['TotalHoldTime'])) {
            $model->totalHoldTime = $map['TotalHoldTime'];
        }
        if (isset($map['SatisfactionRate'])) {
            $model->satisfactionRate = $map['SatisfactionRate'];
        }
        if (isset($map['MaxBreakTime'])) {
            $model->maxBreakTime = $map['MaxBreakTime'];
        }
        if (isset($map['AverageWorkTime'])) {
            $model->averageWorkTime = $map['AverageWorkTime'];
        }
        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
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
        if (isset($map['MaxReadyTime'])) {
            $model->maxReadyTime = $map['MaxReadyTime'];
        }
        if (isset($map['AverageReadyTime'])) {
            $model->averageReadyTime = $map['AverageReadyTime'];
        }
        if (isset($map['AverageHoldTime'])) {
            $model->averageHoldTime = $map['AverageHoldTime'];
        }
        if (isset($map['TotalReadyTime'])) {
            $model->totalReadyTime = $map['TotalReadyTime'];
        }
        if (isset($map['TotalBreakTime'])) {
            $model->totalBreakTime = $map['TotalBreakTime'];
        }
        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }
        if (isset($map['TotalCalls'])) {
            $model->totalCalls = $map['TotalCalls'];
        }

        return $model;
    }
}
