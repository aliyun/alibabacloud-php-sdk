<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentReportResponseBody\data\inbound\accessChannelTypeDetails;
use AlibabaCloud\Tea\Model;

class inbound extends Model
{
    /**
     * @var accessChannelTypeDetails[]
     */
    public $accessChannelTypeDetails;

    /**
     * @var float
     */
    public $averageFirstResponseTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageHoldTime;

    /**
     * @var float
     */
    public $averageResponseTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageRingTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageTalkTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageWorkTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsAttendedTransferIn;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsAttendedTransferOut;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsBlindTransferIn;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsBlindTransferOut;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsHandled;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsHold;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsOffered;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsRinged;

    /**
     * @example 0
     *
     * @var float
     */
    public $handleRate;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxHoldTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxRingTime;

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
     * @var float
     */
    public $serviceLevel15;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalHoldTime;

    /**
     * @var int
     */
    public $totalMessagesSent;

    /**
     * @var int
     */
    public $totalMessagesSentByAgent;

    /**
     * @var int
     */
    public $totalMessagesSentByCustomer;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalRingTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalTalkTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalWorkTime;
    protected $_name = [
        'accessChannelTypeDetails' => 'AccessChannelTypeDetails',
        'averageFirstResponseTime' => 'AverageFirstResponseTime',
        'averageHoldTime' => 'AverageHoldTime',
        'averageResponseTime' => 'AverageResponseTime',
        'averageRingTime' => 'AverageRingTime',
        'averageTalkTime' => 'AverageTalkTime',
        'averageWorkTime' => 'AverageWorkTime',
        'callsAttendedTransferIn' => 'CallsAttendedTransferIn',
        'callsAttendedTransferOut' => 'CallsAttendedTransferOut',
        'callsBlindTransferIn' => 'CallsBlindTransferIn',
        'callsBlindTransferOut' => 'CallsBlindTransferOut',
        'callsHandled' => 'CallsHandled',
        'callsHold' => 'CallsHold',
        'callsOffered' => 'CallsOffered',
        'callsRinged' => 'CallsRinged',
        'handleRate' => 'HandleRate',
        'maxHoldTime' => 'MaxHoldTime',
        'maxRingTime' => 'MaxRingTime',
        'maxTalkTime' => 'MaxTalkTime',
        'maxWorkTime' => 'MaxWorkTime',
        'satisfactionIndex' => 'SatisfactionIndex',
        'satisfactionRate' => 'SatisfactionRate',
        'satisfactionSurveysOffered' => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded' => 'SatisfactionSurveysResponded',
        'serviceLevel15' => 'ServiceLevel15',
        'totalHoldTime' => 'TotalHoldTime',
        'totalMessagesSent' => 'TotalMessagesSent',
        'totalMessagesSentByAgent' => 'TotalMessagesSentByAgent',
        'totalMessagesSentByCustomer' => 'TotalMessagesSentByCustomer',
        'totalRingTime' => 'TotalRingTime',
        'totalTalkTime' => 'TotalTalkTime',
        'totalWorkTime' => 'TotalWorkTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessChannelTypeDetails) {
            $res['AccessChannelTypeDetails'] = [];
            if (null !== $this->accessChannelTypeDetails && \is_array($this->accessChannelTypeDetails)) {
                $n = 0;
                foreach ($this->accessChannelTypeDetails as $item) {
                    $res['AccessChannelTypeDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->averageFirstResponseTime) {
            $res['AverageFirstResponseTime'] = $this->averageFirstResponseTime;
        }
        if (null !== $this->averageHoldTime) {
            $res['AverageHoldTime'] = $this->averageHoldTime;
        }
        if (null !== $this->averageResponseTime) {
            $res['AverageResponseTime'] = $this->averageResponseTime;
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
        if (null !== $this->callsHandled) {
            $res['CallsHandled'] = $this->callsHandled;
        }
        if (null !== $this->callsHold) {
            $res['CallsHold'] = $this->callsHold;
        }
        if (null !== $this->callsOffered) {
            $res['CallsOffered'] = $this->callsOffered;
        }
        if (null !== $this->callsRinged) {
            $res['CallsRinged'] = $this->callsRinged;
        }
        if (null !== $this->handleRate) {
            $res['HandleRate'] = $this->handleRate;
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
        if (null !== $this->serviceLevel15) {
            $res['ServiceLevel15'] = $this->serviceLevel15;
        }
        if (null !== $this->totalHoldTime) {
            $res['TotalHoldTime'] = $this->totalHoldTime;
        }
        if (null !== $this->totalMessagesSent) {
            $res['TotalMessagesSent'] = $this->totalMessagesSent;
        }
        if (null !== $this->totalMessagesSentByAgent) {
            $res['TotalMessagesSentByAgent'] = $this->totalMessagesSentByAgent;
        }
        if (null !== $this->totalMessagesSentByCustomer) {
            $res['TotalMessagesSentByCustomer'] = $this->totalMessagesSentByCustomer;
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

    /**
     * @param array $map
     *
     * @return inbound
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessChannelTypeDetails'])) {
            if (!empty($map['AccessChannelTypeDetails'])) {
                $model->accessChannelTypeDetails = [];
                $n = 0;
                foreach ($map['AccessChannelTypeDetails'] as $item) {
                    $model->accessChannelTypeDetails[$n++] = null !== $item ? accessChannelTypeDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AverageFirstResponseTime'])) {
            $model->averageFirstResponseTime = $map['AverageFirstResponseTime'];
        }
        if (isset($map['AverageHoldTime'])) {
            $model->averageHoldTime = $map['AverageHoldTime'];
        }
        if (isset($map['AverageResponseTime'])) {
            $model->averageResponseTime = $map['AverageResponseTime'];
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
        if (isset($map['CallsHandled'])) {
            $model->callsHandled = $map['CallsHandled'];
        }
        if (isset($map['CallsHold'])) {
            $model->callsHold = $map['CallsHold'];
        }
        if (isset($map['CallsOffered'])) {
            $model->callsOffered = $map['CallsOffered'];
        }
        if (isset($map['CallsRinged'])) {
            $model->callsRinged = $map['CallsRinged'];
        }
        if (isset($map['HandleRate'])) {
            $model->handleRate = $map['HandleRate'];
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
        if (isset($map['ServiceLevel15'])) {
            $model->serviceLevel15 = $map['ServiceLevel15'];
        }
        if (isset($map['TotalHoldTime'])) {
            $model->totalHoldTime = $map['TotalHoldTime'];
        }
        if (isset($map['TotalMessagesSent'])) {
            $model->totalMessagesSent = $map['TotalMessagesSent'];
        }
        if (isset($map['TotalMessagesSentByAgent'])) {
            $model->totalMessagesSentByAgent = $map['TotalMessagesSentByAgent'];
        }
        if (isset($map['TotalMessagesSentByCustomer'])) {
            $model->totalMessagesSentByCustomer = $map['TotalMessagesSentByCustomer'];
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
