<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListHistoricalAgentSkillGroupReportResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class outbound extends Model
{
    /**
     * @var float
     */
    public $answerRate;
    /**
     * @var float
     */
    public $averageDialingTime;
    /**
     * @var float
     */
    public $averageHoldTime;
    /**
     * @var float
     */
    public $averageRingTime;
    /**
     * @var float
     */
    public $averageTalkTime;
    /**
     * @var float
     */
    public $averageWorkTime;
    /**
     * @var int
     */
    public $callsAnswered;
    /**
     * @var int
     */
    public $callsAttendedTransferIn;
    /**
     * @var int
     */
    public $callsAttendedTransferOut;
    /**
     * @var int
     */
    public $callsBlindTransferIn;
    /**
     * @var int
     */
    public $callsBlindTransferOut;
    /**
     * @var int
     */
    public $callsDialed;
    /**
     * @var int
     */
    public $callsHold;
    /**
     * @var int
     */
    public $callsRinged;
    /**
     * @var int
     */
    public $maxDialingTime;
    /**
     * @var int
     */
    public $maxHoldTime;
    /**
     * @var int
     */
    public $maxRingTime;
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
    public $totalDialingTime;
    /**
     * @var int
     */
    public $totalHoldTime;
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
        'answerRate'                   => 'AnswerRate',
        'averageDialingTime'           => 'AverageDialingTime',
        'averageHoldTime'              => 'AverageHoldTime',
        'averageRingTime'              => 'AverageRingTime',
        'averageTalkTime'              => 'AverageTalkTime',
        'averageWorkTime'              => 'AverageWorkTime',
        'callsAnswered'                => 'CallsAnswered',
        'callsAttendedTransferIn'      => 'CallsAttendedTransferIn',
        'callsAttendedTransferOut'     => 'CallsAttendedTransferOut',
        'callsBlindTransferIn'         => 'CallsBlindTransferIn',
        'callsBlindTransferOut'        => 'CallsBlindTransferOut',
        'callsDialed'                  => 'CallsDialed',
        'callsHold'                    => 'CallsHold',
        'callsRinged'                  => 'CallsRinged',
        'maxDialingTime'               => 'MaxDialingTime',
        'maxHoldTime'                  => 'MaxHoldTime',
        'maxRingTime'                  => 'MaxRingTime',
        'maxTalkTime'                  => 'MaxTalkTime',
        'maxWorkTime'                  => 'MaxWorkTime',
        'satisfactionIndex'            => 'SatisfactionIndex',
        'satisfactionRate'             => 'SatisfactionRate',
        'satisfactionSurveysOffered'   => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'totalDialingTime'             => 'TotalDialingTime',
        'totalHoldTime'                => 'TotalHoldTime',
        'totalRingTime'                => 'TotalRingTime',
        'totalTalkTime'                => 'TotalTalkTime',
        'totalWorkTime'                => 'TotalWorkTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerRate) {
            $res['AnswerRate'] = $this->answerRate;
        }

        if (null !== $this->averageDialingTime) {
            $res['AverageDialingTime'] = $this->averageDialingTime;
        }

        if (null !== $this->averageHoldTime) {
            $res['AverageHoldTime'] = $this->averageHoldTime;
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

        if (null !== $this->callsAnswered) {
            $res['CallsAnswered'] = $this->callsAnswered;
        }

        if (null !== $this->callsAttendedTransferIn) {
            $res['CallsAttendedTransferIn'] = $this->callsAttendedTransferIn;
        }

        if (null !== $this->callsAttendedTransferOut) {
            $res['CallsAttendedTransferOut'] = $this->callsAttendedTransferOut;
        }

        if (null !== $this->callsBlindTransferIn) {
            $res['CallsBlindTransferIn'] = $this->callsBlindTransferIn;
        }

        if (null !== $this->callsBlindTransferOut) {
            $res['CallsBlindTransferOut'] = $this->callsBlindTransferOut;
        }

        if (null !== $this->callsDialed) {
            $res['CallsDialed'] = $this->callsDialed;
        }

        if (null !== $this->callsHold) {
            $res['CallsHold'] = $this->callsHold;
        }

        if (null !== $this->callsRinged) {
            $res['CallsRinged'] = $this->callsRinged;
        }

        if (null !== $this->maxDialingTime) {
            $res['MaxDialingTime'] = $this->maxDialingTime;
        }

        if (null !== $this->maxHoldTime) {
            $res['MaxHoldTime'] = $this->maxHoldTime;
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

        if (null !== $this->totalDialingTime) {
            $res['TotalDialingTime'] = $this->totalDialingTime;
        }

        if (null !== $this->totalHoldTime) {
            $res['TotalHoldTime'] = $this->totalHoldTime;
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
        if (isset($map['AnswerRate'])) {
            $model->answerRate = $map['AnswerRate'];
        }

        if (isset($map['AverageDialingTime'])) {
            $model->averageDialingTime = $map['AverageDialingTime'];
        }

        if (isset($map['AverageHoldTime'])) {
            $model->averageHoldTime = $map['AverageHoldTime'];
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

        if (isset($map['CallsAnswered'])) {
            $model->callsAnswered = $map['CallsAnswered'];
        }

        if (isset($map['CallsAttendedTransferIn'])) {
            $model->callsAttendedTransferIn = $map['CallsAttendedTransferIn'];
        }

        if (isset($map['CallsAttendedTransferOut'])) {
            $model->callsAttendedTransferOut = $map['CallsAttendedTransferOut'];
        }

        if (isset($map['CallsBlindTransferIn'])) {
            $model->callsBlindTransferIn = $map['CallsBlindTransferIn'];
        }

        if (isset($map['CallsBlindTransferOut'])) {
            $model->callsBlindTransferOut = $map['CallsBlindTransferOut'];
        }

        if (isset($map['CallsDialed'])) {
            $model->callsDialed = $map['CallsDialed'];
        }

        if (isset($map['CallsHold'])) {
            $model->callsHold = $map['CallsHold'];
        }

        if (isset($map['CallsRinged'])) {
            $model->callsRinged = $map['CallsRinged'];
        }

        if (isset($map['MaxDialingTime'])) {
            $model->maxDialingTime = $map['MaxDialingTime'];
        }

        if (isset($map['MaxHoldTime'])) {
            $model->maxHoldTime = $map['MaxHoldTime'];
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

        if (isset($map['TotalDialingTime'])) {
            $model->totalDialingTime = $map['TotalDialingTime'];
        }

        if (isset($map['TotalHoldTime'])) {
            $model->totalHoldTime = $map['TotalHoldTime'];
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
