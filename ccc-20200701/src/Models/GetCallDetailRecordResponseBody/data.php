<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\agentEvents;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\analyticsReport;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\customerEvents;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\ivrEvents;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetCallDetailRecordResponseBody\data\queueEvents;

class data extends Model
{
    /**
     * @var agentEvents[]
     */
    public $agentEvents;

    /**
     * @var string
     */
    public $agentIds;

    /**
     * @var string
     */
    public $agentNames;

    /**
     * @var analyticsReport
     */
    public $analyticsReport;

    /**
     * @var bool
     */
    public $analyticsReportReady;

    /**
     * @var int
     */
    public $callDuration;

    /**
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
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $contactDisposition;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactType;

    /**
     * @var customerEvents[]
     */
    public $customerEvents;

    /**
     * @var string
     */
    public $earlyMediaState;

    /**
     * @var int
     */
    public $establishedTime;

    /**
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
     * @var bool
     */
    public $recordingReady;

    /**
     * @var string
     */
    public $releaseInitiator;

    /**
     * @var string
     */
    public $releaseReason;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var int
     */
    public $satisfaction;

    /**
     * @var string
     */
    public $satisfactionSurveyChannel;

    /**
     * @var bool
     */
    public $satisfactionSurveyOffered;

    /**
     * @var string
     */
    public $skillGroupIds;

    /**
     * @var string
     */
    public $skillGroupNames;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'agentEvents' => 'AgentEvents',
        'agentIds' => 'AgentIds',
        'agentNames' => 'AgentNames',
        'analyticsReport' => 'AnalyticsReport',
        'analyticsReportReady' => 'AnalyticsReportReady',
        'callDuration' => 'CallDuration',
        'calledNumber' => 'CalledNumber',
        'calleeLocation' => 'CalleeLocation',
        'callerLocation' => 'CallerLocation',
        'callingNumber' => 'CallingNumber',
        'contactDisposition' => 'ContactDisposition',
        'contactId' => 'ContactId',
        'contactType' => 'ContactType',
        'customerEvents' => 'CustomerEvents',
        'earlyMediaState' => 'EarlyMediaState',
        'establishedTime' => 'EstablishedTime',
        'instanceId' => 'InstanceId',
        'ivrEvents' => 'IvrEvents',
        'queueEvents' => 'QueueEvents',
        'recordingReady' => 'RecordingReady',
        'releaseInitiator' => 'ReleaseInitiator',
        'releaseReason' => 'ReleaseReason',
        'releaseTime' => 'ReleaseTime',
        'satisfaction' => 'Satisfaction',
        'satisfactionSurveyChannel' => 'SatisfactionSurveyChannel',
        'satisfactionSurveyOffered' => 'SatisfactionSurveyOffered',
        'skillGroupIds' => 'SkillGroupIds',
        'skillGroupNames' => 'SkillGroupNames',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->agentEvents)) {
            Model::validateArray($this->agentEvents);
        }
        if (null !== $this->analyticsReport) {
            $this->analyticsReport->validate();
        }
        if (\is_array($this->customerEvents)) {
            Model::validateArray($this->customerEvents);
        }
        if (\is_array($this->ivrEvents)) {
            Model::validateArray($this->ivrEvents);
        }
        if (\is_array($this->queueEvents)) {
            Model::validateArray($this->queueEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentEvents) {
            if (\is_array($this->agentEvents)) {
                $res['AgentEvents'] = [];
                $n1 = 0;
                foreach ($this->agentEvents as $item1) {
                    $res['AgentEvents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->agentIds) {
            $res['AgentIds'] = $this->agentIds;
        }

        if (null !== $this->agentNames) {
            $res['AgentNames'] = $this->agentNames;
        }

        if (null !== $this->analyticsReport) {
            $res['AnalyticsReport'] = null !== $this->analyticsReport ? $this->analyticsReport->toArray($noStream) : $this->analyticsReport;
        }

        if (null !== $this->analyticsReportReady) {
            $res['AnalyticsReportReady'] = $this->analyticsReportReady;
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
            if (\is_array($this->customerEvents)) {
                $res['CustomerEvents'] = [];
                $n1 = 0;
                foreach ($this->customerEvents as $item1) {
                    $res['CustomerEvents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->ivrEvents)) {
                $res['IvrEvents'] = [];
                $n1 = 0;
                foreach ($this->ivrEvents as $item1) {
                    $res['IvrEvents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->queueEvents) {
            if (\is_array($this->queueEvents)) {
                $res['QueueEvents'] = [];
                $n1 = 0;
                foreach ($this->queueEvents as $item1) {
                    $res['QueueEvents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentEvents'])) {
            if (!empty($map['AgentEvents'])) {
                $model->agentEvents = [];
                $n1 = 0;
                foreach ($map['AgentEvents'] as $item1) {
                    $model->agentEvents[$n1++] = agentEvents::fromMap($item1);
                }
            }
        }

        if (isset($map['AgentIds'])) {
            $model->agentIds = $map['AgentIds'];
        }

        if (isset($map['AgentNames'])) {
            $model->agentNames = $map['AgentNames'];
        }

        if (isset($map['AnalyticsReport'])) {
            $model->analyticsReport = analyticsReport::fromMap($map['AnalyticsReport']);
        }

        if (isset($map['AnalyticsReportReady'])) {
            $model->analyticsReportReady = $map['AnalyticsReportReady'];
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
                $n1 = 0;
                foreach ($map['CustomerEvents'] as $item1) {
                    $model->customerEvents[$n1++] = customerEvents::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['IvrEvents'] as $item1) {
                    $model->ivrEvents[$n1++] = ivrEvents::fromMap($item1);
                }
            }
        }

        if (isset($map['QueueEvents'])) {
            if (!empty($map['QueueEvents'])) {
                $model->queueEvents = [];
                $n1 = 0;
                foreach ($map['QueueEvents'] as $item1) {
                    $model->queueEvents[$n1++] = queueEvents::fromMap($item1);
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
