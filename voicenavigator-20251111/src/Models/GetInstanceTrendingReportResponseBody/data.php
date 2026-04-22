<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\GetInstanceTrendingReportResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $callsHandled;

    /**
     * @var int
     */
    public $callsOffered;

    /**
     * @var int
     */
    public $callsRejected;

    /**
     * @var int
     */
    public $callsResolved;

    /**
     * @var int
     */
    public $configuredConcurrency;

    /**
     * @var string
     */
    public $labelBreakdown;

    /**
     * @var int
     */
    public $maxTalkTime;

    /**
     * @var string
     */
    public $rejectionBreakdown;

    /**
     * @var string
     */
    public $releaseReasonBreakdown;

    /**
     * @var int
     */
    public $statsTime;

    /**
     * @var string
     */
    public $talkTurnsDistribution;

    /**
     * @var int
     */
    public $totalInputTokens;

    /**
     * @var int
     */
    public $totalOutputTokens;

    /**
     * @var int
     */
    public $totalTalkTime;

    /**
     * @var int
     */
    public $totalTokens;

    /**
     * @var int
     */
    public $usedConcurrency;
    protected $_name = [
        'callsHandled' => 'CallsHandled',
        'callsOffered' => 'CallsOffered',
        'callsRejected' => 'CallsRejected',
        'callsResolved' => 'CallsResolved',
        'configuredConcurrency' => 'ConfiguredConcurrency',
        'labelBreakdown' => 'LabelBreakdown',
        'maxTalkTime' => 'MaxTalkTime',
        'rejectionBreakdown' => 'RejectionBreakdown',
        'releaseReasonBreakdown' => 'ReleaseReasonBreakdown',
        'statsTime' => 'StatsTime',
        'talkTurnsDistribution' => 'TalkTurnsDistribution',
        'totalInputTokens' => 'TotalInputTokens',
        'totalOutputTokens' => 'TotalOutputTokens',
        'totalTalkTime' => 'TotalTalkTime',
        'totalTokens' => 'TotalTokens',
        'usedConcurrency' => 'UsedConcurrency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callsHandled) {
            $res['CallsHandled'] = $this->callsHandled;
        }

        if (null !== $this->callsOffered) {
            $res['CallsOffered'] = $this->callsOffered;
        }

        if (null !== $this->callsRejected) {
            $res['CallsRejected'] = $this->callsRejected;
        }

        if (null !== $this->callsResolved) {
            $res['CallsResolved'] = $this->callsResolved;
        }

        if (null !== $this->configuredConcurrency) {
            $res['ConfiguredConcurrency'] = $this->configuredConcurrency;
        }

        if (null !== $this->labelBreakdown) {
            $res['LabelBreakdown'] = $this->labelBreakdown;
        }

        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }

        if (null !== $this->rejectionBreakdown) {
            $res['RejectionBreakdown'] = $this->rejectionBreakdown;
        }

        if (null !== $this->releaseReasonBreakdown) {
            $res['ReleaseReasonBreakdown'] = $this->releaseReasonBreakdown;
        }

        if (null !== $this->statsTime) {
            $res['StatsTime'] = $this->statsTime;
        }

        if (null !== $this->talkTurnsDistribution) {
            $res['TalkTurnsDistribution'] = $this->talkTurnsDistribution;
        }

        if (null !== $this->totalInputTokens) {
            $res['TotalInputTokens'] = $this->totalInputTokens;
        }

        if (null !== $this->totalOutputTokens) {
            $res['TotalOutputTokens'] = $this->totalOutputTokens;
        }

        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
        }

        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
        }

        if (null !== $this->usedConcurrency) {
            $res['UsedConcurrency'] = $this->usedConcurrency;
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
        if (isset($map['CallsHandled'])) {
            $model->callsHandled = $map['CallsHandled'];
        }

        if (isset($map['CallsOffered'])) {
            $model->callsOffered = $map['CallsOffered'];
        }

        if (isset($map['CallsRejected'])) {
            $model->callsRejected = $map['CallsRejected'];
        }

        if (isset($map['CallsResolved'])) {
            $model->callsResolved = $map['CallsResolved'];
        }

        if (isset($map['ConfiguredConcurrency'])) {
            $model->configuredConcurrency = $map['ConfiguredConcurrency'];
        }

        if (isset($map['LabelBreakdown'])) {
            $model->labelBreakdown = $map['LabelBreakdown'];
        }

        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }

        if (isset($map['RejectionBreakdown'])) {
            $model->rejectionBreakdown = $map['RejectionBreakdown'];
        }

        if (isset($map['ReleaseReasonBreakdown'])) {
            $model->releaseReasonBreakdown = $map['ReleaseReasonBreakdown'];
        }

        if (isset($map['StatsTime'])) {
            $model->statsTime = $map['StatsTime'];
        }

        if (isset($map['TalkTurnsDistribution'])) {
            $model->talkTurnsDistribution = $map['TalkTurnsDistribution'];
        }

        if (isset($map['TotalInputTokens'])) {
            $model->totalInputTokens = $map['TotalInputTokens'];
        }

        if (isset($map['TotalOutputTokens'])) {
            $model->totalOutputTokens = $map['TotalOutputTokens'];
        }

        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        if (isset($map['UsedConcurrency'])) {
            $model->usedConcurrency = $map['UsedConcurrency'];
        }

        return $model;
    }
}
