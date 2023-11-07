<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetRealtimeCampaignStatsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $breakingAgents;

    /**
     * @example 5
     *
     * @var int
     */
    public $caps;

    /**
     * @example 10
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
     * @example 3
     *
     * @var int
     */
    public $readyAgents;

    /**
     * @example 4
     *
     * @var int
     */
    public $talkingAgents;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalAgents;

    /**
     * @example 2
     *
     * @var int
     */
    public $workingAgents;
    protected $_name = [
        'breakingAgents'                 => 'BreakingAgents',
        'caps'                           => 'Caps',
        'loggedInAgents'                 => 'LoggedInAgents',
        'outboundScenarioBreakingAgents' => 'OutboundScenarioBreakingAgents',
        'outboundScenarioReadyAgents'    => 'OutboundScenarioReadyAgents',
        'outboundScenarioTalkingAgents'  => 'OutboundScenarioTalkingAgents',
        'outboundScenarioWorkingAgents'  => 'OutboundScenarioWorkingAgents',
        'readyAgents'                    => 'ReadyAgents',
        'talkingAgents'                  => 'TalkingAgents',
        'totalAgents'                    => 'TotalAgents',
        'workingAgents'                  => 'WorkingAgents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->breakingAgents) {
            $res['BreakingAgents'] = $this->breakingAgents;
        }
        if (null !== $this->caps) {
            $res['Caps'] = $this->caps;
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
        if (null !== $this->talkingAgents) {
            $res['TalkingAgents'] = $this->talkingAgents;
        }
        if (null !== $this->totalAgents) {
            $res['TotalAgents'] = $this->totalAgents;
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
        if (isset($map['BreakingAgents'])) {
            $model->breakingAgents = $map['BreakingAgents'];
        }
        if (isset($map['Caps'])) {
            $model->caps = $map['Caps'];
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
        if (isset($map['TalkingAgents'])) {
            $model->talkingAgents = $map['TalkingAgents'];
        }
        if (isset($map['TotalAgents'])) {
            $model->totalAgents = $map['TotalAgents'];
        }
        if (isset($map['WorkingAgents'])) {
            $model->workingAgents = $map['WorkingAgents'];
        }

        return $model;
    }
}
