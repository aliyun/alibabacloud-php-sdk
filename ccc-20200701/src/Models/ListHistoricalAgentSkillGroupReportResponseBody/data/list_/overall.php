<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data\list_\overall\breakCodeDetailList;

class overall extends Model
{
    /**
     * @var float
     */
    public $averageBreakTime;

    /**
     * @var float
     */
    public $averageHoldTime;

    /**
     * @var float
     */
    public $averageReadyTime;

    /**
     * @var float
     */
    public $averageTalkTime;

    /**
     * @var float
     */
    public $averageWorkTime;

    /**
     * @var breakCodeDetailList[]
     */
    public $breakCodeDetailList;

    /**
     * @var int
     */
    public $firstCheckInTime;

    /**
     * @var int
     */
    public $lastCheckOutTime;

    /**
     * @var int
     */
    public $maxBreakTime;

    /**
     * @var int
     */
    public $maxHoldTime;

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
    public $maxWorkTime;

    /**
     * @var float
     */
    public $occupancyRate;

    /**
     * @var float
     */
    public $satisfactionIndex;

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
    public $satisfactionSurveysResponded;

    /**
     * @var int
     */
    public $totalBreakTime;

    /**
     * @var int
     */
    public $totalCalls;

    /**
     * @var int
     */
    public $totalHoldTime;

    /**
     * @var int
     */
    public $totalLoggedInTime;

    /**
     * @var int
     */
    public $totalOffSiteLggedInTime;

    /**
     * @var int
     */
    public $totalOfficePhoneLoggedInTime;

    /**
     * @var string
     */
    public $totalOnSiteLoggedInTime;

    /**
     * @var int
     */
    public $totalOutboundScenarioLoggedInTime;

    /**
     * @var int
     */
    public $totalOutboundScenarioReadyTime;

    /**
     * @var int
     */
    public $totalOutboundScenarioTime;

    /**
     * @var int
     */
    public $totalReadyTime;

    /**
     * @var int
     */
    public $totalTalkTime;

    /**
     * @var int
     */
    public $totalWorkTime;
    protected $_name = [
        'averageBreakTime' => 'AverageBreakTime',
        'averageHoldTime' => 'AverageHoldTime',
        'averageReadyTime' => 'AverageReadyTime',
        'averageTalkTime' => 'AverageTalkTime',
        'averageWorkTime' => 'AverageWorkTime',
        'breakCodeDetailList' => 'BreakCodeDetailList',
        'firstCheckInTime' => 'FirstCheckInTime',
        'lastCheckOutTime' => 'LastCheckOutTime',
        'maxBreakTime' => 'MaxBreakTime',
        'maxHoldTime' => 'MaxHoldTime',
        'maxReadyTime' => 'MaxReadyTime',
        'maxTalkTime' => 'MaxTalkTime',
        'maxWorkTime' => 'MaxWorkTime',
        'occupancyRate' => 'OccupancyRate',
        'satisfactionIndex' => 'SatisfactionIndex',
        'satisfactionRate' => 'SatisfactionRate',
        'satisfactionSurveysOffered' => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'totalBreakTime' => 'TotalBreakTime',
        'totalCalls' => 'TotalCalls',
        'totalHoldTime' => 'TotalHoldTime',
        'totalLoggedInTime' => 'TotalLoggedInTime',
        'totalOffSiteLggedInTime' => 'TotalOffSiteLggedInTime',
        'totalOfficePhoneLoggedInTime' => 'TotalOfficePhoneLoggedInTime',
        'totalOnSiteLoggedInTime' => 'TotalOnSiteLoggedInTime',
        'totalOutboundScenarioLoggedInTime' => 'TotalOutboundScenarioLoggedInTime',
        'totalOutboundScenarioReadyTime' => 'TotalOutboundScenarioReadyTime',
        'totalOutboundScenarioTime' => 'TotalOutboundScenarioTime',
        'totalReadyTime' => 'TotalReadyTime',
        'totalTalkTime' => 'TotalTalkTime',
        'totalWorkTime' => 'TotalWorkTime',
    ];

    public function validate()
    {
        if (\is_array($this->breakCodeDetailList)) {
            Model::validateArray($this->breakCodeDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->breakCodeDetailList)) {
                $res['BreakCodeDetailList'] = [];
                $n1 = 0;
                foreach ($this->breakCodeDetailList as $item1) {
                    $res['BreakCodeDetailList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->firstCheckInTime) {
            $res['FirstCheckInTime'] = $this->firstCheckInTime;
        }

        if (null !== $this->lastCheckOutTime) {
            $res['LastCheckOutTime'] = $this->lastCheckOutTime;
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

        if (null !== $this->totalOffSiteLggedInTime) {
            $res['TotalOffSiteLggedInTime'] = $this->totalOffSiteLggedInTime;
        }

        if (null !== $this->totalOfficePhoneLoggedInTime) {
            $res['TotalOfficePhoneLoggedInTime'] = $this->totalOfficePhoneLoggedInTime;
        }

        if (null !== $this->totalOnSiteLoggedInTime) {
            $res['TotalOnSiteLoggedInTime'] = $this->totalOnSiteLoggedInTime;
        }

        if (null !== $this->totalOutboundScenarioLoggedInTime) {
            $res['TotalOutboundScenarioLoggedInTime'] = $this->totalOutboundScenarioLoggedInTime;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['BreakCodeDetailList'] as $item1) {
                    $model->breakCodeDetailList[$n1++] = breakCodeDetailList::fromMap($item1);
                }
            }
        }

        if (isset($map['FirstCheckInTime'])) {
            $model->firstCheckInTime = $map['FirstCheckInTime'];
        }

        if (isset($map['LastCheckOutTime'])) {
            $model->lastCheckOutTime = $map['LastCheckOutTime'];
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

        if (isset($map['TotalOffSiteLggedInTime'])) {
            $model->totalOffSiteLggedInTime = $map['TotalOffSiteLggedInTime'];
        }

        if (isset($map['TotalOfficePhoneLoggedInTime'])) {
            $model->totalOfficePhoneLoggedInTime = $map['TotalOfficePhoneLoggedInTime'];
        }

        if (isset($map['TotalOnSiteLoggedInTime'])) {
            $model->totalOnSiteLoggedInTime = $map['TotalOnSiteLoggedInTime'];
        }

        if (isset($map['TotalOutboundScenarioLoggedInTime'])) {
            $model->totalOutboundScenarioLoggedInTime = $map['TotalOutboundScenarioLoggedInTime'];
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
