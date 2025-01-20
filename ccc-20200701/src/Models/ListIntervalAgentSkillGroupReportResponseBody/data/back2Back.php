<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListIntervalAgentSkillGroupReportResponseBody\data;

use AlibabaCloud\Dara\Model;

class back2Back extends Model
{
    /**
     * @var float
     */
    public $agentAnswerRate;
    /**
     * @var float
     */
    public $agentHandleRate;
    /**
     * @var float
     */
    public $answerRate;
    /**
     * @var float
     */
    public $averageCustomerRingTime;
    /**
     * @var float
     */
    public $averageRingTime;
    /**
     * @var int
     */
    public $averageTalkTime;
    /**
     * @var int
     */
    public $callsAgentHandled;
    /**
     * @var int
     */
    public $callsAnswered;
    /**
     * @var int
     */
    public $callsCustomerAnswered;
    /**
     * @var int
     */
    public $callsCustomerHandled;
    /**
     * @var int
     */
    public $callsDialed;
    /**
     * @var float
     */
    public $customerAnswerRate;
    /**
     * @var float
     */
    public $customerHandleRate;
    /**
     * @var int
     */
    public $maxCustomerRingTime;
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
    public $totalCustomerRingTime;
    /**
     * @var int
     */
    public $totalRingTime;
    /**
     * @var int
     */
    public $totalTalkTime;
    protected $_name = [
        'agentAnswerRate'         => 'AgentAnswerRate',
        'agentHandleRate'         => 'AgentHandleRate',
        'answerRate'              => 'AnswerRate',
        'averageCustomerRingTime' => 'AverageCustomerRingTime',
        'averageRingTime'         => 'AverageRingTime',
        'averageTalkTime'         => 'AverageTalkTime',
        'callsAgentHandled'       => 'CallsAgentHandled',
        'callsAnswered'           => 'CallsAnswered',
        'callsCustomerAnswered'   => 'CallsCustomerAnswered',
        'callsCustomerHandled'    => 'CallsCustomerHandled',
        'callsDialed'             => 'CallsDialed',
        'customerAnswerRate'      => 'CustomerAnswerRate',
        'customerHandleRate'      => 'CustomerHandleRate',
        'maxCustomerRingTime'     => 'MaxCustomerRingTime',
        'maxRingTime'             => 'MaxRingTime',
        'maxTalkTime'             => 'MaxTalkTime',
        'totalCustomerRingTime'   => 'TotalCustomerRingTime',
        'totalRingTime'           => 'TotalRingTime',
        'totalTalkTime'           => 'TotalTalkTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentAnswerRate) {
            $res['AgentAnswerRate'] = $this->agentAnswerRate;
        }

        if (null !== $this->agentHandleRate) {
            $res['AgentHandleRate'] = $this->agentHandleRate;
        }

        if (null !== $this->answerRate) {
            $res['AnswerRate'] = $this->answerRate;
        }

        if (null !== $this->averageCustomerRingTime) {
            $res['AverageCustomerRingTime'] = $this->averageCustomerRingTime;
        }

        if (null !== $this->averageRingTime) {
            $res['AverageRingTime'] = $this->averageRingTime;
        }

        if (null !== $this->averageTalkTime) {
            $res['AverageTalkTime'] = $this->averageTalkTime;
        }

        if (null !== $this->callsAgentHandled) {
            $res['CallsAgentHandled'] = $this->callsAgentHandled;
        }

        if (null !== $this->callsAnswered) {
            $res['CallsAnswered'] = $this->callsAnswered;
        }

        if (null !== $this->callsCustomerAnswered) {
            $res['CallsCustomerAnswered'] = $this->callsCustomerAnswered;
        }

        if (null !== $this->callsCustomerHandled) {
            $res['CallsCustomerHandled'] = $this->callsCustomerHandled;
        }

        if (null !== $this->callsDialed) {
            $res['CallsDialed'] = $this->callsDialed;
        }

        if (null !== $this->customerAnswerRate) {
            $res['CustomerAnswerRate'] = $this->customerAnswerRate;
        }

        if (null !== $this->customerHandleRate) {
            $res['CustomerHandleRate'] = $this->customerHandleRate;
        }

        if (null !== $this->maxCustomerRingTime) {
            $res['MaxCustomerRingTime'] = $this->maxCustomerRingTime;
        }

        if (null !== $this->maxRingTime) {
            $res['MaxRingTime'] = $this->maxRingTime;
        }

        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
        }

        if (null !== $this->totalCustomerRingTime) {
            $res['TotalCustomerRingTime'] = $this->totalCustomerRingTime;
        }

        if (null !== $this->totalRingTime) {
            $res['TotalRingTime'] = $this->totalRingTime;
        }

        if (null !== $this->totalTalkTime) {
            $res['TotalTalkTime'] = $this->totalTalkTime;
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
        if (isset($map['AgentAnswerRate'])) {
            $model->agentAnswerRate = $map['AgentAnswerRate'];
        }

        if (isset($map['AgentHandleRate'])) {
            $model->agentHandleRate = $map['AgentHandleRate'];
        }

        if (isset($map['AnswerRate'])) {
            $model->answerRate = $map['AnswerRate'];
        }

        if (isset($map['AverageCustomerRingTime'])) {
            $model->averageCustomerRingTime = $map['AverageCustomerRingTime'];
        }

        if (isset($map['AverageRingTime'])) {
            $model->averageRingTime = $map['AverageRingTime'];
        }

        if (isset($map['AverageTalkTime'])) {
            $model->averageTalkTime = $map['AverageTalkTime'];
        }

        if (isset($map['CallsAgentHandled'])) {
            $model->callsAgentHandled = $map['CallsAgentHandled'];
        }

        if (isset($map['CallsAnswered'])) {
            $model->callsAnswered = $map['CallsAnswered'];
        }

        if (isset($map['CallsCustomerAnswered'])) {
            $model->callsCustomerAnswered = $map['CallsCustomerAnswered'];
        }

        if (isset($map['CallsCustomerHandled'])) {
            $model->callsCustomerHandled = $map['CallsCustomerHandled'];
        }

        if (isset($map['CallsDialed'])) {
            $model->callsDialed = $map['CallsDialed'];
        }

        if (isset($map['CustomerAnswerRate'])) {
            $model->customerAnswerRate = $map['CustomerAnswerRate'];
        }

        if (isset($map['CustomerHandleRate'])) {
            $model->customerHandleRate = $map['CustomerHandleRate'];
        }

        if (isset($map['MaxCustomerRingTime'])) {
            $model->maxCustomerRingTime = $map['MaxCustomerRingTime'];
        }

        if (isset($map['MaxRingTime'])) {
            $model->maxRingTime = $map['MaxRingTime'];
        }

        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }

        if (isset($map['TotalCustomerRingTime'])) {
            $model->totalCustomerRingTime = $map['TotalCustomerRingTime'];
        }

        if (isset($map['TotalRingTime'])) {
            $model->totalRingTime = $map['TotalRingTime'];
        }

        if (isset($map['TotalTalkTime'])) {
            $model->totalTalkTime = $map['TotalTalkTime'];
        }

        return $model;
    }
}
