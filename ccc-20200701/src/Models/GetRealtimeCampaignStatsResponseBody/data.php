<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetRealtimeCampaignStatsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $breakingAgents;

    /**
     * @var int
     */
    public $caps;

    /**
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
     * @var int
     */
    public $readyAgents;

    /**
     * @var int
     */
    public $talkingAgents;

    /**
     * @var int
     */
    public $totalAgents;

    /**
     * @var int
     */
    public $workingAgents;
    protected $_name = [
        'breakingAgents' => 'BreakingAgents',
        'caps' => 'Caps',
        'loggedInAgents' => 'LoggedInAgents',
        'outboundScenarioBreakingAgents' => 'OutboundScenarioBreakingAgents',
        'outboundScenarioReadyAgents' => 'OutboundScenarioReadyAgents',
        'outboundScenarioTalkingAgents' => 'OutboundScenarioTalkingAgents',
        'outboundScenarioWorkingAgents' => 'OutboundScenarioWorkingAgents',
        'readyAgents' => 'ReadyAgents',
        'talkingAgents' => 'TalkingAgents',
        'totalAgents' => 'TotalAgents',
        'workingAgents' => 'WorkingAgents',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
