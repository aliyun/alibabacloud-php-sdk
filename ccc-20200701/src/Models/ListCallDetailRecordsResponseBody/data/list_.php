<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $contactDisposition;

    /**
     * @var string
     */
    public $contactType;

    /**
     * @var int
     */
    public $establishedTime;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $additionalBroker;

    /**
     * @var int
     */
    public $satisfactionIndex;

    /**
     * @var string
     */
    public $satisfactionSurveyChannel;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var int
     */
    public $waitTime;

    /**
     * @var string
     */
    public $skillGroupNames;

    /**
     * @var int
     */
    public $ivrTime;

    /**
     * @var string
     */
    public $satisfactionDescription;

    /**
     * @var string
     */
    public $releaseInitiator;

    /**
     * @var string
     */
    public $agentIds;

    /**
     * @var string
     */
    public $callDuration;

    /**
     * @var bool
     */
    public $recordingReady;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ringTime;

    /**
     * @var bool
     */
    public $satisfactionSurveyOffered;

    /**
     * @var string
     */
    public $agentNames;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var int
     */
    public $recordingDuration;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var int
     */
    public $queueTime;

    /**
     * @var string
     */
    public $broker;

    /**
     * @var string
     */
    public $skillGroupIds;

    /**
     * @var string
     */
    public $callerLocation;

    /**
     * @var string
     */
    public $calleeLocation;
    protected $_name = [
        'contactDisposition'        => 'ContactDisposition',
        'contactType'               => 'ContactType',
        'establishedTime'           => 'EstablishedTime',
        'calledNumber'              => 'CalledNumber',
        'additionalBroker'          => 'AdditionalBroker',
        'satisfactionIndex'         => 'SatisfactionIndex',
        'satisfactionSurveyChannel' => 'SatisfactionSurveyChannel',
        'releaseTime'               => 'ReleaseTime',
        'waitTime'                  => 'WaitTime',
        'skillGroupNames'           => 'SkillGroupNames',
        'ivrTime'                   => 'IvrTime',
        'satisfactionDescription'   => 'SatisfactionDescription',
        'releaseInitiator'          => 'ReleaseInitiator',
        'agentIds'                  => 'AgentIds',
        'callDuration'              => 'CallDuration',
        'recordingReady'            => 'RecordingReady',
        'instanceId'                => 'InstanceId',
        'ringTime'                  => 'RingTime',
        'satisfactionSurveyOffered' => 'SatisfactionSurveyOffered',
        'agentNames'                => 'AgentNames',
        'startTime'                 => 'StartTime',
        'contactId'                 => 'ContactId',
        'recordingDuration'         => 'RecordingDuration',
        'callingNumber'             => 'CallingNumber',
        'queueTime'                 => 'QueueTime',
        'broker'                    => 'Broker',
        'skillGroupIds'             => 'SkillGroupIds',
        'callerLocation'            => 'CallerLocation',
        'calleeLocation'            => 'CalleeLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactDisposition) {
            $res['ContactDisposition'] = $this->contactDisposition;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->establishedTime) {
            $res['EstablishedTime'] = $this->establishedTime;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->additionalBroker) {
            $res['AdditionalBroker'] = $this->additionalBroker;
        }
        if (null !== $this->satisfactionIndex) {
            $res['SatisfactionIndex'] = $this->satisfactionIndex;
        }
        if (null !== $this->satisfactionSurveyChannel) {
            $res['SatisfactionSurveyChannel'] = $this->satisfactionSurveyChannel;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->waitTime) {
            $res['WaitTime'] = $this->waitTime;
        }
        if (null !== $this->skillGroupNames) {
            $res['SkillGroupNames'] = $this->skillGroupNames;
        }
        if (null !== $this->ivrTime) {
            $res['IvrTime'] = $this->ivrTime;
        }
        if (null !== $this->satisfactionDescription) {
            $res['SatisfactionDescription'] = $this->satisfactionDescription;
        }
        if (null !== $this->releaseInitiator) {
            $res['ReleaseInitiator'] = $this->releaseInitiator;
        }
        if (null !== $this->agentIds) {
            $res['AgentIds'] = $this->agentIds;
        }
        if (null !== $this->callDuration) {
            $res['CallDuration'] = $this->callDuration;
        }
        if (null !== $this->recordingReady) {
            $res['RecordingReady'] = $this->recordingReady;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ringTime) {
            $res['RingTime'] = $this->ringTime;
        }
        if (null !== $this->satisfactionSurveyOffered) {
            $res['SatisfactionSurveyOffered'] = $this->satisfactionSurveyOffered;
        }
        if (null !== $this->agentNames) {
            $res['AgentNames'] = $this->agentNames;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->recordingDuration) {
            $res['RecordingDuration'] = $this->recordingDuration;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }
        if (null !== $this->broker) {
            $res['Broker'] = $this->broker;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
        }
        if (null !== $this->callerLocation) {
            $res['CallerLocation'] = $this->callerLocation;
        }
        if (null !== $this->calleeLocation) {
            $res['CalleeLocation'] = $this->calleeLocation;
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
        if (isset($map['ContactDisposition'])) {
            $model->contactDisposition = $map['ContactDisposition'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['EstablishedTime'])) {
            $model->establishedTime = $map['EstablishedTime'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['AdditionalBroker'])) {
            $model->additionalBroker = $map['AdditionalBroker'];
        }
        if (isset($map['SatisfactionIndex'])) {
            $model->satisfactionIndex = $map['SatisfactionIndex'];
        }
        if (isset($map['SatisfactionSurveyChannel'])) {
            $model->satisfactionSurveyChannel = $map['SatisfactionSurveyChannel'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['WaitTime'])) {
            $model->waitTime = $map['WaitTime'];
        }
        if (isset($map['SkillGroupNames'])) {
            $model->skillGroupNames = $map['SkillGroupNames'];
        }
        if (isset($map['IvrTime'])) {
            $model->ivrTime = $map['IvrTime'];
        }
        if (isset($map['SatisfactionDescription'])) {
            $model->satisfactionDescription = $map['SatisfactionDescription'];
        }
        if (isset($map['ReleaseInitiator'])) {
            $model->releaseInitiator = $map['ReleaseInitiator'];
        }
        if (isset($map['AgentIds'])) {
            $model->agentIds = $map['AgentIds'];
        }
        if (isset($map['CallDuration'])) {
            $model->callDuration = $map['CallDuration'];
        }
        if (isset($map['RecordingReady'])) {
            $model->recordingReady = $map['RecordingReady'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RingTime'])) {
            $model->ringTime = $map['RingTime'];
        }
        if (isset($map['SatisfactionSurveyOffered'])) {
            $model->satisfactionSurveyOffered = $map['SatisfactionSurveyOffered'];
        }
        if (isset($map['AgentNames'])) {
            $model->agentNames = $map['AgentNames'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['RecordingDuration'])) {
            $model->recordingDuration = $map['RecordingDuration'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }
        if (isset($map['Broker'])) {
            $model->broker = $map['Broker'];
        }
        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = $map['SkillGroupIds'];
        }
        if (isset($map['CallerLocation'])) {
            $model->callerLocation = $map['CallerLocation'];
        }
        if (isset($map['CalleeLocation'])) {
            $model->calleeLocation = $map['CalleeLocation'];
        }

        return $model;
    }
}
