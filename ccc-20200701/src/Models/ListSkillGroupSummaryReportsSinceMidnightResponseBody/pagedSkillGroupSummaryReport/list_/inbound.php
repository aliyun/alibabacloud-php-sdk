<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport\list_;

use AlibabaCloud\Dara\Model;

class inbound extends Model
{
    /**
     * @var int
     */
    public $abandonedInQueueOfQueueCount;

    /**
     * @var int
     */
    public $answeredByAgentOfQueueCount;

    /**
     * @var int
     */
    public $answeredByAgentOfQueueMaxWaitTimeDuration;

    /**
     * @var int
     */
    public $answeredByAgentOfQueueWaitTimeDuration;

    /**
     * @var int
     */
    public $averageRingTime;

    /**
     * @var int
     */
    public $averageTalkTime;

    /**
     * @var int
     */
    public $averageWorkTime;

    /**
     * @var int
     */
    public $callsAbandoned;

    /**
     * @var int
     */
    public $callsAttendedTransferOut;

    /**
     * @var int
     */
    public $callsBlindTransferOut;

    /**
     * @var int
     */
    public $callsHandled;

    /**
     * @var int
     */
    public $callsOffered;

    /**
     * @var string
     */
    public $callsOverflow;

    /**
     * @var string
     */
    public $callsQueuingCanceled;

    /**
     * @var string
     */
    public $callsQueuingFailure;

    /**
     * @var string
     */
    public $callsQueuingRerouted;

    /**
     * @var int
     */
    public $callsQueuingTimeout;

    /**
     * @var int
     */
    public $callsServiceLevel10;

    /**
     * @var int
     */
    public $callsServiceLevel20;

    /**
     * @var int
     */
    public $callsServiceLevel30;

    /**
     * @var int
     */
    public $callsTimeout;

    /**
     * @var int
     */
    public $giveUpByAgentOfQueueCount;

    /**
     * @var float
     */
    public $handleRate;

    /**
     * @var int
     */
    public $inComingQueueOfQueueCount;

    /**
     * @var int
     */
    public $maxRingTime;

    /**
     * @var string
     */
    public $maxTalkTime;

    /**
     * @var int
     */
    public $maxWorkTime;

    /**
     * @var int
     */
    public $overFlowInQueueOfQueueCount;

    /**
     * @var int
     */
    public $queueMaxWaitTimeDuration;

    /**
     * @var int
     */
    public $queueWaitTimeDuration;

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
     * @var float
     */
    public $serviceLevel20;

    /**
     * @var int
     */
    public $totalRingTime;

    /**
     * @var int
     */
    public $totalTalkTime;

    /**
     * @var int
     */
    public $totalWorkTime;
    protected $_name = [
        'abandonedInQueueOfQueueCount' => 'AbandonedInQueueOfQueueCount',
        'answeredByAgentOfQueueCount' => 'AnsweredByAgentOfQueueCount',
        'answeredByAgentOfQueueMaxWaitTimeDuration' => 'AnsweredByAgentOfQueueMaxWaitTimeDuration',
        'answeredByAgentOfQueueWaitTimeDuration' => 'AnsweredByAgentOfQueueWaitTimeDuration',
        'averageRingTime' => 'AverageRingTime',
        'averageTalkTime' => 'AverageTalkTime',
        'averageWorkTime' => 'AverageWorkTime',
        'callsAbandoned' => 'CallsAbandoned',
        'callsAttendedTransferOut' => 'CallsAttendedTransferOut',
        'callsBlindTransferOut' => 'CallsBlindTransferOut',
        'callsHandled' => 'CallsHandled',
        'callsOffered' => 'CallsOffered',
        'callsOverflow' => 'CallsOverflow',
        'callsQueuingCanceled' => 'CallsQueuingCanceled',
        'callsQueuingFailure' => 'CallsQueuingFailure',
        'callsQueuingRerouted' => 'CallsQueuingRerouted',
        'callsQueuingTimeout' => 'CallsQueuingTimeout',
        'callsServiceLevel10' => 'CallsServiceLevel10',
        'callsServiceLevel20' => 'CallsServiceLevel20',
        'callsServiceLevel30' => 'CallsServiceLevel30',
        'callsTimeout' => 'CallsTimeout',
        'giveUpByAgentOfQueueCount' => 'GiveUpByAgentOfQueueCount',
        'handleRate' => 'HandleRate',
        'inComingQueueOfQueueCount' => 'InComingQueueOfQueueCount',
        'maxRingTime' => 'MaxRingTime',
        'maxTalkTime' => 'MaxTalkTime',
        'maxWorkTime' => 'MaxWorkTime',
        'overFlowInQueueOfQueueCount' => 'OverFlowInQueueOfQueueCount',
        'queueMaxWaitTimeDuration' => 'QueueMaxWaitTimeDuration',
        'queueWaitTimeDuration' => 'QueueWaitTimeDuration',
        'satisfactionIndex' => 'SatisfactionIndex',
        'satisfactionSurveysOffered' => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'serviceLevel20' => 'ServiceLevel20',
        'totalRingTime' => 'TotalRingTime',
        'totalTalkTime' => 'TotalTalkTime',
        'totalWorkTime' => 'TotalWorkTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abandonedInQueueOfQueueCount) {
            $res['AbandonedInQueueOfQueueCount'] = $this->abandonedInQueueOfQueueCount;
        }

        if (null !== $this->answeredByAgentOfQueueCount) {
            $res['AnsweredByAgentOfQueueCount'] = $this->answeredByAgentOfQueueCount;
        }

        if (null !== $this->answeredByAgentOfQueueMaxWaitTimeDuration) {
            $res['AnsweredByAgentOfQueueMaxWaitTimeDuration'] = $this->answeredByAgentOfQueueMaxWaitTimeDuration;
        }

        if (null !== $this->answeredByAgentOfQueueWaitTimeDuration) {
            $res['AnsweredByAgentOfQueueWaitTimeDuration'] = $this->answeredByAgentOfQueueWaitTimeDuration;
        }

        if (null !== $this->averageRingTime) {
            $res['AverageRingTime'] = $this->averageRingTime;
        }

        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
        }

        if (null !== $this->averageWorkTime) {
            $res['AverageWorkTime'] = $this->averageWorkTime;
        }

        if (null !== $this->callsAbandoned) {
            $res['CallsAbandoned'] = $this->callsAbandoned;
        }

        if (null !== $this->callsAttendedTransferOut) {
            $res['CallsAttendedTransferOut'] = $this->callsAttendedTransferOut;
        }

        if (null !== $this->callsBlindTransferOut) {
            $res['CallsBlindTransferOut'] = $this->callsBlindTransferOut;
        }

        if (null !== $this->callsHandled) {
            $res['CallsHandled'] = $this->callsHandled;
        }

        if (null !== $this->callsOffered) {
            $res['CallsOffered'] = $this->callsOffered;
        }

        if (null !== $this->callsOverflow) {
            $res['CallsOverflow'] = $this->callsOverflow;
        }

        if (null !== $this->callsQueuingCanceled) {
            $res['CallsQueuingCanceled'] = $this->callsQueuingCanceled;
        }

        if (null !== $this->callsQueuingFailure) {
            $res['CallsQueuingFailure'] = $this->callsQueuingFailure;
        }

        if (null !== $this->callsQueuingRerouted) {
            $res['CallsQueuingRerouted'] = $this->callsQueuingRerouted;
        }

        if (null !== $this->callsQueuingTimeout) {
            $res['CallsQueuingTimeout'] = $this->callsQueuingTimeout;
        }

        if (null !== $this->callsServiceLevel10) {
            $res['CallsServiceLevel10'] = $this->callsServiceLevel10;
        }

        if (null !== $this->callsServiceLevel20) {
            $res['CallsServiceLevel20'] = $this->callsServiceLevel20;
        }

        if (null !== $this->callsServiceLevel30) {
            $res['CallsServiceLevel30'] = $this->callsServiceLevel30;
        }

        if (null !== $this->callsTimeout) {
            $res['CallsTimeout'] = $this->callsTimeout;
        }

        if (null !== $this->giveUpByAgentOfQueueCount) {
            $res['GiveUpByAgentOfQueueCount'] = $this->giveUpByAgentOfQueueCount;
        }

        if (null !== $this->handleRate) {
            $res['HandleRate'] = $this->handleRate;
        }

        if (null !== $this->inComingQueueOfQueueCount) {
            $res['InComingQueueOfQueueCount'] = $this->inComingQueueOfQueueCount;
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

        if (null !== $this->overFlowInQueueOfQueueCount) {
            $res['OverFlowInQueueOfQueueCount'] = $this->overFlowInQueueOfQueueCount;
        }

        if (null !== $this->queueMaxWaitTimeDuration) {
            $res['QueueMaxWaitTimeDuration'] = $this->queueMaxWaitTimeDuration;
        }

        if (null !== $this->queueWaitTimeDuration) {
            $res['QueueWaitTimeDuration'] = $this->queueWaitTimeDuration;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbandonedInQueueOfQueueCount'])) {
            $model->abandonedInQueueOfQueueCount = $map['AbandonedInQueueOfQueueCount'];
        }

        if (isset($map['AnsweredByAgentOfQueueCount'])) {
            $model->answeredByAgentOfQueueCount = $map['AnsweredByAgentOfQueueCount'];
        }

        if (isset($map['AnsweredByAgentOfQueueMaxWaitTimeDuration'])) {
            $model->answeredByAgentOfQueueMaxWaitTimeDuration = $map['AnsweredByAgentOfQueueMaxWaitTimeDuration'];
        }

        if (isset($map['AnsweredByAgentOfQueueWaitTimeDuration'])) {
            $model->answeredByAgentOfQueueWaitTimeDuration = $map['AnsweredByAgentOfQueueWaitTimeDuration'];
        }

        if (isset($map['AverageRingTime'])) {
            $model->averageRingTime = $map['AverageRingTime'];
        }

        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
        }

        if (isset($map['AverageWorkTime'])) {
            $model->averageWorkTime = $map['AverageWorkTime'];
        }

        if (isset($map['CallsAbandoned'])) {
            $model->callsAbandoned = $map['CallsAbandoned'];
        }

        if (isset($map['CallsAttendedTransferOut'])) {
            $model->callsAttendedTransferOut = $map['CallsAttendedTransferOut'];
        }

        if (isset($map['CallsBlindTransferOut'])) {
            $model->callsBlindTransferOut = $map['CallsBlindTransferOut'];
        }

        if (isset($map['CallsHandled'])) {
            $model->callsHandled = $map['CallsHandled'];
        }

        if (isset($map['CallsOffered'])) {
            $model->callsOffered = $map['CallsOffered'];
        }

        if (isset($map['CallsOverflow'])) {
            $model->callsOverflow = $map['CallsOverflow'];
        }

        if (isset($map['CallsQueuingCanceled'])) {
            $model->callsQueuingCanceled = $map['CallsQueuingCanceled'];
        }

        if (isset($map['CallsQueuingFailure'])) {
            $model->callsQueuingFailure = $map['CallsQueuingFailure'];
        }

        if (isset($map['CallsQueuingRerouted'])) {
            $model->callsQueuingRerouted = $map['CallsQueuingRerouted'];
        }

        if (isset($map['CallsQueuingTimeout'])) {
            $model->callsQueuingTimeout = $map['CallsQueuingTimeout'];
        }

        if (isset($map['CallsServiceLevel10'])) {
            $model->callsServiceLevel10 = $map['CallsServiceLevel10'];
        }

        if (isset($map['CallsServiceLevel20'])) {
            $model->callsServiceLevel20 = $map['CallsServiceLevel20'];
        }

        if (isset($map['CallsServiceLevel30'])) {
            $model->callsServiceLevel30 = $map['CallsServiceLevel30'];
        }

        if (isset($map['CallsTimeout'])) {
            $model->callsTimeout = $map['CallsTimeout'];
        }

        if (isset($map['GiveUpByAgentOfQueueCount'])) {
            $model->giveUpByAgentOfQueueCount = $map['GiveUpByAgentOfQueueCount'];
        }

        if (isset($map['HandleRate'])) {
            $model->handleRate = $map['HandleRate'];
        }

        if (isset($map['InComingQueueOfQueueCount'])) {
            $model->inComingQueueOfQueueCount = $map['InComingQueueOfQueueCount'];
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

        if (isset($map['OverFlowInQueueOfQueueCount'])) {
            $model->overFlowInQueueOfQueueCount = $map['OverFlowInQueueOfQueueCount'];
        }

        if (isset($map['QueueMaxWaitTimeDuration'])) {
            $model->queueMaxWaitTimeDuration = $map['QueueMaxWaitTimeDuration'];
        }

        if (isset($map['QueueWaitTimeDuration'])) {
            $model->queueWaitTimeDuration = $map['QueueWaitTimeDuration'];
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
