<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models\ListAttemptsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $agentEstablishedTime;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var int
     */
    public $agentRingDuration;

    /**
     * @var int
     */
    public $assignAgentTime;

    /**
     * @var string
     */
    public $attemptId;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $campaignId;

    /**
     * @var string
     */
    public $caseId;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var int
     */
    public $customerEstablishedTime;

    /**
     * @var int
     */
    public $customerReleasedTime;

    /**
     * @var int
     */
    public $dialDuration;

    /**
     * @var int
     */
    public $dialTime;

    /**
     * @var int
     */
    public $enqueueTime;

    /**
     * @var int
     */
    public $enterIvrTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ivrDuration;

    /**
     * @var int
     */
    public $queueDuration;

    /**
     * @var string
     */
    public $queueId;
    protected $_name = [
        'agentEstablishedTime'    => 'AgentEstablishedTime',
        'agentId'                 => 'AgentId',
        'agentRingDuration'       => 'AgentRingDuration',
        'assignAgentTime'         => 'AssignAgentTime',
        'attemptId'               => 'AttemptId',
        'callee'                  => 'Callee',
        'caller'                  => 'Caller',
        'campaignId'              => 'CampaignId',
        'caseId'                  => 'CaseId',
        'contactId'               => 'ContactId',
        'customerEstablishedTime' => 'CustomerEstablishedTime',
        'customerReleasedTime'    => 'CustomerReleasedTime',
        'dialDuration'            => 'DialDuration',
        'dialTime'                => 'DialTime',
        'enqueueTime'             => 'EnqueueTime',
        'enterIvrTime'            => 'EnterIvrTime',
        'instanceId'              => 'InstanceId',
        'ivrDuration'             => 'IvrDuration',
        'queueDuration'           => 'QueueDuration',
        'queueId'                 => 'QueueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentEstablishedTime) {
            $res['AgentEstablishedTime'] = $this->agentEstablishedTime;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentRingDuration) {
            $res['AgentRingDuration'] = $this->agentRingDuration;
        }
        if (null !== $this->assignAgentTime) {
            $res['AssignAgentTime'] = $this->assignAgentTime;
        }
        if (null !== $this->attemptId) {
            $res['AttemptId'] = $this->attemptId;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }
        if (null !== $this->caseId) {
            $res['CaseId'] = $this->caseId;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->customerEstablishedTime) {
            $res['CustomerEstablishedTime'] = $this->customerEstablishedTime;
        }
        if (null !== $this->customerReleasedTime) {
            $res['CustomerReleasedTime'] = $this->customerReleasedTime;
        }
        if (null !== $this->dialDuration) {
            $res['DialDuration'] = $this->dialDuration;
        }
        if (null !== $this->dialTime) {
            $res['DialTime'] = $this->dialTime;
        }
        if (null !== $this->enqueueTime) {
            $res['EnqueueTime'] = $this->enqueueTime;
        }
        if (null !== $this->enterIvrTime) {
            $res['EnterIvrTime'] = $this->enterIvrTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ivrDuration) {
            $res['IvrDuration'] = $this->ivrDuration;
        }
        if (null !== $this->queueDuration) {
            $res['QueueDuration'] = $this->queueDuration;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentEstablishedTime'])) {
            $model->agentEstablishedTime = $map['AgentEstablishedTime'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentRingDuration'])) {
            $model->agentRingDuration = $map['AgentRingDuration'];
        }
        if (isset($map['AssignAgentTime'])) {
            $model->assignAgentTime = $map['AssignAgentTime'];
        }
        if (isset($map['AttemptId'])) {
            $model->attemptId = $map['AttemptId'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }
        if (isset($map['CaseId'])) {
            $model->caseId = $map['CaseId'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['CustomerEstablishedTime'])) {
            $model->customerEstablishedTime = $map['CustomerEstablishedTime'];
        }
        if (isset($map['CustomerReleasedTime'])) {
            $model->customerReleasedTime = $map['CustomerReleasedTime'];
        }
        if (isset($map['DialDuration'])) {
            $model->dialDuration = $map['DialDuration'];
        }
        if (isset($map['DialTime'])) {
            $model->dialTime = $map['DialTime'];
        }
        if (isset($map['EnqueueTime'])) {
            $model->enqueueTime = $map['EnqueueTime'];
        }
        if (isset($map['EnterIvrTime'])) {
            $model->enterIvrTime = $map['EnterIvrTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IvrDuration'])) {
            $model->ivrDuration = $map['IvrDuration'];
        }
        if (isset($map['QueueDuration'])) {
            $model->queueDuration = $map['QueueDuration'];
        }
        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }

        return $model;
    }
}
