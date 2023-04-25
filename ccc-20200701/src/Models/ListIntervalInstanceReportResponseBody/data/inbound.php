<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalInstanceReportResponseBody\data;

use AlibabaCloud\Tea\Model;

class inbound extends Model
{
    /**
     * @example 0
     *
     * @var float
     */
    public $abandonedRate;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageAbandonTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageAbandonedInIVRTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageAbandonedInQueueTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageAbandonedInRingTime;

    /**
     * @example 0
     *
     * @var float
     */
    public $averageHoldTime;

    /**
     * @example 5
     *
     * @var float
     */
    public $averageRingTime;

    /**
     * @example 64
     *
     * @var float
     */
    public $averageTalkTime;

    /**
     * @example 5
     *
     * @var float
     */
    public $averageWaitTime;

    /**
     * @example 13
     *
     * @var float
     */
    public $averageWorkTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsAbandoned;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsAbandonedInIVR;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsAbandonedInQueue;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsAbandonedInRing;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsAbandonedInVoiceNavigator;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsAttendedTransferred;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsBlindTransferred;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsForwardToOutsideNumber;

    /**
     * @example 7
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
    public $callsIVRException;

    /**
     * @example 7
     *
     * @var int
     */
    public $callsOffered;

    /**
     * @example 7
     *
     * @var int
     */
    public $callsQueued;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsQueuingFailed;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsQueuingOverflow;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsQueuingTimeout;

    /**
     * @example 7
     *
     * @var int
     */
    public $callsRinged;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsVoicemail;

    /**
     * @example 1
     *
     * @var float
     */
    public $handleRate;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxAbandonTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxAbandonedInIVRTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxAbandonedInQueueTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxAbandonedInRingTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxHoldTime;

    /**
     * @example 12
     *
     * @var int
     */
    public $maxRingTime;

    /**
     * @example 219
     *
     * @var int
     */
    public $maxTalkTime;

    /**
     * @example 13
     *
     * @var int
     */
    public $maxWaitTime;

    /**
     * @example 17
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
     * @example 1
     *
     * @var float
     */
    public $serviceLevel20;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalAbandonTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalAbandonedInIVRTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalAbandonedInQueueTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalAbandonedInRingTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalHoldTime;

    /**
     * @example 32
     *
     * @var int
     */
    public $totalRingTime;

    /**
     * @example 447
     *
     * @var int
     */
    public $totalTalkTime;

    /**
     * @example 34
     *
     * @var int
     */
    public $totalWaitTime;

    /**
     * @example 85
     *
     * @var int
     */
    public $totalWorkTime;
    protected $_name = [
        'abandonedRate'                  => 'AbandonedRate',
        'averageAbandonTime'             => 'AverageAbandonTime',
        'averageAbandonedInIVRTime'      => 'AverageAbandonedInIVRTime',
        'averageAbandonedInQueueTime'    => 'AverageAbandonedInQueueTime',
        'averageAbandonedInRingTime'     => 'AverageAbandonedInRingTime',
        'averageHoldTime'                => 'AverageHoldTime',
        'averageRingTime'                => 'AverageRingTime',
        'averageTalkTime'                => 'AverageTalkTime',
        'averageWaitTime'                => 'AverageWaitTime',
        'averageWorkTime'                => 'AverageWorkTime',
        'callsAbandoned'                 => 'CallsAbandoned',
        'callsAbandonedInIVR'            => 'CallsAbandonedInIVR',
        'callsAbandonedInQueue'          => 'CallsAbandonedInQueue',
        'callsAbandonedInRing'           => 'CallsAbandonedInRing',
        'callsAbandonedInVoiceNavigator' => 'CallsAbandonedInVoiceNavigator',
        'callsAttendedTransferred'       => 'CallsAttendedTransferred',
        'callsBlindTransferred'          => 'CallsBlindTransferred',
        'callsForwardToOutsideNumber'    => 'CallsForwardToOutsideNumber',
        'callsHandled'                   => 'CallsHandled',
        'callsHold'                      => 'CallsHold',
        'callsIVRException'              => 'CallsIVRException',
        'callsOffered'                   => 'CallsOffered',
        'callsQueued'                    => 'CallsQueued',
        'callsQueuingFailed'             => 'CallsQueuingFailed',
        'callsQueuingOverflow'           => 'CallsQueuingOverflow',
        'callsQueuingTimeout'            => 'CallsQueuingTimeout',
        'callsRinged'                    => 'CallsRinged',
        'callsVoicemail'                 => 'CallsVoicemail',
        'handleRate'                     => 'HandleRate',
        'maxAbandonTime'                 => 'MaxAbandonTime',
        'maxAbandonedInIVRTime'          => 'MaxAbandonedInIVRTime',
        'maxAbandonedInQueueTime'        => 'MaxAbandonedInQueueTime',
        'maxAbandonedInRingTime'         => 'MaxAbandonedInRingTime',
        'maxHoldTime'                    => 'MaxHoldTime',
        'maxRingTime'                    => 'MaxRingTime',
        'maxTalkTime'                    => 'MaxTalkTime',
        'maxWaitTime'                    => 'MaxWaitTime',
        'maxWorkTime'                    => 'MaxWorkTime',
        'satisfactionIndex'              => 'SatisfactionIndex',
        'satisfactionRate'               => 'SatisfactionRate',
        'satisfactionSurveysOffered'     => 'SatisfactionSurveysOffered',
        'satisfactionSurveysResponded'   => 'SatisfactionSurveysResponded',
        'serviceLevel20'                 => 'ServiceLevel20',
        'totalAbandonTime'               => 'TotalAbandonTime',
        'totalAbandonedInIVRTime'        => 'TotalAbandonedInIVRTime',
        'totalAbandonedInQueueTime'      => 'TotalAbandonedInQueueTime',
        'totalAbandonedInRingTime'       => 'TotalAbandonedInRingTime',
        'totalHoldTime'                  => 'TotalHoldTime',
        'totalRingTime'                  => 'TotalRingTime',
        'totalTalkTime'                  => 'TotalTalkTime',
        'totalWaitTime'                  => 'TotalWaitTime',
        'totalWorkTime'                  => 'TotalWorkTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abandonedRate) {
            $res['AbandonedRate'] = $this->abandonedRate;
        }
        if (null !== $this->averageAbandonTime) {
            $res['AverageAbandonTime'] = $this->averageAbandonTime;
        }
        if (null !== $this->averageAbandonedInIVRTime) {
            $res['AverageAbandonedInIVRTime'] = $this->averageAbandonedInIVRTime;
        }
        if (null !== $this->averageAbandonedInQueueTime) {
            $res['AverageAbandonedInQueueTime'] = $this->averageAbandonedInQueueTime;
        }
        if (null !== $this->averageAbandonedInRingTime) {
            $res['AverageAbandonedInRingTime'] = $this->averageAbandonedInRingTime;
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
        if (null !== $this->averageWaitTime) {
            $res['AverageWaitTime'] = $this->averageWaitTime;
        }
        if (null !== $this->averageWorkTime) {
            $res['AverageWorkTime'] = $this->averageWorkTime;
        }
        if (null !== $this->callsAbandoned) {
            $res['CallsAbandoned'] = $this->callsAbandoned;
        }
        if (null !== $this->callsAbandonedInIVR) {
            $res['CallsAbandonedInIVR'] = $this->callsAbandonedInIVR;
        }
        if (null !== $this->callsAbandonedInQueue) {
            $res['CallsAbandonedInQueue'] = $this->callsAbandonedInQueue;
        }
        if (null !== $this->callsAbandonedInRing) {
            $res['CallsAbandonedInRing'] = $this->callsAbandonedInRing;
        }
        if (null !== $this->callsAbandonedInVoiceNavigator) {
            $res['CallsAbandonedInVoiceNavigator'] = $this->callsAbandonedInVoiceNavigator;
        }
        if (null !== $this->callsAttendedTransferred) {
            $res['CallsAttendedTransferred'] = $this->callsAttendedTransferred;
        }
        if (null !== $this->callsBlindTransferred) {
            $res['CallsBlindTransferred'] = $this->callsBlindTransferred;
        }
        if (null !== $this->callsForwardToOutsideNumber) {
            $res['CallsForwardToOutsideNumber'] = $this->callsForwardToOutsideNumber;
        }
        if (null !== $this->callsHandled) {
            $res['CallsHandled'] = $this->callsHandled;
        }
        if (null !== $this->callsHold) {
            $res['CallsHold'] = $this->callsHold;
        }
        if (null !== $this->callsIVRException) {
            $res['CallsIVRException'] = $this->callsIVRException;
        }
        if (null !== $this->callsOffered) {
            $res['CallsOffered'] = $this->callsOffered;
        }
        if (null !== $this->callsQueued) {
            $res['CallsQueued'] = $this->callsQueued;
        }
        if (null !== $this->callsQueuingFailed) {
            $res['CallsQueuingFailed'] = $this->callsQueuingFailed;
        }
        if (null !== $this->callsQueuingOverflow) {
            $res['CallsQueuingOverflow'] = $this->callsQueuingOverflow;
        }
        if (null !== $this->callsQueuingTimeout) {
            $res['CallsQueuingTimeout'] = $this->callsQueuingTimeout;
        }
        if (null !== $this->callsRinged) {
            $res['CallsRinged'] = $this->callsRinged;
        }
        if (null !== $this->callsVoicemail) {
            $res['CallsVoicemail'] = $this->callsVoicemail;
        }
        if (null !== $this->handleRate) {
            $res['HandleRate'] = $this->handleRate;
        }
        if (null !== $this->maxAbandonTime) {
            $res['MaxAbandonTime'] = $this->maxAbandonTime;
        }
        if (null !== $this->maxAbandonedInIVRTime) {
            $res['MaxAbandonedInIVRTime'] = $this->maxAbandonedInIVRTime;
        }
        if (null !== $this->maxAbandonedInQueueTime) {
            $res['MaxAbandonedInQueueTime'] = $this->maxAbandonedInQueueTime;
        }
        if (null !== $this->maxAbandonedInRingTime) {
            $res['MaxAbandonedInRingTime'] = $this->maxAbandonedInRingTime;
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
        if (null !== $this->maxWaitTime) {
            $res['MaxWaitTime'] = $this->maxWaitTime;
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
        if (null !== $this->serviceLevel20) {
            $res['ServiceLevel20'] = $this->serviceLevel20;
        }
        if (null !== $this->totalAbandonTime) {
            $res['TotalAbandonTime'] = $this->totalAbandonTime;
        }
        if (null !== $this->totalAbandonedInIVRTime) {
            $res['TotalAbandonedInIVRTime'] = $this->totalAbandonedInIVRTime;
        }
        if (null !== $this->totalAbandonedInQueueTime) {
            $res['TotalAbandonedInQueueTime'] = $this->totalAbandonedInQueueTime;
        }
        if (null !== $this->totalAbandonedInRingTime) {
            $res['TotalAbandonedInRingTime'] = $this->totalAbandonedInRingTime;
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
     * @return inbound
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbandonedRate'])) {
            $model->abandonedRate = $map['AbandonedRate'];
        }
        if (isset($map['AverageAbandonTime'])) {
            $model->averageAbandonTime = $map['AverageAbandonTime'];
        }
        if (isset($map['AverageAbandonedInIVRTime'])) {
            $model->averageAbandonedInIVRTime = $map['AverageAbandonedInIVRTime'];
        }
        if (isset($map['AverageAbandonedInQueueTime'])) {
            $model->averageAbandonedInQueueTime = $map['AverageAbandonedInQueueTime'];
        }
        if (isset($map['AverageAbandonedInRingTime'])) {
            $model->averageAbandonedInRingTime = $map['AverageAbandonedInRingTime'];
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
        if (isset($map['AverageWaitTime'])) {
            $model->averageWaitTime = $map['AverageWaitTime'];
        }
        if (isset($map['AverageWorkTime'])) {
            $model->averageWorkTime = $map['AverageWorkTime'];
        }
        if (isset($map['CallsAbandoned'])) {
            $model->callsAbandoned = $map['CallsAbandoned'];
        }
        if (isset($map['CallsAbandonedInIVR'])) {
            $model->callsAbandonedInIVR = $map['CallsAbandonedInIVR'];
        }
        if (isset($map['CallsAbandonedInQueue'])) {
            $model->callsAbandonedInQueue = $map['CallsAbandonedInQueue'];
        }
        if (isset($map['CallsAbandonedInRing'])) {
            $model->callsAbandonedInRing = $map['CallsAbandonedInRing'];
        }
        if (isset($map['CallsAbandonedInVoiceNavigator'])) {
            $model->callsAbandonedInVoiceNavigator = $map['CallsAbandonedInVoiceNavigator'];
        }
        if (isset($map['CallsAttendedTransferred'])) {
            $model->callsAttendedTransferred = $map['CallsAttendedTransferred'];
        }
        if (isset($map['CallsBlindTransferred'])) {
            $model->callsBlindTransferred = $map['CallsBlindTransferred'];
        }
        if (isset($map['CallsForwardToOutsideNumber'])) {
            $model->callsForwardToOutsideNumber = $map['CallsForwardToOutsideNumber'];
        }
        if (isset($map['CallsHandled'])) {
            $model->callsHandled = $map['CallsHandled'];
        }
        if (isset($map['CallsHold'])) {
            $model->callsHold = $map['CallsHold'];
        }
        if (isset($map['CallsIVRException'])) {
            $model->callsIVRException = $map['CallsIVRException'];
        }
        if (isset($map['CallsOffered'])) {
            $model->callsOffered = $map['CallsOffered'];
        }
        if (isset($map['CallsQueued'])) {
            $model->callsQueued = $map['CallsQueued'];
        }
        if (isset($map['CallsQueuingFailed'])) {
            $model->callsQueuingFailed = $map['CallsQueuingFailed'];
        }
        if (isset($map['CallsQueuingOverflow'])) {
            $model->callsQueuingOverflow = $map['CallsQueuingOverflow'];
        }
        if (isset($map['CallsQueuingTimeout'])) {
            $model->callsQueuingTimeout = $map['CallsQueuingTimeout'];
        }
        if (isset($map['CallsRinged'])) {
            $model->callsRinged = $map['CallsRinged'];
        }
        if (isset($map['CallsVoicemail'])) {
            $model->callsVoicemail = $map['CallsVoicemail'];
        }
        if (isset($map['HandleRate'])) {
            $model->handleRate = $map['HandleRate'];
        }
        if (isset($map['MaxAbandonTime'])) {
            $model->maxAbandonTime = $map['MaxAbandonTime'];
        }
        if (isset($map['MaxAbandonedInIVRTime'])) {
            $model->maxAbandonedInIVRTime = $map['MaxAbandonedInIVRTime'];
        }
        if (isset($map['MaxAbandonedInQueueTime'])) {
            $model->maxAbandonedInQueueTime = $map['MaxAbandonedInQueueTime'];
        }
        if (isset($map['MaxAbandonedInRingTime'])) {
            $model->maxAbandonedInRingTime = $map['MaxAbandonedInRingTime'];
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
        if (isset($map['MaxWaitTime'])) {
            $model->maxWaitTime = $map['MaxWaitTime'];
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
        if (isset($map['ServiceLevel20'])) {
            $model->serviceLevel20 = $map['ServiceLevel20'];
        }
        if (isset($map['TotalAbandonTime'])) {
            $model->totalAbandonTime = $map['TotalAbandonTime'];
        }
        if (isset($map['TotalAbandonedInIVRTime'])) {
            $model->totalAbandonedInIVRTime = $map['TotalAbandonedInIVRTime'];
        }
        if (isset($map['TotalAbandonedInQueueTime'])) {
            $model->totalAbandonedInQueueTime = $map['TotalAbandonedInQueueTime'];
        }
        if (isset($map['TotalAbandonedInRingTime'])) {
            $model->totalAbandonedInRingTime = $map['TotalAbandonedInRingTime'];
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
        if (isset($map['TotalWaitTime'])) {
            $model->totalWaitTime = $map['TotalWaitTime'];
        }
        if (isset($map['TotalWorkTime'])) {
            $model->totalWorkTime = $map['TotalWorkTime'];
        }

        return $model;
    }
}
