<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsResponseBody\pagedSkillGroupSummaryReport\list_\skillGroupSummaryReport;

use AlibabaCloud\Tea\Model;

class inbound extends Model
{
    /**
     * @var int
     */
    public $averageRingTime;

    /**
     * @var int
     */
    public $callsHandled;

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
    public $queueMaxWaitTimeDuration;

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
    public $answeredByAgentOfQueueWaitTimeDuration;

    /**
     * @var int
     */
    public $totalRingTime;

    /**
     * @var int
     */
    public $inComingQueueOfQueueCount;

    /**
     * @var string
     */
    public $maxTalkTime;

    /**
     * @var int
     */
    public $maxRingTime;

    /**
     * @var int
     */
    public $totalTalkTime;

    /**
     * @var int
     */
    public $callsOffered;

    /**
     * @var int
     */
    public $abandonedInQueueOfQueueCount;

    /**
     * @var int
     */
    public $overFlowInQueueOfQueueCount;

    /**
     * @var float
     */
    public $serviceLevel20;

    /**
     * @var int
     */
    public $answeredByAgentOfQueueMaxWaitTimeDuration;

    /**
     * @var int
     */
    public $averageTalkTime;

    /**
     * @var int
     */
    public $answeredByAgentOfQueueCount;

    /**
     * @var int
     */
    public $satisfactionSurveysOffered;

    /**
     * @var float
     */
    public $handleRate;

    /**
     * @var int
     */
    public $satisfactionSurveysResponded;

    /**
     * @var int
     */
    public $giveUpByAgentOfQueueCount;

    /**
     * @var int
     */
    public $queueWaitTimeDuration;
    protected $_name = [
        'averageRingTime'                           => 'AverageRingTime',
        'callsHandled'                              => 'CallsHandled',
        'totalWorkTime'                             => 'TotalWorkTime',
        'maxWorkTime'                               => 'MaxWorkTime',
        'queueMaxWaitTimeDuration'                  => 'QueueMaxWaitTimeDuration',
        'averageWorkTime'                           => 'AverageWorkTime',
        'satisfactionIndex'                         => 'SatisfactionIndex',
        'answeredByAgentOfQueueWaitTimeDuration'    => 'AnsweredByAgentOfQueueWaitTimeDuration',
        'totalRingTime'                             => 'TotalRingTime',
        'inComingQueueOfQueueCount'                 => 'InComingQueueOfQueueCount',
        'maxTalkTime'                               => 'MaxTalkTime',
        'maxRingTime'                               => 'MaxRingTime',
        'totalTalkTime'                             => 'TotalTalkTime',
        'callsOffered'                              => 'CallsOffered',
        'abandonedInQueueOfQueueCount'              => 'AbandonedInQueueOfQueueCount',
        'overFlowInQueueOfQueueCount'               => 'OverFlowInQueueOfQueueCount',
        'serviceLevel20'                            => 'ServiceLevel20',
        'answeredByAgentOfQueueMaxWaitTimeDuration' => 'AnsweredByAgentOfQueueMaxWaitTimeDuration',
        'averageTalkTime'                           => 'AverageTalkTime',
        'answeredByAgentOfQueueCount'               => 'AnsweredByAgentOfQueueCount',
        'satisfactionSurveysOffered'                => 'SatisfactionSurveysOffered',
        'handleRate'                                => 'HandleRate',
        'satisfactionSurveysResponded'              => 'SatisfactionSurveysResponded',
        'giveUpByAgentOfQueueCount'                 => 'GiveUpByAgentOfQueueCount',
        'queueWaitTimeDuration'                     => 'QueueWaitTimeDuration',
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
        if (null !== $this->callsHandled) {
            $res['CallsHandled'] = $this->callsHandled;
        }
        if (null !== $this->totalWorkTime) {
            $res['TotalWorkTime'] = $this->totalWorkTime;
        }
        if (null !== $this->maxWorkTime) {
            $res['MaxWorkTime'] = $this->maxWorkTime;
        }
        if (null !== $this->queueMaxWaitTimeDuration) {
            $res['QueueMaxWaitTimeDuration'] = $this->queueMaxWaitTimeDuration;
        }
        if (null !== $this->averageWorkTime) {
            $res['AverageWorkTime'] = $this->averageWorkTime;
        }
        if (null !== $this->satisfactionIndex) {
            $res['SatisfactionIndex'] = $this->satisfactionIndex;
        }
        if (null !== $this->answeredByAgentOfQueueWaitTimeDuration) {
            $res['AnsweredByAgentOfQueueWaitTimeDuration'] = $this->answeredByAgentOfQueueWaitTimeDuration;
        }
        if (null !== $this->totalRingTime) {
            $res['TotalRingTime'] = $this->totalRingTime;
        }
        if (null !== $this->inComingQueueOfQueueCount) {
            $res['InComingQueueOfQueueCount'] = $this->inComingQueueOfQueueCount;
        }
        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }
        if (null !== $this->maxRingTime) {
            $res['MaxRingTime'] = $this->maxRingTime;
        }
        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
        }
        if (null !== $this->callsOffered) {
            $res['CallsOffered'] = $this->callsOffered;
        }
        if (null !== $this->abandonedInQueueOfQueueCount) {
            $res['AbandonedInQueueOfQueueCount'] = $this->abandonedInQueueOfQueueCount;
        }
        if (null !== $this->overFlowInQueueOfQueueCount) {
            $res['OverFlowInQueueOfQueueCount'] = $this->overFlowInQueueOfQueueCount;
        }
        if (null !== $this->serviceLevel20) {
            $res['ServiceLevel20'] = $this->serviceLevel20;
        }
        if (null !== $this->answeredByAgentOfQueueMaxWaitTimeDuration) {
            $res['AnsweredByAgentOfQueueMaxWaitTimeDuration'] = $this->answeredByAgentOfQueueMaxWaitTimeDuration;
        }
        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
        }
        if (null !== $this->answeredByAgentOfQueueCount) {
            $res['AnsweredByAgentOfQueueCount'] = $this->answeredByAgentOfQueueCount;
        }
        if (null !== $this->satisfactionSurveysOffered) {
            $res['SatisfactionSurveysOffered'] = $this->satisfactionSurveysOffered;
        }
        if (null !== $this->handleRate) {
            $res['HandleRate'] = $this->handleRate;
        }
        if (null !== $this->satisfactionSurveysResponded) {
            $res['SatisfactionSurveysResponded'] = $this->satisfactionSurveysResponded;
        }
        if (null !== $this->giveUpByAgentOfQueueCount) {
            $res['GiveUpByAgentOfQueueCount'] = $this->giveUpByAgentOfQueueCount;
        }
        if (null !== $this->queueWaitTimeDuration) {
            $res['QueueWaitTimeDuration'] = $this->queueWaitTimeDuration;
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
        if (isset($map['CallsHandled'])) {
            $model->callsHandled = $map['CallsHandled'];
        }
        if (isset($map['TotalWorkTime'])) {
            $model->totalWorkTime = $map['TotalWorkTime'];
        }
        if (isset($map['MaxWorkTime'])) {
            $model->maxWorkTime = $map['MaxWorkTime'];
        }
        if (isset($map['QueueMaxWaitTimeDuration'])) {
            $model->queueMaxWaitTimeDuration = $map['QueueMaxWaitTimeDuration'];
        }
        if (isset($map['AverageWorkTime'])) {
            $model->averageWorkTime = $map['AverageWorkTime'];
        }
        if (isset($map['SatisfactionIndex'])) {
            $model->satisfactionIndex = $map['SatisfactionIndex'];
        }
        if (isset($map['AnsweredByAgentOfQueueWaitTimeDuration'])) {
            $model->answeredByAgentOfQueueWaitTimeDuration = $map['AnsweredByAgentOfQueueWaitTimeDuration'];
        }
        if (isset($map['TotalRingTime'])) {
            $model->totalRingTime = $map['TotalRingTime'];
        }
        if (isset($map['InComingQueueOfQueueCount'])) {
            $model->inComingQueueOfQueueCount = $map['InComingQueueOfQueueCount'];
        }
        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }
        if (isset($map['MaxRingTime'])) {
            $model->maxRingTime = $map['MaxRingTime'];
        }
        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }
        if (isset($map['CallsOffered'])) {
            $model->callsOffered = $map['CallsOffered'];
        }
        if (isset($map['AbandonedInQueueOfQueueCount'])) {
            $model->abandonedInQueueOfQueueCount = $map['AbandonedInQueueOfQueueCount'];
        }
        if (isset($map['OverFlowInQueueOfQueueCount'])) {
            $model->overFlowInQueueOfQueueCount = $map['OverFlowInQueueOfQueueCount'];
        }
        if (isset($map['ServiceLevel20'])) {
            $model->serviceLevel20 = $map['ServiceLevel20'];
        }
        if (isset($map['AnsweredByAgentOfQueueMaxWaitTimeDuration'])) {
            $model->answeredByAgentOfQueueMaxWaitTimeDuration = $map['AnsweredByAgentOfQueueMaxWaitTimeDuration'];
        }
        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
        }
        if (isset($map['AnsweredByAgentOfQueueCount'])) {
            $model->answeredByAgentOfQueueCount = $map['AnsweredByAgentOfQueueCount'];
        }
        if (isset($map['SatisfactionSurveysOffered'])) {
            $model->satisfactionSurveysOffered = $map['SatisfactionSurveysOffered'];
        }
        if (isset($map['HandleRate'])) {
            $model->handleRate = $map['HandleRate'];
        }
        if (isset($map['SatisfactionSurveysResponded'])) {
            $model->satisfactionSurveysResponded = $map['SatisfactionSurveysResponded'];
        }
        if (isset($map['GiveUpByAgentOfQueueCount'])) {
            $model->giveUpByAgentOfQueueCount = $map['GiveUpByAgentOfQueueCount'];
        }
        if (isset($map['QueueWaitTimeDuration'])) {
            $model->queueWaitTimeDuration = $map['QueueWaitTimeDuration'];
        }

        return $model;
    }
}
