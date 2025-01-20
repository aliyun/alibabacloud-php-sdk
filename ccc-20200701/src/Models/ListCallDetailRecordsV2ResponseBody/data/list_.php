<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data\list_\analyticsReport;

class list_ extends Model
{
    /**
     * @var string
     */
    public $accessChannelName;
    /**
     * @var string
     */
    public $accessChannelType;
    /**
     * @var string
     */
    public $accessChannelUserId;
    /**
     * @var string
     */
    public $accessChannelUserName;
    /**
     * @var string
     */
    public $additionalBroker;
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
     * @var string
     */
    public $broker;
    /**
     * @var string
     */
    public $callDuration;
    /**
     * @var string
     */
    public $callIds;
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
    public $clientAppName;
    /**
     * @var string
     */
    public $clientIpAddress;
    /**
     * @var string
     */
    public $clientLocation;
    /**
     * @var string
     */
    public $clientUserAgent;
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
     * @var int
     */
    public $dialingTime;
    /**
     * @var string
     */
    public $earlyMediaState;
    /**
     * @var string
     */
    public $earlyMediaText;
    /**
     * @var int
     */
    public $establishedTime;
    /**
     * @var int
     */
    public $firstResponseTime;
    /**
     * @var int
     */
    public $heldTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $ivrTime;
    /**
     * @var string
     */
    public $mediaType;
    /**
     * @var int
     */
    public $messagesSent;
    /**
     * @var int
     */
    public $messagesSentByAgent;
    /**
     * @var int
     */
    public $messagesSentByCustomer;
    /**
     * @var string
     */
    public $offSiteAgentIds;
    /**
     * @var string
     */
    public $offsiteAgentDestinationNumbers;
    /**
     * @var string
     */
    public $offsiteAgentOriginatorNumbers;
    /**
     * @var int
     */
    public $queueTime;
    /**
     * @var int
     */
    public $recordingDuration;
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
    public $ringTime;
    /**
     * @var string
     */
    public $satisfactionDescription;
    /**
     * @var int
     */
    public $satisfactionIndex;
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
    /**
     * @var int
     */
    public $talkTime;
    /**
     * @var int
     */
    public $transferCount;
    /**
     * @var int
     */
    public $waitTime;
    protected $_name = [
        'accessChannelName'              => 'AccessChannelName',
        'accessChannelType'              => 'AccessChannelType',
        'accessChannelUserId'            => 'AccessChannelUserId',
        'accessChannelUserName'          => 'AccessChannelUserName',
        'additionalBroker'               => 'AdditionalBroker',
        'agentIds'                       => 'AgentIds',
        'agentNames'                     => 'AgentNames',
        'analyticsReport'                => 'AnalyticsReport',
        'analyticsReportReady'           => 'AnalyticsReportReady',
        'broker'                         => 'Broker',
        'callDuration'                   => 'CallDuration',
        'callIds'                        => 'CallIds',
        'calledNumber'                   => 'CalledNumber',
        'calleeLocation'                 => 'CalleeLocation',
        'callerLocation'                 => 'CallerLocation',
        'callingNumber'                  => 'CallingNumber',
        'clientAppName'                  => 'ClientAppName',
        'clientIpAddress'                => 'ClientIpAddress',
        'clientLocation'                 => 'ClientLocation',
        'clientUserAgent'                => 'ClientUserAgent',
        'contactDisposition'             => 'ContactDisposition',
        'contactId'                      => 'ContactId',
        'contactType'                    => 'ContactType',
        'dialingTime'                    => 'DialingTime',
        'earlyMediaState'                => 'EarlyMediaState',
        'earlyMediaText'                 => 'EarlyMediaText',
        'establishedTime'                => 'EstablishedTime',
        'firstResponseTime'              => 'FirstResponseTime',
        'heldTime'                       => 'HeldTime',
        'instanceId'                     => 'InstanceId',
        'ivrTime'                        => 'IvrTime',
        'mediaType'                      => 'MediaType',
        'messagesSent'                   => 'MessagesSent',
        'messagesSentByAgent'            => 'MessagesSentByAgent',
        'messagesSentByCustomer'         => 'MessagesSentByCustomer',
        'offSiteAgentIds'                => 'OffSiteAgentIds',
        'offsiteAgentDestinationNumbers' => 'OffsiteAgentDestinationNumbers',
        'offsiteAgentOriginatorNumbers'  => 'OffsiteAgentOriginatorNumbers',
        'queueTime'                      => 'QueueTime',
        'recordingDuration'              => 'RecordingDuration',
        'recordingReady'                 => 'RecordingReady',
        'releaseInitiator'               => 'ReleaseInitiator',
        'releaseReason'                  => 'ReleaseReason',
        'releaseTime'                    => 'ReleaseTime',
        'ringTime'                       => 'RingTime',
        'satisfactionDescription'        => 'SatisfactionDescription',
        'satisfactionIndex'              => 'SatisfactionIndex',
        'satisfactionSurveyChannel'      => 'SatisfactionSurveyChannel',
        'satisfactionSurveyOffered'      => 'SatisfactionSurveyOffered',
        'skillGroupIds'                  => 'SkillGroupIds',
        'skillGroupNames'                => 'SkillGroupNames',
        'startTime'                      => 'StartTime',
        'talkTime'                       => 'TalkTime',
        'transferCount'                  => 'TransferCount',
        'waitTime'                       => 'WaitTime',
    ];

    public function validate()
    {
        if (null !== $this->analyticsReport) {
            $this->analyticsReport->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessChannelName) {
            $res['AccessChannelName'] = $this->accessChannelName;
        }

        if (null !== $this->accessChannelType) {
            $res['AccessChannelType'] = $this->accessChannelType;
        }

        if (null !== $this->accessChannelUserId) {
            $res['AccessChannelUserId'] = $this->accessChannelUserId;
        }

        if (null !== $this->accessChannelUserName) {
            $res['AccessChannelUserName'] = $this->accessChannelUserName;
        }

        if (null !== $this->additionalBroker) {
            $res['AdditionalBroker'] = $this->additionalBroker;
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

        if (null !== $this->broker) {
            $res['Broker'] = $this->broker;
        }

        if (null !== $this->callDuration) {
            $res['CallDuration'] = $this->callDuration;
        }

        if (null !== $this->callIds) {
            $res['CallIds'] = $this->callIds;
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

        if (null !== $this->clientAppName) {
            $res['ClientAppName'] = $this->clientAppName;
        }

        if (null !== $this->clientIpAddress) {
            $res['ClientIpAddress'] = $this->clientIpAddress;
        }

        if (null !== $this->clientLocation) {
            $res['ClientLocation'] = $this->clientLocation;
        }

        if (null !== $this->clientUserAgent) {
            $res['ClientUserAgent'] = $this->clientUserAgent;
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

        if (null !== $this->dialingTime) {
            $res['DialingTime'] = $this->dialingTime;
        }

        if (null !== $this->earlyMediaState) {
            $res['EarlyMediaState'] = $this->earlyMediaState;
        }

        if (null !== $this->earlyMediaText) {
            $res['EarlyMediaText'] = $this->earlyMediaText;
        }

        if (null !== $this->establishedTime) {
            $res['EstablishedTime'] = $this->establishedTime;
        }

        if (null !== $this->firstResponseTime) {
            $res['FirstResponseTime'] = $this->firstResponseTime;
        }

        if (null !== $this->heldTime) {
            $res['HeldTime'] = $this->heldTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ivrTime) {
            $res['IvrTime'] = $this->ivrTime;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->messagesSent) {
            $res['MessagesSent'] = $this->messagesSent;
        }

        if (null !== $this->messagesSentByAgent) {
            $res['MessagesSentByAgent'] = $this->messagesSentByAgent;
        }

        if (null !== $this->messagesSentByCustomer) {
            $res['MessagesSentByCustomer'] = $this->messagesSentByCustomer;
        }

        if (null !== $this->offSiteAgentIds) {
            $res['OffSiteAgentIds'] = $this->offSiteAgentIds;
        }

        if (null !== $this->offsiteAgentDestinationNumbers) {
            $res['OffsiteAgentDestinationNumbers'] = $this->offsiteAgentDestinationNumbers;
        }

        if (null !== $this->offsiteAgentOriginatorNumbers) {
            $res['OffsiteAgentOriginatorNumbers'] = $this->offsiteAgentOriginatorNumbers;
        }

        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }

        if (null !== $this->recordingDuration) {
            $res['RecordingDuration'] = $this->recordingDuration;
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

        if (null !== $this->ringTime) {
            $res['RingTime'] = $this->ringTime;
        }

        if (null !== $this->satisfactionDescription) {
            $res['SatisfactionDescription'] = $this->satisfactionDescription;
        }

        if (null !== $this->satisfactionIndex) {
            $res['SatisfactionIndex'] = $this->satisfactionIndex;
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

        if (null !== $this->talkTime) {
            $res['TalkTime'] = $this->talkTime;
        }

        if (null !== $this->transferCount) {
            $res['TransferCount'] = $this->transferCount;
        }

        if (null !== $this->waitTime) {
            $res['WaitTime'] = $this->waitTime;
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
        if (isset($map['AccessChannelName'])) {
            $model->accessChannelName = $map['AccessChannelName'];
        }

        if (isset($map['AccessChannelType'])) {
            $model->accessChannelType = $map['AccessChannelType'];
        }

        if (isset($map['AccessChannelUserId'])) {
            $model->accessChannelUserId = $map['AccessChannelUserId'];
        }

        if (isset($map['AccessChannelUserName'])) {
            $model->accessChannelUserName = $map['AccessChannelUserName'];
        }

        if (isset($map['AdditionalBroker'])) {
            $model->additionalBroker = $map['AdditionalBroker'];
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

        if (isset($map['Broker'])) {
            $model->broker = $map['Broker'];
        }

        if (isset($map['CallDuration'])) {
            $model->callDuration = $map['CallDuration'];
        }

        if (isset($map['CallIds'])) {
            $model->callIds = $map['CallIds'];
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

        if (isset($map['ClientAppName'])) {
            $model->clientAppName = $map['ClientAppName'];
        }

        if (isset($map['ClientIpAddress'])) {
            $model->clientIpAddress = $map['ClientIpAddress'];
        }

        if (isset($map['ClientLocation'])) {
            $model->clientLocation = $map['ClientLocation'];
        }

        if (isset($map['ClientUserAgent'])) {
            $model->clientUserAgent = $map['ClientUserAgent'];
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

        if (isset($map['DialingTime'])) {
            $model->dialingTime = $map['DialingTime'];
        }

        if (isset($map['EarlyMediaState'])) {
            $model->earlyMediaState = $map['EarlyMediaState'];
        }

        if (isset($map['EarlyMediaText'])) {
            $model->earlyMediaText = $map['EarlyMediaText'];
        }

        if (isset($map['EstablishedTime'])) {
            $model->establishedTime = $map['EstablishedTime'];
        }

        if (isset($map['FirstResponseTime'])) {
            $model->firstResponseTime = $map['FirstResponseTime'];
        }

        if (isset($map['HeldTime'])) {
            $model->heldTime = $map['HeldTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IvrTime'])) {
            $model->ivrTime = $map['IvrTime'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['MessagesSent'])) {
            $model->messagesSent = $map['MessagesSent'];
        }

        if (isset($map['MessagesSentByAgent'])) {
            $model->messagesSentByAgent = $map['MessagesSentByAgent'];
        }

        if (isset($map['MessagesSentByCustomer'])) {
            $model->messagesSentByCustomer = $map['MessagesSentByCustomer'];
        }

        if (isset($map['OffSiteAgentIds'])) {
            $model->offSiteAgentIds = $map['OffSiteAgentIds'];
        }

        if (isset($map['OffsiteAgentDestinationNumbers'])) {
            $model->offsiteAgentDestinationNumbers = $map['OffsiteAgentDestinationNumbers'];
        }

        if (isset($map['OffsiteAgentOriginatorNumbers'])) {
            $model->offsiteAgentOriginatorNumbers = $map['OffsiteAgentOriginatorNumbers'];
        }

        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }

        if (isset($map['RecordingDuration'])) {
            $model->recordingDuration = $map['RecordingDuration'];
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

        if (isset($map['RingTime'])) {
            $model->ringTime = $map['RingTime'];
        }

        if (isset($map['SatisfactionDescription'])) {
            $model->satisfactionDescription = $map['SatisfactionDescription'];
        }

        if (isset($map['SatisfactionIndex'])) {
            $model->satisfactionIndex = $map['SatisfactionIndex'];
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

        if (isset($map['TalkTime'])) {
            $model->talkTime = $map['TalkTime'];
        }

        if (isset($map['TransferCount'])) {
            $model->transferCount = $map['TransferCount'];
        }

        if (isset($map['WaitTime'])) {
            $model->waitTime = $map['WaitTime'];
        }

        return $model;
    }
}
