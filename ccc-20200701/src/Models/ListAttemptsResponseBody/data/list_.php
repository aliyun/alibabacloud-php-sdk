<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListAttemptsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1632883592732
     *
     * @var int
     */
    public $agentEstablishedTime;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $agentId;

    /**
     * @example 23
     *
     * @var int
     */
    public $agentRingDuration;

    /**
     * @example 1634196287869
     *
     * @var int
     */
    public $assignAgentTime;

    /**
     * @example job-1704342174816****
     *
     * @var string
     */
    public $attemptId;

    /**
     * @example 1888888****
     *
     * @var string
     */
    public $callee;

    /**
     * @example 05711234****
     *
     * @var string
     */
    public $caller;

    /**
     * @example 083046e3-5822-4cda-9b84-04f2a02eb605
     *
     * @var string
     */
    public $campaignId;

    /**
     * @example 21d194a7-60b7-4824-932b-48ed03a83704
     *
     * @var string
     */
    public $caseId;

    /**
     * @example job-1704342174816****
     *
     * @var string
     */
    public $contactId;

    /**
     * @example 1634196286708
     *
     * @var int
     */
    public $customerEstablishedTime;

    /**
     * @example 1634196317888
     *
     * @var int
     */
    public $customerReleasedTime;

    /**
     * @example 2734
     *
     * @var int
     */
    public $dialDuration;

    /**
     * @example 1634196283974
     *
     * @var int
     */
    public $dialTime;

    /**
     * @example 1634196287789
     *
     * @var int
     */
    public $enqueueTime;

    /**
     * @example 1634196286740
     *
     * @var int
     */
    public $enterIvrTime;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1049
     *
     * @var int
     */
    public $ivrDuration;

    /**
     * @example 80
     *
     * @var int
     */
    public $queueDuration;

    /**
     * @example skillgroup@ccc-test
     *
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
