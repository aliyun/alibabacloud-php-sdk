<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupSummaryReportsSinceMidnightResponseBody\pagedSkillGroupSummaryReport\list_;

use AlibabaCloud\Tea\Model;

class outbound extends Model
{
    /**
     * @example 0
     *
     * @var float
     */
    public $answerRate;

    /**
     * @example 0
     *
     * @var int
     */
    public $averageDialingTime;

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
     * @var int
     */
    public $callsAbandoned;

    /**
     * @var int
     */
    public $callsAgentHandled;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsAnswered;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsDialed;

    /**
     * @var int
     */
    public $callsOffered;

    /**
     * @var int
     */
    public $callsQueuingCancelled;

    /**
     * @var int
     */
    public $callsQueuingFailed;

    /**
     * @var int
     */
    public $callsQueuingFailure;

    /**
     * @var int
     */
    public $callsQueuingOverflow;

    /**
     * @var int
     */
    public $callsQueuingRerouted;

    /**
     * @var int
     */
    public $callsQueuingTimeout;

    /**
     * @example 0
     *
     * @var string
     */
    public $callsServiceLevel30;

    /**
     * @var int
     */
    public $callsServiceLevel30V2;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxDialingTime;

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
     * @var int
     */
    public $totalDialingTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalTalkTime;

    /**
     * @var int
     */
    public $totalWaitTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalWorkTime;
    protected $_name = [
        'answerRate' => 'AnswerRate',
        'averageDialingTime' => 'AverageDialingTime',
        'averageTalkTime' => 'AverageTalkTime',
        'averageWorkTime' => 'AverageWorkTime',
        'callsAbandoned' => 'CallsAbandoned',
        'callsAgentHandled' => 'CallsAgentHandled',
        'callsAnswered' => 'CallsAnswered',
        'callsDialed' => 'CallsDialed',
        'callsOffered' => 'CallsOffered',
        'callsQueuingCancelled' => 'CallsQueuingCancelled',
        'callsQueuingFailed' => 'CallsQueuingFailed',
        'callsQueuingFailure' => 'CallsQueuingFailure',
        'callsQueuingOverflow' => 'CallsQueuingOverflow',
        'callsQueuingRerouted' => 'CallsQueuingRerouted',
        'callsQueuingTimeout' => 'CallsQueuingTimeout',
        'callsServiceLevel30' => 'CallsServiceLevel30',
        'callsServiceLevel30V2' => 'CallsServiceLevel30V2',
        'maxDialingTime' => 'MaxDialingTime',
        'maxTalkTime' => 'MaxTalkTime',
        'maxWorkTime' => 'MaxWorkTime',
        'satisfactionIndex' => 'SatisfactionIndex',
        'satisfactionSurveysOffered' => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'totalDialingTime' => 'TotalDialingTime',
        'totalTalkTime' => 'TotalTalkTime',
        'totalWaitTime' => 'TotalWaitTime',
        'totalWorkTime' => 'TotalWorkTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerRate) {
            $res['AnswerRate'] = $this->answerRate;
        }
        if (null !== $this->averageDialingTime) {
            $res['AverageDialingTime'] = $this->averageDialingTime;
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
        if (null !== $this->callsAgentHandled) {
            $res['CallsAgentHandled'] = $this->callsAgentHandled;
        }
        if (null !== $this->callsAnswered) {
            $res['CallsAnswered'] = $this->callsAnswered;
        }
        if (null !== $this->callsDialed) {
            $res['CallsDialed'] = $this->callsDialed;
        }
        if (null !== $this->callsOffered) {
            $res['CallsOffered'] = $this->callsOffered;
        }
        if (null !== $this->callsQueuingCancelled) {
            $res['CallsQueuingCancelled'] = $this->callsQueuingCancelled;
        }
        if (null !== $this->callsQueuingFailed) {
            $res['CallsQueuingFailed'] = $this->callsQueuingFailed;
        }
        if (null !== $this->callsQueuingFailure) {
            $res['CallsQueuingFailure'] = $this->callsQueuingFailure;
        }
        if (null !== $this->callsQueuingOverflow) {
            $res['CallsQueuingOverflow'] = $this->callsQueuingOverflow;
        }
        if (null !== $this->callsQueuingRerouted) {
            $res['CallsQueuingRerouted'] = $this->callsQueuingRerouted;
        }
        if (null !== $this->callsQueuingTimeout) {
            $res['CallsQueuingTimeout'] = $this->callsQueuingTimeout;
        }
        if (null !== $this->callsServiceLevel30) {
            $res['CallsServiceLevel30'] = $this->callsServiceLevel30;
        }
        if (null !== $this->callsServiceLevel30V2) {
            $res['CallsServiceLevel30V2'] = $this->callsServiceLevel30V2;
        }
        if (null !== $this->maxDialingTime) {
            $res['MaxDialingTime'] = $this->maxDialingTime;
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
        if (null !== $this->totalDialingTime) {
            $res['TotalDialingTime'] = $this->totalDialingTime;
        }
        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
        }
        if (null !== $this->totalWaitTime) {
            $res['TotalWaitTime'] = $this->totalWaitTime;
        }
        if (null !== $this->totalWorkTime) {
            $res['TotalWorkTime'] = $this->totalWorkTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outbound
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerRate'])) {
            $model->answerRate = $map['AnswerRate'];
        }
        if (isset($map['AverageDialingTime'])) {
            $model->averageDialingTime = $map['AverageDialingTime'];
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
        if (isset($map['CallsAgentHandled'])) {
            $model->callsAgentHandled = $map['CallsAgentHandled'];
        }
        if (isset($map['CallsAnswered'])) {
            $model->callsAnswered = $map['CallsAnswered'];
        }
        if (isset($map['CallsDialed'])) {
            $model->callsDialed = $map['CallsDialed'];
        }
        if (isset($map['CallsOffered'])) {
            $model->callsOffered = $map['CallsOffered'];
        }
        if (isset($map['CallsQueuingCancelled'])) {
            $model->callsQueuingCancelled = $map['CallsQueuingCancelled'];
        }
        if (isset($map['CallsQueuingFailed'])) {
            $model->callsQueuingFailed = $map['CallsQueuingFailed'];
        }
        if (isset($map['CallsQueuingFailure'])) {
            $model->callsQueuingFailure = $map['CallsQueuingFailure'];
        }
        if (isset($map['CallsQueuingOverflow'])) {
            $model->callsQueuingOverflow = $map['CallsQueuingOverflow'];
        }
        if (isset($map['CallsQueuingRerouted'])) {
            $model->callsQueuingRerouted = $map['CallsQueuingRerouted'];
        }
        if (isset($map['CallsQueuingTimeout'])) {
            $model->callsQueuingTimeout = $map['CallsQueuingTimeout'];
        }
        if (isset($map['CallsServiceLevel30'])) {
            $model->callsServiceLevel30 = $map['CallsServiceLevel30'];
        }
        if (isset($map['CallsServiceLevel30V2'])) {
            $model->callsServiceLevel30V2 = $map['CallsServiceLevel30V2'];
        }
        if (isset($map['MaxDialingTime'])) {
            $model->maxDialingTime = $map['MaxDialingTime'];
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
        if (isset($map['TotalDialingTime'])) {
            $model->totalDialingTime = $map['TotalDialingTime'];
        }
        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }
        if (isset($map['TotalWaitTime'])) {
            $model->totalWaitTime = $map['TotalWaitTime'];
        }
        if (isset($map['TotalWorkTime'])) {
            $model->totalWorkTime = $map['TotalWorkTime'];
        }

        return $model;
    }
}
