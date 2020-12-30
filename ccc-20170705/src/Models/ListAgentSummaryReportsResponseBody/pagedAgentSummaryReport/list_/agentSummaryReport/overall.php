<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentSummaryReportsResponseBody\pagedAgentSummaryReport\list_\agentSummaryReport;

use AlibabaCloud\Tea\Model;

class overall extends Model
{
    /**
     * @var int
     */
    public $totalLoggedInTime;

    /**
     * @var int
     */
    public $totalTalkTime;

    /**
     * @var float
     */
    public $occupancyRate;

    /**
     * @var string
     */
    public $lastLogOutTime;

    /**
     * @var int
     */
    public $totalWorkTime;

    /**
     * @var string
     */
    public $firstLogInTime;

    /**
     * @var int
     */
    public $maxWorkTime;

    /**
     * @var int
     */
    public $averageTalkTime;

    /**
     * @var int
     */
    public $averageWorkTime;

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
    public $averageReadyTime;

    /**
     * @var int
     */
    public $maxReadyTime;

    /**
     * @var int
     */
    public $oneTransferCalls;

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
    public $totalBreakTime;

    /**
     * @var int
     */
    public $totalCalls;
    protected $_name = [
        'totalLoggedInTime'            => 'TotalLoggedInTime',
        'totalTalkTime'                => 'TotalTalkTime',
        'occupancyRate'                => 'OccupancyRate',
        'lastLogOutTime'               => 'LastLogOutTime',
        'totalWorkTime'                => 'TotalWorkTime',
        'firstLogInTime'               => 'FirstLogInTime',
        'maxWorkTime'                  => 'MaxWorkTime',
        'averageTalkTime'              => 'AverageTalkTime',
        'averageWorkTime'              => 'AverageWorkTime',
        'satisfactionIndex'            => 'SatisfactionIndex',
        'satisfactionSurveysOffered'   => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'averageReadyTime'             => 'AverageReadyTime',
        'maxReadyTime'                 => 'MaxReadyTime',
        'oneTransferCalls'             => 'OneTransferCalls',
        'maxTalkTime'                  => 'MaxTalkTime',
        'totalReadyTime'               => 'TotalReadyTime',
        'totalBreakTime'               => 'TotalBreakTime',
        'totalCalls'                   => 'TotalCalls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalLoggedInTime) {
            $res['TotalLoggedInTime'] = $this->totalLoggedInTime;
        }
        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
        }
        if (null !== $this->occupancyRate) {
            $res['OccupancyRate'] = $this->occupancyRate;
        }
        if (null !== $this->lastLogOutTime) {
            $res['LastLogOutTime'] = $this->lastLogOutTime;
        }
        if (null !== $this->totalWorkTime) {
            $res['TotalWorkTime'] = $this->totalWorkTime;
        }
        if (null !== $this->firstLogInTime) {
            $res['FirstLogInTime'] = $this->firstLogInTime;
        }
        if (null !== $this->maxWorkTime) {
            $res['MaxWorkTime'] = $this->maxWorkTime;
        }
        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
        }
        if (null !== $this->averageWorkTime) {
            $res['AverageWorkTime'] = $this->averageWorkTime;
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
        if (null !== $this->averageReadyTime) {
            $res['AverageReadyTime'] = $this->averageReadyTime;
        }
        if (null !== $this->maxReadyTime) {
            $res['MaxReadyTime'] = $this->maxReadyTime;
        }
        if (null !== $this->oneTransferCalls) {
            $res['OneTransferCalls'] = $this->oneTransferCalls;
        }
        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }
        if (null !== $this->totalReadyTime) {
            $res['TotalReadyTime'] = $this->totalReadyTime;
        }
        if (null !== $this->totalBreakTime) {
            $res['TotalBreakTime'] = $this->totalBreakTime;
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
        if (isset($map['TotalLoggedInTime'])) {
            $model->totalLoggedInTime = $map['TotalLoggedInTime'];
        }
        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }
        if (isset($map['OccupancyRate'])) {
            $model->occupancyRate = $map['OccupancyRate'];
        }
        if (isset($map['LastLogOutTime'])) {
            $model->lastLogOutTime = $map['LastLogOutTime'];
        }
        if (isset($map['TotalWorkTime'])) {
            $model->totalWorkTime = $map['TotalWorkTime'];
        }
        if (isset($map['FirstLogInTime'])) {
            $model->firstLogInTime = $map['FirstLogInTime'];
        }
        if (isset($map['MaxWorkTime'])) {
            $model->maxWorkTime = $map['MaxWorkTime'];
        }
        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
        }
        if (isset($map['AverageWorkTime'])) {
            $model->averageWorkTime = $map['AverageWorkTime'];
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
        if (isset($map['AverageReadyTime'])) {
            $model->averageReadyTime = $map['AverageReadyTime'];
        }
        if (isset($map['MaxReadyTime'])) {
            $model->maxReadyTime = $map['MaxReadyTime'];
        }
        if (isset($map['OneTransferCalls'])) {
            $model->oneTransferCalls = $map['OneTransferCalls'];
        }
        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }
        if (isset($map['TotalReadyTime'])) {
            $model->totalReadyTime = $map['TotalReadyTime'];
        }
        if (isset($map['TotalBreakTime'])) {
            $model->totalBreakTime = $map['TotalBreakTime'];
        }
        if (isset($map['TotalCalls'])) {
            $model->totalCalls = $map['TotalCalls'];
        }

        return $model;
    }
}
