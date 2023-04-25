<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\agentEvents;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\customerEvents;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\ivrEvents;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\queueEvents;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var agentEvents[]
     */
    public $agentEvents;

    /**
     * @example agent1@ccc-test,agent2@ccc-test
     *
     * @var string
     */
    public $agentIds;

    /**
     * @example agent1,agent2
     *
     * @var string
     */
    public $agentNames;

    /**
     * @example 50
     *
     * @var int
     */
    public $callDuration;

    /**
     * @example 1332315****
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $calleeLocation;

    /**
     * @var string
     */
    public $callerLocation;

    /**
     * @example 0533128****
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @example Success
     *
     * @var string
     */
    public $contactDisposition;

    /**
     * @example job-10963442671187****
     *
     * @var string
     */
    public $contactId;

    /**
     * @example Outbound
     *
     * @var string
     */
    public $contactType;

    /**
     * @var customerEvents[]
     */
    public $customerEvents;

    /**
     * @example NotConnected
     *
     * @var string
     */
    public $earlyMediaState;

    /**
     * @example 1532458000000
     *
     * @var int
     */
    public $establishedTime;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var ivrEvents[]
     */
    public $ivrEvents;

    /**
     * @var queueEvents[]
     */
    public $queueEvents;

    /**
     * @example true
     *
     * @var bool
     */
    public $recordingReady;

    /**
     * @example customer
     *
     * @var string
     */
    public $releaseInitiator;

    /**
     * @example 200 - OK
     *
     * @var string
     */
    public $releaseReason;

    /**
     * @example 1532458000000
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $satisfaction;

    /**
     * @example IVR
     *
     * @var string
     */
    public $satisfactionSurveyChannel;

    /**
     * @example true
     *
     * @var bool
     */
    public $satisfactionSurveyOffered;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupIds;

    /**
     * @var string
     */
    public $skillGroupNames;

    /**
     * @example 1532458000000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'agentEvents'               => 'AgentEvents',
        'agentIds'                  => 'AgentIds',
        'agentNames'                => 'AgentNames',
        'callDuration'              => 'CallDuration',
        'calledNumber'              => 'CalledNumber',
        'calleeLocation'            => 'CalleeLocation',
        'callerLocation'            => 'CallerLocation',
        'callingNumber'             => 'CallingNumber',
        'contactDisposition'        => 'ContactDisposition',
        'contactId'                 => 'ContactId',
        'contactType'               => 'ContactType',
        'customerEvents'            => 'CustomerEvents',
        'earlyMediaState'           => 'EarlyMediaState',
        'establishedTime'           => 'EstablishedTime',
        'instanceId'                => 'InstanceId',
        'ivrEvents'                 => 'IvrEvents',
        'queueEvents'               => 'QueueEvents',
        'recordingReady'            => 'RecordingReady',
        'releaseInitiator'          => 'ReleaseInitiator',
        'releaseReason'             => 'ReleaseReason',
        'releaseTime'               => 'ReleaseTime',
        'satisfaction'              => 'Satisfaction',
        'satisfactionSurveyChannel' => 'SatisfactionSurveyChannel',
        'satisfactionSurveyOffered' => 'SatisfactionSurveyOffered',
        'skillGroupIds'             => 'SkillGroupIds',
        'skillGroupNames'           => 'SkillGroupNames',
        'startTime'                 => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentEvents) {
            $res['AgentEvents'] = [];
            if (null !== $this->agentEvents && \is_array($this->agentEvents)) {
                $n = 0;
                foreach ($this->agentEvents as $item) {
                    $res['AgentEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->agentIds) {
            $res['AgentIds'] = $this->agentIds;
        }
        if (null !== $this->agentNames) {
            $res['AgentNames'] = $this->agentNames;
        }
        if (null !== $this->callDuration) {
            $res['CallDuration'] = $this->callDuration;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->calleeLocation) {
            $res['CalleeLocation'] = $this->calleeLocation;
        }
        if (null !== $this->callerLocation) {
            $res['CallerLocation'] = $this->callerLocation;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->contactDisposition) {
            $res['ContactDisposition'] = $this->contactDisposition;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->customerEvents) {
            $res['CustomerEvents'] = [];
            if (null !== $this->customerEvents && \is_array($this->customerEvents)) {
                $n = 0;
                foreach ($this->customerEvents as $item) {
                    $res['CustomerEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->earlyMediaState) {
            $res['EarlyMediaState'] = $this->earlyMediaState;
        }
        if (null !== $this->establishedTime) {
            $res['EstablishedTime'] = $this->establishedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ivrEvents) {
            $res['IvrEvents'] = [];
            if (null !== $this->ivrEvents && \is_array($this->ivrEvents)) {
                $n = 0;
                foreach ($this->ivrEvents as $item) {
                    $res['IvrEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->queueEvents) {
            $res['QueueEvents'] = [];
            if (null !== $this->queueEvents && \is_array($this->queueEvents)) {
                $n = 0;
                foreach ($this->queueEvents as $item) {
                    $res['QueueEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->recordingReady) {
            $res['RecordingReady'] = $this->recordingReady;
        }
        if (null !== $this->releaseInitiator) {
            $res['ReleaseInitiator'] = $this->releaseInitiator;
        }
        if (null !== $this->releaseReason) {
            $res['ReleaseReason'] = $this->releaseReason;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->satisfaction) {
            $res['Satisfaction'] = $this->satisfaction;
        }
        if (null !== $this->satisfactionSurveyChannel) {
            $res['SatisfactionSurveyChannel'] = $this->satisfactionSurveyChannel;
        }
        if (null !== $this->satisfactionSurveyOffered) {
            $res['SatisfactionSurveyOffered'] = $this->satisfactionSurveyOffered;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
        }
        if (null !== $this->skillGroupNames) {
            $res['SkillGroupNames'] = $this->skillGroupNames;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AgentEvents'])) {
            if (!empty($map['AgentEvents'])) {
                $model->agentEvents = [];
                $n                  = 0;
                foreach ($map['AgentEvents'] as $item) {
                    $model->agentEvents[$n++] = null !== $item ? agentEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AgentIds'])) {
            $model->agentIds = $map['AgentIds'];
        }
        if (isset($map['AgentNames'])) {
            $model->agentNames = $map['AgentNames'];
        }
        if (isset($map['CallDuration'])) {
            $model->callDuration = $map['CallDuration'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CalleeLocation'])) {
            $model->calleeLocation = $map['CalleeLocation'];
        }
        if (isset($map['CallerLocation'])) {
            $model->callerLocation = $map['CallerLocation'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['ContactDisposition'])) {
            $model->contactDisposition = $map['ContactDisposition'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['CustomerEvents'])) {
            if (!empty($map['CustomerEvents'])) {
                $model->customerEvents = [];
                $n                     = 0;
                foreach ($map['CustomerEvents'] as $item) {
                    $model->customerEvents[$n++] = null !== $item ? customerEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EarlyMediaState'])) {
            $model->earlyMediaState = $map['EarlyMediaState'];
        }
        if (isset($map['EstablishedTime'])) {
            $model->establishedTime = $map['EstablishedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IvrEvents'])) {
            if (!empty($map['IvrEvents'])) {
                $model->ivrEvents = [];
                $n                = 0;
                foreach ($map['IvrEvents'] as $item) {
                    $model->ivrEvents[$n++] = null !== $item ? ivrEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QueueEvents'])) {
            if (!empty($map['QueueEvents'])) {
                $model->queueEvents = [];
                $n                  = 0;
                foreach ($map['QueueEvents'] as $item) {
                    $model->queueEvents[$n++] = null !== $item ? queueEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RecordingReady'])) {
            $model->recordingReady = $map['RecordingReady'];
        }
        if (isset($map['ReleaseInitiator'])) {
            $model->releaseInitiator = $map['ReleaseInitiator'];
        }
        if (isset($map['ReleaseReason'])) {
            $model->releaseReason = $map['ReleaseReason'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['Satisfaction'])) {
            $model->satisfaction = $map['Satisfaction'];
        }
        if (isset($map['SatisfactionSurveyChannel'])) {
            $model->satisfactionSurveyChannel = $map['SatisfactionSurveyChannel'];
        }
        if (isset($map['SatisfactionSurveyOffered'])) {
            $model->satisfactionSurveyOffered = $map['SatisfactionSurveyOffered'];
        }
        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = $map['SkillGroupIds'];
        }
        if (isset($map['SkillGroupNames'])) {
            $model->skillGroupNames = $map['SkillGroupNames'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
