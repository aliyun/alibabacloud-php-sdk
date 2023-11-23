<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCampaignTrendingReportResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $breakAgents;

    /**
     * @var int
     */
    public $breakingAgents;

    /**
     * @example 1
     *
     * @var int
     */
    public $concurrency;

    /**
     * @example 1634037840000
     *
     * @var int
     */
    public $datetime;

    /**
     * @example 2
     *
     * @var int
     */
    public $loggedInAgents;

    /**
     * @var int
     */
    public $outboundScenarioBreakingAgents;

    /**
     * @var int
     */
    public $outboundScenarioReadyAgents;

    /**
     * @var int
     */
    public $outboundScenarioTalkingAgents;

    /**
     * @var int
     */
    public $outboundScenarioWorkingAgents;

    /**
     * @example 2
     *
     * @var int
     */
    public $readyAgents;

    /**
     * @var int
     */
    public $statsTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $talkAgents;

    /**
     * @var int
     */
    public $talkingAgents;

    /**
     * @example 0
     *
     * @var int
     */
    public $workAgents;

    /**
     * @var int
     */
    public $workingAgents;
    protected $_name = [
        'breakAgents'                    => 'BreakAgents',
        'breakingAgents'                 => 'BreakingAgents',
        'concurrency'                    => 'Concurrency',
        'datetime'                       => 'Datetime',
        'loggedInAgents'                 => 'LoggedInAgents',
        'outboundScenarioBreakingAgents' => 'OutboundScenarioBreakingAgents',
        'outboundScenarioReadyAgents'    => 'OutboundScenarioReadyAgents',
        'outboundScenarioTalkingAgents'  => 'OutboundScenarioTalkingAgents',
        'outboundScenarioWorkingAgents'  => 'OutboundScenarioWorkingAgents',
        'readyAgents'                    => 'ReadyAgents',
        'statsTime'                      => 'StatsTime',
        'talkAgents'                     => 'TalkAgents',
        'talkingAgents'                  => 'TalkingAgents',
        'workAgents'                     => 'WorkAgents',
        'workingAgents'                  => 'WorkingAgents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->breakAgents) {
            $res['BreakAgents'] = $this->breakAgents;
        }
        if (null !== $this->breakingAgents) {
            $res['BreakingAgents'] = $this->breakingAgents;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->datetime) {
            $res['Datetime'] = $this->datetime;
        }
        if (null !== $this->loggedInAgents) {
            $res['LoggedInAgents'] = $this->loggedInAgents;
        }
        if (null !== $this->outboundScenarioBreakingAgents) {
            $res['OutboundScenarioBreakingAgents'] = $this->outboundScenarioBreakingAgents;
        }
        if (null !== $this->outboundScenarioReadyAgents) {
            $res['OutboundScenarioReadyAgents'] = $this->outboundScenarioReadyAgents;
        }
        if (null !== $this->outboundScenarioTalkingAgents) {
            $res['OutboundScenarioTalkingAgents'] = $this->outboundScenarioTalkingAgents;
        }
        if (null !== $this->outboundScenarioWorkingAgents) {
            $res['OutboundScenarioWorkingAgents'] = $this->outboundScenarioWorkingAgents;
        }
        if (null !== $this->readyAgents) {
            $res['ReadyAgents'] = $this->readyAgents;
        }
        if (null !== $this->statsTime) {
            $res['StatsTime'] = $this->statsTime;
        }
        if (null !== $this->talkAgents) {
            $res['TalkAgents'] = $this->talkAgents;
        }
        if (null !== $this->talkingAgents) {
            $res['TalkingAgents'] = $this->talkingAgents;
        }
        if (null !== $this->workAgents) {
            $res['WorkAgents'] = $this->workAgents;
        }
        if (null !== $this->workingAgents) {
            $res['WorkingAgents'] = $this->workingAgents;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BreakAgents'])) {
            $model->breakAgents = $map['BreakAgents'];
        }
        if (isset($map['BreakingAgents'])) {
            $model->breakingAgents = $map['BreakingAgents'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['Datetime'])) {
            $model->datetime = $map['Datetime'];
        }
        if (isset($map['LoggedInAgents'])) {
            $model->loggedInAgents = $map['LoggedInAgents'];
        }
        if (isset($map['OutboundScenarioBreakingAgents'])) {
            $model->outboundScenarioBreakingAgents = $map['OutboundScenarioBreakingAgents'];
        }
        if (isset($map['OutboundScenarioReadyAgents'])) {
            $model->outboundScenarioReadyAgents = $map['OutboundScenarioReadyAgents'];
        }
        if (isset($map['OutboundScenarioTalkingAgents'])) {
            $model->outboundScenarioTalkingAgents = $map['OutboundScenarioTalkingAgents'];
        }
        if (isset($map['OutboundScenarioWorkingAgents'])) {
            $model->outboundScenarioWorkingAgents = $map['OutboundScenarioWorkingAgents'];
        }
        if (isset($map['ReadyAgents'])) {
            $model->readyAgents = $map['ReadyAgents'];
        }
        if (isset($map['StatsTime'])) {
            $model->statsTime = $map['StatsTime'];
        }
        if (isset($map['TalkAgents'])) {
            $model->talkAgents = $map['TalkAgents'];
        }
        if (isset($map['TalkingAgents'])) {
            $model->talkingAgents = $map['TalkingAgents'];
        }
        if (isset($map['WorkAgents'])) {
            $model->workAgents = $map['WorkAgents'];
        }
        if (isset($map['WorkingAgents'])) {
            $model->workingAgents = $map['WorkingAgents'];
        }

        return $model;
    }
}
