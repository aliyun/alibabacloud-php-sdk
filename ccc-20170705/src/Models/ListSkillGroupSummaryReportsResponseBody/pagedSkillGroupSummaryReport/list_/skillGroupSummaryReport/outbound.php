<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupSummaryReportsResponseBody\pagedSkillGroupSummaryReport\list_\skillGroupSummaryReport;

use AlibabaCloud\Tea\Model;

class outbound extends Model
{
    /**
     * @var int
     */
    public $totalTalkTime;

    /**
     * @var int
     */
    public $maxDialingTime;

    /**
     * @var int
     */
    public $callsDialed;

    /**
     * @var int
     */
    public $callsAnswered;

    /**
     * @var int
     */
    public $totalWorkTime;

    /**
     * @var float
     */
    public $answerRate;

    /**
     * @var int
     */
    public $maxWorkTime;

    /**
     * @var int
     */
    public $totalDialingTime;

    /**
     * @var int
     */
    public $averageWorkTime;

    /**
     * @var int
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
    public $maxTalkTime;

    /**
     * @var int
     */
    public $averageDialingTime;
    protected $_name = [
        'totalTalkTime'                => 'TotalTalkTime',
        'maxDialingTime'               => 'MaxDialingTime',
        'callsDialed'                  => 'CallsDialed',
        'callsAnswered'                => 'CallsAnswered',
        'totalWorkTime'                => 'TotalWorkTime',
        'answerRate'                   => 'AnswerRate',
        'maxWorkTime'                  => 'MaxWorkTime',
        'totalDialingTime'             => 'TotalDialingTime',
        'averageWorkTime'              => 'AverageWorkTime',
        'averageTalkTime'              => 'AverageTalkTime',
        'satisfactionIndex'            => 'SatisfactionIndex',
        'satisfactionSurveysOffered'   => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'maxTalkTime'                  => 'MaxTalkTime',
        'averageDialingTime'           => 'AverageDialingTime',
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
        if (null !== $this->maxDialingTime) {
            $res['MaxDialingTime'] = $this->maxDialingTime;
        }
        if (null !== $this->callsDialed) {
            $res['CallsDialed'] = $this->callsDialed;
        }
        if (null !== $this->callsAnswered) {
            $res['CallsAnswered'] = $this->callsAnswered;
        }
        if (null !== $this->totalWorkTime) {
            $res['TotalWorkTime'] = $this->totalWorkTime;
        }
        if (null !== $this->answerRate) {
            $res['AnswerRate'] = $this->answerRate;
        }
        if (null !== $this->maxWorkTime) {
            $res['MaxWorkTime'] = $this->maxWorkTime;
        }
        if (null !== $this->totalDialingTime) {
            $res['TotalDialingTime'] = $this->totalDialingTime;
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
        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }
        if (null !== $this->averageDialingTime) {
            $res['AverageDialingTime'] = $this->averageDialingTime;
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
        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }
        if (isset($map['MaxDialingTime'])) {
            $model->maxDialingTime = $map['MaxDialingTime'];
        }
        if (isset($map['CallsDialed'])) {
            $model->callsDialed = $map['CallsDialed'];
        }
        if (isset($map['CallsAnswered'])) {
            $model->callsAnswered = $map['CallsAnswered'];
        }
        if (isset($map['TotalWorkTime'])) {
            $model->totalWorkTime = $map['TotalWorkTime'];
        }
        if (isset($map['AnswerRate'])) {
            $model->answerRate = $map['AnswerRate'];
        }
        if (isset($map['MaxWorkTime'])) {
            $model->maxWorkTime = $map['MaxWorkTime'];
        }
        if (isset($map['TotalDialingTime'])) {
            $model->totalDialingTime = $map['TotalDialingTime'];
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
        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }
        if (isset($map['AverageDialingTime'])) {
            $model->averageDialingTime = $map['AverageDialingTime'];
        }

        return $model;
    }
}
