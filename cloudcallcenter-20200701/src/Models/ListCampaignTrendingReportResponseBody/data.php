<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListCampaignTrendingReportResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $breakAgents;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var int
     */
    public $datetime;

    /**
     * @var int
     */
    public $loggedInAgents;

    /**
     * @var string
     */
    public $outboundScenarioBreakingAgents;

    /**
     * @var string
     */
    public $outboundScenarioReadyAgents;

    /**
     * @var string
     */
    public $outboundScenarioTalkingAgents;

    /**
     * @var string
     */
    public $outboundScenarioWorkingAgents;

    /**
     * @var int
     */
    public $readyAgents;

    /**
     * @var int
     */
    public $talkAgents;

    /**
     * @var int
     */
    public $workAgents;
    protected $_name = [
        'breakAgents'                    => 'BreakAgents',
        'concurrency'                    => 'Concurrency',
        'datetime'                       => 'Datetime',
        'loggedInAgents'                 => 'LoggedInAgents',
        'outboundScenarioBreakingAgents' => 'OutboundScenarioBreakingAgents',
        'outboundScenarioReadyAgents'    => 'OutboundScenarioReadyAgents',
        'outboundScenarioTalkingAgents'  => 'OutboundScenarioTalkingAgents',
        'outboundScenarioWorkingAgents'  => 'OutboundScenarioWorkingAgents',
        'readyAgents'                    => 'ReadyAgents',
        'talkAgents'                     => 'TalkAgents',
        'workAgents'                     => 'WorkAgents',
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
        if (null !== $this->talkAgents) {
            $res['TalkAgents'] = $this->talkAgents;
        }
        if (null !== $this->workAgents) {
            $res['WorkAgents'] = $this->workAgents;
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
        if (isset($map['TalkAgents'])) {
            $model->talkAgents = $map['TalkAgents'];
        }
        if (isset($map['WorkAgents'])) {
            $model->workAgents = $map['WorkAgents'];
        }

        return $model;
    }
}
