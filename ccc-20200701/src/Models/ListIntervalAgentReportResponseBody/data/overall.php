<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponseBody\data\overall\breakCodeDetailList;
use AlibabaCloud\Tea\Model;

class overall extends Model
{
    /**
     * @example 0
     *
     * @var float
     */
    public $averageBreakTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageHoldTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageReadyTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageTalkTime;

    /**
     * @example 1
     *
     * @var float
     */
    public $averageWorkTime;

    /**
     * @var breakCodeDetailList[]
     */
    public $breakCodeDetailList;

    /**
     * @example 0
     *
     * @var int
     */
    public $firstCheckInTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $lastCheckoutTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxBreakTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxHoldTime;

    /**
     * @example 435
     *
     * @var int
     */
    public $maxReadyTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxTalkTime;

    /**
     * @example 2
     *
     * @var int
     */
    public $maxWorkTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $occupancyRate;

    /**
     * @example 0
     *
     * @var float
     */
    public $satisfactionIndex;

    /**
     * @example 0
     *
     * @var float
     */
    public $satisfactionRate;

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
     * @example 1
     *
     * @var int
     */
    public $totalBreakTime;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalCalls;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalHoldTime;

    /**
     * @example 914
     *
     * @var int
     */
    public $totalLoggedInTime;

    /**
     * @var int
     */
    public $totalOffSiteOnlineTime;

    /**
     * @var int
     */
    public $totalOfficePhoneOnlineTime;

    /**
     * @var int
     */
    public $totalOnSiteOnlineTime;

    /**
     * @var int
     */
    public $totalOutboundScenarioReadyTime;

    /**
     * @var int
     */
    public $totalOutboundScenarioTime;

    /**
     * @example 763
     *
     * @var int
     */
    public $totalReadyTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalTalkTime;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalWorkTime;
    protected $_name = [
        'averageBreakTime'               => 'AverageBreakTime',
        'averageHoldTime'                => 'AverageHoldTime',
        'averageReadyTime'               => 'AverageReadyTime',
        'averageTalkTime'                => 'AverageTalkTime',
        'averageWorkTime'                => 'AverageWorkTime',
        'breakCodeDetailList'            => 'BreakCodeDetailList',
        'firstCheckInTime'               => 'FirstCheckInTime',
        'lastCheckoutTime'               => 'LastCheckoutTime',
        'maxBreakTime'                   => 'MaxBreakTime',
        'maxHoldTime'                    => 'MaxHoldTime',
        'maxReadyTime'                   => 'MaxReadyTime',
        'maxTalkTime'                    => 'MaxTalkTime',
        'maxWorkTime'                    => 'MaxWorkTime',
        'occupancyRate'                  => 'OccupancyRate',
        'satisfactionIndex'              => 'SatisfactionIndex',
        'satisfactionRate'               => 'SatisfactionRate',
        'satisfactionSurveysOffered'     => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded'   => 'SatisfactionSurveysResponded',
        'totalBreakTime'                 => 'TotalBreakTime',
        'totalCalls'                     => 'TotalCalls',
        'totalHoldTime'                  => 'TotalHoldTime',
        'totalLoggedInTime'              => 'TotalLoggedInTime',
        'totalOffSiteOnlineTime'         => 'TotalOffSiteOnlineTime',
        'totalOfficePhoneOnlineTime'     => 'TotalOfficePhoneOnlineTime',
        'totalOnSiteOnlineTime'          => 'TotalOnSiteOnlineTime',
        'totalOutboundScenarioReadyTime' => 'TotalOutboundScenarioReadyTime',
        'totalOutboundScenarioTime'      => 'TotalOutboundScenarioTime',
        'totalReadyTime'                 => 'TotalReadyTime',
        'totalTalkTime'                  => 'TotalTalkTime',
        'totalWorkTime'                  => 'TotalWorkTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageBreakTime) {
            $res['AverageBreakTime'] = $this->averageBreakTime;
        }
        if (null !== $this->averageHoldTime) {
            $res['AverageHoldTime'] = $this->averageHoldTime;
        }
        if (null !== $this->averageReadyTime) {
            $res['AverageReadyTime'] = $this->averageReadyTime;
        }
        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
        }
        if (null !== $this->averageWorkTime) {
            $res['AverageWorkTime'] = $this->averageWorkTime;
        }
        if (null !== $this->breakCodeDetailList) {
            $res['BreakCodeDetailList'] = [];
            if (null !== $this->breakCodeDetailList && \is_array($this->breakCodeDetailList)) {
                $n = 0;
                foreach ($this->breakCodeDetailList as $item) {
                    $res['BreakCodeDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->firstCheckInTime) {
            $res['FirstCheckInTime'] = $this->firstCheckInTime;
        }
        if (null !== $this->lastCheckoutTime) {
            $res['LastCheckoutTime'] = $this->lastCheckoutTime;
        }
        if (null !== $this->maxBreakTime) {
            $res['MaxBreakTime'] = $this->maxBreakTime;
        }
        if (null !== $this->maxHoldTime) {
            $res['MaxHoldTime'] = $this->maxHoldTime;
        }
        if (null !== $this->maxReadyTime) {
            $res['MaxReadyTime'] = $this->maxReadyTime;
        }
        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }
        if (null !== $this->maxWorkTime) {
            $res['MaxWorkTime'] = $this->maxWorkTime;
        }
        if (null !== $this->occupancyRate) {
            $res['OccupancyRate'] = $this->occupancyRate;
        }
        if (null !== $this->satisfactionIndex) {
            $res['SatisfactionIndex'] = $this->satisfactionIndex;
        }
        if (null !== $this->satisfactionRate) {
            $res['SatisfactionRate'] = $this->satisfactionRate;
        }
        if (null !== $this->satisfactionSurveysOffered) {
            $res['SatisfactionSurveysOffered'] = $this->satisfactionSurveysOffered;
        }
        if (null !== $this->satisfactionSurveysResponded) {
            $res['SatisfactionSurveysResponded'] = $this->satisfactionSurveysResponded;
        }
        if (null !== $this->totalBreakTime) {
            $res['TotalBreakTime'] = $this->totalBreakTime;
        }
        if (null !== $this->totalCalls) {
            $res['TotalCalls'] = $this->totalCalls;
        }
        if (null !== $this->totalHoldTime) {
            $res['TotalHoldTime'] = $this->totalHoldTime;
        }
        if (null !== $this->totalLoggedInTime) {
            $res['TotalLoggedInTime'] = $this->totalLoggedInTime;
        }
        if (null !== $this->totalOffSiteOnlineTime) {
            $res['TotalOffSiteOnlineTime'] = $this->totalOffSiteOnlineTime;
        }
        if (null !== $this->totalOfficePhoneOnlineTime) {
            $res['TotalOfficePhoneOnlineTime'] = $this->totalOfficePhoneOnlineTime;
        }
        if (null !== $this->totalOnSiteOnlineTime) {
            $res['TotalOnSiteOnlineTime'] = $this->totalOnSiteOnlineTime;
        }
        if (null !== $this->totalOutboundScenarioReadyTime) {
            $res['TotalOutboundScenarioReadyTime'] = $this->totalOutboundScenarioReadyTime;
        }
        if (null !== $this->totalOutboundScenarioTime) {
            $res['TotalOutboundScenarioTime'] = $this->totalOutboundScenarioTime;
        }
        if (null !== $this->totalReadyTime) {
            $res['TotalReadyTime'] = $this->totalReadyTime;
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
     * @return overall
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageBreakTime'])) {
            $model->averageBreakTime = $map['AverageBreakTime'];
        }
        if (isset($map['AverageHoldTime'])) {
            $model->averageHoldTime = $map['AverageHoldTime'];
        }
        if (isset($map['AverageReadyTime'])) {
            $model->averageReadyTime = $map['AverageReadyTime'];
        }
        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
        }
        if (isset($map['AverageWorkTime'])) {
            $model->averageWorkTime = $map['AverageWorkTime'];
        }
        if (isset($map['BreakCodeDetailList'])) {
            if (!empty($map['BreakCodeDetailList'])) {
                $model->breakCodeDetailList = [];
                $n                          = 0;
                foreach ($map['BreakCodeDetailList'] as $item) {
                    $model->breakCodeDetailList[$n++] = null !== $item ? breakCodeDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FirstCheckInTime'])) {
            $model->firstCheckInTime = $map['FirstCheckInTime'];
        }
        if (isset($map['LastCheckoutTime'])) {
            $model->lastCheckoutTime = $map['LastCheckoutTime'];
        }
        if (isset($map['MaxBreakTime'])) {
            $model->maxBreakTime = $map['MaxBreakTime'];
        }
        if (isset($map['MaxHoldTime'])) {
            $model->maxHoldTime = $map['MaxHoldTime'];
        }
        if (isset($map['MaxReadyTime'])) {
            $model->maxReadyTime = $map['MaxReadyTime'];
        }
        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }
        if (isset($map['MaxWorkTime'])) {
            $model->maxWorkTime = $map['MaxWorkTime'];
        }
        if (isset($map['OccupancyRate'])) {
            $model->occupancyRate = $map['OccupancyRate'];
        }
        if (isset($map['SatisfactionIndex'])) {
            $model->satisfactionIndex = $map['SatisfactionIndex'];
        }
        if (isset($map['SatisfactionRate'])) {
            $model->satisfactionRate = $map['SatisfactionRate'];
        }
        if (isset($map['SatisfactionSurveysOffered'])) {
            $model->satisfactionSurveysOffered = $map['SatisfactionSurveysOffered'];
        }
        if (isset($map['SatisfactionSurveysResponded'])) {
            $model->satisfactionSurveysResponded = $map['SatisfactionSurveysResponded'];
        }
        if (isset($map['TotalBreakTime'])) {
            $model->totalBreakTime = $map['TotalBreakTime'];
        }
        if (isset($map['TotalCalls'])) {
            $model->totalCalls = $map['TotalCalls'];
        }
        if (isset($map['TotalHoldTime'])) {
            $model->totalHoldTime = $map['TotalHoldTime'];
        }
        if (isset($map['TotalLoggedInTime'])) {
            $model->totalLoggedInTime = $map['TotalLoggedInTime'];
        }
        if (isset($map['TotalOffSiteOnlineTime'])) {
            $model->totalOffSiteOnlineTime = $map['TotalOffSiteOnlineTime'];
        }
        if (isset($map['TotalOfficePhoneOnlineTime'])) {
            $model->totalOfficePhoneOnlineTime = $map['TotalOfficePhoneOnlineTime'];
        }
        if (isset($map['TotalOnSiteOnlineTime'])) {
            $model->totalOnSiteOnlineTime = $map['TotalOnSiteOnlineTime'];
        }
        if (isset($map['TotalOutboundScenarioReadyTime'])) {
            $model->totalOutboundScenarioReadyTime = $map['TotalOutboundScenarioReadyTime'];
        }
        if (isset($map['TotalOutboundScenarioTime'])) {
            $model->totalOutboundScenarioTime = $map['TotalOutboundScenarioTime'];
        }
        if (isset($map['TotalReadyTime'])) {
            $model->totalReadyTime = $map['TotalReadyTime'];
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
