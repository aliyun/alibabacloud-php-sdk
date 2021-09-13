<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalInstanceReportResponseBody\data;

use AlibabaCloud\Tea\Model;

class outbound extends Model
{
    /**
     * @var float
     */
    public $averageRingTime;

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
    public $totalHoldTime;

    /**
     * @var float
     */
    public $averageWorkTime;

    /**
     * @var float
     */
    public $satisfactionIndex;

    /**
     * @var int
     */
    public $callsRinged;

    /**
     * @var int
     */
    public $totalRingTime;

    /**
     * @var int
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
    public $maxDialingTime;

    /**
     * @var int
     */
    public $callsBlindTransferred;

    /**
     * @var float
     */
    public $answerRate;

    /**
     * @var int
     */
    public $maxHoldTime;

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
    public $callsAttendedTransferred;

    /**
     * @var int
     */
    public $callsHold;

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
    public $averageHoldTime;

    /**
     * @var float
     */
    public $averageDialingTime;
    protected $_name = [
        'averageRingTime'              => 'AverageRingTime',
        'callsDialed'                  => 'CallsDialed',
        'callsAnswered'                => 'CallsAnswered',
        'totalWorkTime'                => 'TotalWorkTime',
        'maxWorkTime'                  => 'MaxWorkTime',
        'totalDialingTime'             => 'TotalDialingTime',
        'totalHoldTime'                => 'TotalHoldTime',
        'averageWorkTime'              => 'AverageWorkTime',
        'satisfactionIndex'            => 'SatisfactionIndex',
        'callsRinged'                  => 'CallsRinged',
        'totalRingTime'                => 'TotalRingTime',
        'maxTalkTime'                  => 'MaxTalkTime',
        'maxRingTime'                  => 'MaxRingTime',
        'totalTalkTime'                => 'TotalTalkTime',
        'maxDialingTime'               => 'MaxDialingTime',
        'callsBlindTransferred'        => 'CallsBlindTransferred',
        'answerRate'                   => 'AnswerRate',
        'maxHoldTime'                  => 'MaxHoldTime',
        'averageTalkTime'              => 'AverageTalkTime',
        'satisfactionRate'             => 'SatisfactionRate',
        'callsAttendedTransferred'     => 'CallsAttendedTransferred',
        'callsHold'                    => 'CallsHold',
        'satisfactionSurveysOffered'   => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'averageHoldTime'              => 'AverageHoldTime',
        'averageDialingTime'           => 'AverageDialingTime',
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
        if (null !== $this->callsDialed) {
            $res['CallsDialed'] = $this->callsDialed;
        }
        if (null !== $this->callsAnswered) {
            $res['CallsAnswered'] = $this->callsAnswered;
        }
        if (null !== $this->totalWorkTime) {
            $res['TotalWorkTime'] = $this->totalWorkTime;
        }
        if (null !== $this->maxWorkTime) {
            $res['MaxWorkTime'] = $this->maxWorkTime;
        }
        if (null !== $this->totalDialingTime) {
            $res['TotalDialingTime'] = $this->totalDialingTime;
        }
        if (null !== $this->totalHoldTime) {
            $res['TotalHoldTime'] = $this->totalHoldTime;
        }
        if (null !== $this->averageWorkTime) {
            $res['AverageWorkTime'] = $this->averageWorkTime;
        }
        if (null !== $this->satisfactionIndex) {
            $res['SatisfactionIndex'] = $this->satisfactionIndex;
        }
        if (null !== $this->callsRinged) {
            $res['CallsRinged'] = $this->callsRinged;
        }
        if (null !== $this->totalRingTime) {
            $res['TotalRingTime'] = $this->totalRingTime;
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
        if (null !== $this->maxDialingTime) {
            $res['MaxDialingTime'] = $this->maxDialingTime;
        }
        if (null !== $this->callsBlindTransferred) {
            $res['CallsBlindTransferred'] = $this->callsBlindTransferred;
        }
        if (null !== $this->answerRate) {
            $res['AnswerRate'] = $this->answerRate;
        }
        if (null !== $this->maxHoldTime) {
            $res['MaxHoldTime'] = $this->maxHoldTime;
        }
        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
        }
        if (null !== $this->satisfactionRate) {
            $res['SatisfactionRate'] = $this->satisfactionRate;
        }
        if (null !== $this->callsAttendedTransferred) {
            $res['CallsAttendedTransferred'] = $this->callsAttendedTransferred;
        }
        if (null !== $this->callsHold) {
            $res['CallsHold'] = $this->callsHold;
        }
        if (null !== $this->satisfactionSurveysOffered) {
            $res['SatisfactionSurveysOffered'] = $this->satisfactionSurveysOffered;
        }
        if (null !== $this->satisfactionSurveysResponded) {
            $res['SatisfactionSurveysResponded'] = $this->satisfactionSurveysResponded;
        }
        if (null !== $this->averageHoldTime) {
            $res['AverageHoldTime'] = $this->averageHoldTime;
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
        if (isset($map['AverageRingTime'])) {
            $model->averageRingTime = $map['AverageRingTime'];
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
        if (isset($map['MaxWorkTime'])) {
            $model->maxWorkTime = $map['MaxWorkTime'];
        }
        if (isset($map['TotalDialingTime'])) {
            $model->totalDialingTime = $map['TotalDialingTime'];
        }
        if (isset($map['TotalHoldTime'])) {
            $model->totalHoldTime = $map['TotalHoldTime'];
        }
        if (isset($map['AverageWorkTime'])) {
            $model->averageWorkTime = $map['AverageWorkTime'];
        }
        if (isset($map['SatisfactionIndex'])) {
            $model->satisfactionIndex = $map['SatisfactionIndex'];
        }
        if (isset($map['CallsRinged'])) {
            $model->callsRinged = $map['CallsRinged'];
        }
        if (isset($map['TotalRingTime'])) {
            $model->totalRingTime = $map['TotalRingTime'];
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
        if (isset($map['MaxDialingTime'])) {
            $model->maxDialingTime = $map['MaxDialingTime'];
        }
        if (isset($map['CallsBlindTransferred'])) {
            $model->callsBlindTransferred = $map['CallsBlindTransferred'];
        }
        if (isset($map['AnswerRate'])) {
            $model->answerRate = $map['AnswerRate'];
        }
        if (isset($map['MaxHoldTime'])) {
            $model->maxHoldTime = $map['MaxHoldTime'];
        }
        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
        }
        if (isset($map['SatisfactionRate'])) {
            $model->satisfactionRate = $map['SatisfactionRate'];
        }
        if (isset($map['CallsAttendedTransferred'])) {
            $model->callsAttendedTransferred = $map['CallsAttendedTransferred'];
        }
        if (isset($map['CallsHold'])) {
            $model->callsHold = $map['CallsHold'];
        }
        if (isset($map['SatisfactionSurveysOffered'])) {
            $model->satisfactionSurveysOffered = $map['SatisfactionSurveysOffered'];
        }
        if (isset($map['SatisfactionSurveysResponded'])) {
            $model->satisfactionSurveysResponded = $map['SatisfactionSurveysResponded'];
        }
        if (isset($map['AverageHoldTime'])) {
            $model->averageHoldTime = $map['AverageHoldTime'];
        }
        if (isset($map['AverageDialingTime'])) {
            $model->averageDialingTime = $map['AverageDialingTime'];
        }

        return $model;
    }
}
