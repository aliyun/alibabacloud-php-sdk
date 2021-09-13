<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\agentEvents;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\ivrEvents;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\queueEvents;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $releaseInitiator;

    /**
     * @var string
     */
    public $contactDisposition;

    /**
     * @var string
     */
    public $contactType;

    /**
     * @var string
     */
    public $agentIds;

    /**
     * @var int
     */
    public $callDuration;

    /**
     * @var bool
     */
    public $recordingReady;

    /**
     * @var int
     */
    public $establishedTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $satisfactionSurveyOffered;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $agentNames;

    /**
     * @var int
     */
    public $satisfaction;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $satisfactionSurveyChannel;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $skillGroupNames;

    /**
     * @var string
     */
    public $skillGroupIds;

    /**
     * @var agentEvents[]
     */
    public $agentEvents;

    /**
     * @var ivrEvents[]
     */
    public $ivrEvents;

    /**
     * @var queueEvents[]
     */
    public $queueEvents;

    /**
     * @var string
     */
    public $callerLocation;

    /**
     * @var string
     */
    public $calleeLocation;
    protected $_name = [
        'releaseInitiator'          => 'ReleaseInitiator',
        'contactDisposition'        => 'ContactDisposition',
        'contactType'               => 'ContactType',
        'agentIds'                  => 'AgentIds',
        'callDuration'              => 'CallDuration',
        'recordingReady'            => 'RecordingReady',
        'establishedTime'           => 'EstablishedTime',
        'instanceId'                => 'InstanceId',
        'satisfactionSurveyOffered' => 'SatisfactionSurveyOffered',
        'calledNumber'              => 'CalledNumber',
        'agentNames'                => 'AgentNames',
        'satisfaction'              => 'Satisfaction',
        'startTime'                 => 'StartTime',
        'contactId'                 => 'ContactId',
        'satisfactionSurveyChannel' => 'SatisfactionSurveyChannel',
        'releaseTime'               => 'ReleaseTime',
        'callingNumber'             => 'CallingNumber',
        'skillGroupNames'           => 'SkillGroupNames',
        'skillGroupIds'             => 'SkillGroupIds',
        'agentEvents'               => 'AgentEvents',
        'ivrEvents'                 => 'IvrEvents',
        'queueEvents'               => 'QueueEvents',
        'callerLocation'            => 'CallerLocation',
        'calleeLocation'            => 'CalleeLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releaseInitiator) {
            $res['ReleaseInitiator'] = $this->releaseInitiator;
        }
        if (null !== $this->contactDisposition) {
            $res['ContactDisposition'] = $this->contactDisposition;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
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
        if (null !== $this->establishedTime) {
            $res['EstablishedTime'] = $this->establishedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->satisfactionSurveyOffered) {
            $res['SatisfactionSurveyOffered'] = $this->satisfactionSurveyOffered;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->agentNames) {
            $res['AgentNames'] = $this->agentNames;
        }
        if (null !== $this->satisfaction) {
            $res['Satisfaction'] = $this->satisfaction;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->satisfactionSurveyChannel) {
            $res['SatisfactionSurveyChannel'] = $this->satisfactionSurveyChannel;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->skillGroupNames) {
            $res['SkillGroupNames'] = $this->skillGroupNames;
        }
        if (null !== $this->skillGroupIds) {
            $res['SkillGroupIds'] = $this->skillGroupIds;
        }
        if (null !== $this->agentEvents) {
            $res['AgentEvents'] = [];
            if (null !== $this->agentEvents && \is_array($this->agentEvents)) {
                $n = 0;
                foreach ($this->agentEvents as $item) {
                    $res['AgentEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReleaseInitiator'])) {
            $model->releaseInitiator = $map['ReleaseInitiator'];
        }
        if (isset($map['ContactDisposition'])) {
            $model->contactDisposition = $map['ContactDisposition'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
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
        if (isset($map['EstablishedTime'])) {
            $model->establishedTime = $map['EstablishedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SatisfactionSurveyOffered'])) {
            $model->satisfactionSurveyOffered = $map['SatisfactionSurveyOffered'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['AgentNames'])) {
            $model->agentNames = $map['AgentNames'];
        }
        if (isset($map['Satisfaction'])) {
            $model->satisfaction = $map['Satisfaction'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['SatisfactionSurveyChannel'])) {
            $model->satisfactionSurveyChannel = $map['SatisfactionSurveyChannel'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['SkillGroupNames'])) {
            $model->skillGroupNames = $map['SkillGroupNames'];
        }
        if (isset($map['SkillGroupIds'])) {
            $model->skillGroupIds = $map['SkillGroupIds'];
        }
        if (isset($map['AgentEvents'])) {
            if (!empty($map['AgentEvents'])) {
                $model->agentEvents = [];
                $n                  = 0;
                foreach ($map['AgentEvents'] as $item) {
                    $model->agentEvents[$n++] = null !== $item ? agentEvents::fromMap($item) : $item;
                }
            }
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
        if (isset($map['CallerLocation'])) {
            $model->callerLocation = $map['CallerLocation'];
        }
        if (isset($map['CalleeLocation'])) {
            $model->calleeLocation = $map['CalleeLocation'];
        }

        return $model;
    }
}
