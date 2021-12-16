<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalInstanceReportResponseBody\data;

use AlibabaCloud\Tea\Model;

class inbound extends Model
{
    /**
     * @var float
     */
    public $abandonedRate;

    /**
     * @var float
     */
    public $averageAbandonTime;

    /**
     * @var float
     */
    public $averageAbandonedInIVRTime;

    /**
     * @var float
     */
    public $averageAbandonedInQueueTime;

    /**
     * @var float
     */
    public $averageAbandonedInRingTime;

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
    public $averageWaitTime;

    /**
     * @var float
     */
    public $averageWorkTime;

    /**
     * @var int
     */
    public $callsAbandoned;

    /**
     * @var int
     */
    public $callsAbandonedInIVR;

    /**
     * @var int
     */
    public $callsAbandonedInQueue;

    /**
     * @var int
     */
    public $callsAbandonedInRing;

    /**
     * @var int
     */
    public $callsAbandonedInVoiceNavigator;

    /**
     * @var int
     */
    public $callsAttendedTransferred;

    /**
     * @var int
     */
    public $callsBlindTransferred;

    /**
     * @var int
     */
    public $callsForwardToOutsideNumber;

    /**
     * @var int
     */
    public $callsHandled;

    /**
     * @var int
     */
    public $callsHold;

    /**
     * @var int
     */
    public $callsIVRException;

    /**
     * @var int
     */
    public $callsOffered;

    /**
     * @var int
     */
    public $callsQueued;

    /**
     * @var int
     */
    public $callsQueuingFailed;

    /**
     * @var int
     */
    public $callsQueuingOverflow;

    /**
     * @var int
     */
    public $callsQueuingTimeout;

    /**
     * @var int
     */
    public $callsRinged;

    /**
     * @var int
     */
    public $callsVoicemail;

    /**
     * @var float
     */
    public $handleRate;

    /**
     * @var int
     */
    public $maxAbandonTime;

    /**
     * @var int
     */
    public $maxAbandonedInIVRTime;

    /**
     * @var int
     */
    public $maxAbandonedInQueueTime;

    /**
     * @var int
     */
    public $maxAbandonedInRingTime;

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
    public $maxWaitTime;

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
     * @var float
     */
    public $serviceLevel20;

    /**
     * @var int
     */
    public $totalAbandonTime;

    /**
     * @var int
     */
    public $totalAbandonedInIVRTime;

    /**
     * @var int
     */
    public $totalAbandonedInQueueTime;

    /**
     * @var int
     */
    public $totalAbandonedInRingTime;

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
    public $totalWaitTime;

    /**
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
