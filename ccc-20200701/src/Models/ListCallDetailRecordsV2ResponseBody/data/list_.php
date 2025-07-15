<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data\list_\analyticsReport;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListCallDetailRecordsV2ResponseBody\data\list_\summaryIndex;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $accessChannelName;

    /**
     * @example Web
     *
     * @var string
     */
    public $accessChannelType;

    /**
     * @example test-user-id
     *
     * @var string
     */
    public $accessChannelUserId;

    /**
     * @var string
     */
    public $accessChannelUserName;

    /**
     * @example 0533128****
     *
     * @var string
     */
    public $additionalBroker;

    /**
     * @example agent@ccc-test
     *
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
     * @example 053xxxx3127
     *
     * @var string
     */
    public $broker;

    /**
     * @example 16
     *
     * @var string
     */
    public $callDuration;

    /**
     * @var string
     */
    public $callIds;

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
     * @var string
     */
    public $clientAppName;

    /**
     * @example 10.100.2.1
     *
     * @var string
     */
    public $clientIpAddress;

    /**
     * @example ---
     *
     * @var string
     */
    public $clientLocation;

    /**
     * @example Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36
     *
     * @var string
     */
    public $clientUserAgent;

    /**
     * @example Success
     *
     * @var string
     */
    public $contactDisposition;

    /**
     * @example job-2255019651513856
     *
     * @var string
     */
    public $contactId;

    /**
     * @example OUTBOUND
     *
     * @var string
     */
    public $contactType;

    /**
     * @example 0
     *
     * @var int
     */
    public $dialingTime;

    /**
     * @example NotConnected
     *
     * @var string
     */
    public $earlyMediaState;

    /**
     * @var string
     */
    public $earlyMediaText;

    /**
     * @example 1532448000000
     *
     * @var int
     */
    public $establishedTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $firstResponseTime;

    /**
     * @example 12
     *
     * @var int
     */
    public $heldTime;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 8
     *
     * @var int
     */
    public $ivrTime;

    /**
     * @example CHAT
     *
     * @var string
     */
    public $mediaType;

    /**
     * @example 10
     *
     * @var int
     */
    public $messagesSent;

    /**
     * @example 5
     *
     * @var int
     */
    public $messagesSentByAgent;

    /**
     * @example 5
     *
     * @var int
     */
    public $messagesSentByCustomer;

    /**
     * @example skg-default@ccc-test
     *
     * @var string
     */
    public $offSiteAgentIds;

    /**
     * @example 80312348
     *
     * @var string
     */
    public $offsiteAgentDestinationNumbers;

    /**
     * @example 0101257****
     *
     * @var string
     */
    public $offsiteAgentOriginatorNumbers;

    /**
     * @var string
     */
    public $offsiteAgentReleaseReason;

    /**
     * @var string
     */
    public $outsideNumberReleaseReason;

    /**
     * @example 0
     *
     * @var int
     */
    public $queueTime;

    /**
     * @example 10
     *
     * @var int
     */
    public $recordingDuration;

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
     * @example 486:USER_BUSY
     *
     * @var string
     */
    public $releaseReason;

    /**
     * @example 1532707199000
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @example 5
     *
     * @var int
     */
    public $ringTime;

    /**
     * @var string
     */
    public $satisfactionDescription;

    /**
     * @example 1
     *
     * @var int
     */
    public $satisfactionIndex;

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
     * @example skg-default@ccc-test
     *
     * @var string
     */
    public $skillGroupIds;

    /**
     * @var string
     */
    public $skillGroupNames;

    /**
     * @example 1631440860000
     *
     * @var int
     */
    public $startTime;

    /**
     * @var summaryIndex
     */
    public $summaryIndex;

    /**
     * @example 0
     *
     * @var int
     */
    public $talkTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $transferCount;

    /**
     * @var string
     */
    public $voicebotDestinationNumber;

    /**
     * @var string
     */
    public $voicebotOriginatorNumber;

    /**
     * @example 5
     *
     * @var int
     */
    public $waitTime;
    protected $_name = [
        'accessChannelName' => 'AccessChannelName',
        'accessChannelType' => 'AccessChannelType',
        'accessChannelUserId' => 'AccessChannelUserId',
        'accessChannelUserName' => 'AccessChannelUserName',
        'additionalBroker' => 'AdditionalBroker',
        'agentIds' => 'AgentIds',
        'agentNames' => 'AgentNames',
        'analyticsReport' => 'AnalyticsReport',
        'analyticsReportReady' => 'AnalyticsReportReady',
        'broker' => 'Broker',
        'callDuration' => 'CallDuration',
        'callIds' => 'CallIds',
        'calledNumber' => 'CalledNumber',
        'calleeLocation' => 'CalleeLocation',
        'callerLocation' => 'CallerLocation',
        'callingNumber' => 'CallingNumber',
        'clientAppName' => 'ClientAppName',
        'clientIpAddress' => 'ClientIpAddress',
        'clientLocation' => 'ClientLocation',
        'clientUserAgent' => 'ClientUserAgent',
        'contactDisposition' => 'ContactDisposition',
        'contactId' => 'ContactId',
        'contactType' => 'ContactType',
        'dialingTime' => 'DialingTime',
        'earlyMediaState' => 'EarlyMediaState',
        'earlyMediaText' => 'EarlyMediaText',
        'establishedTime' => 'EstablishedTime',
        'firstResponseTime' => 'FirstResponseTime',
        'heldTime' => 'HeldTime',
        'instanceId' => 'InstanceId',
        'ivrTime' => 'IvrTime',
        'mediaType' => 'MediaType',
        'messagesSent' => 'MessagesSent',
        'messagesSentByAgent' => 'MessagesSentByAgent',
        'messagesSentByCustomer' => 'MessagesSentByCustomer',
        'offSiteAgentIds' => 'OffSiteAgentIds',
        'offsiteAgentDestinationNumbers' => 'OffsiteAgentDestinationNumbers',
        'offsiteAgentOriginatorNumbers' => 'OffsiteAgentOriginatorNumbers',
        'offsiteAgentReleaseReason' => 'OffsiteAgentReleaseReason',
        'outsideNumberReleaseReason' => 'OutsideNumberReleaseReason',
        'queueTime' => 'QueueTime',
        'recordingDuration' => 'RecordingDuration',
        'recordingReady' => 'RecordingReady',
        'releaseInitiator' => 'ReleaseInitiator',
        'releaseReason' => 'ReleaseReason',
        'releaseTime' => 'ReleaseTime',
        'ringTime' => 'RingTime',
        'satisfactionDescription' => 'SatisfactionDescription',
        'satisfactionIndex' => 'SatisfactionIndex',
        'satisfactionSurveyChannel' => 'SatisfactionSurveyChannel',
        'satisfactionSurveyOffered' => 'SatisfactionSurveyOffered',
        'skillGroupIds' => 'SkillGroupIds',
        'skillGroupNames' => 'SkillGroupNames',
        'startTime' => 'StartTime',
        'summaryIndex' => 'SummaryIndex',
        'talkTime' => 'TalkTime',
        'transferCount' => 'TransferCount',
        'voicebotDestinationNumber' => 'VoicebotDestinationNumber',
        'voicebotOriginatorNumber' => 'VoicebotOriginatorNumber',
        'waitTime' => 'WaitTime',
    ];

    public function validate() {}

    public function toMap()
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
            $res['AnalyticsReport'] = null !== $this->analyticsReport ? $this->analyticsReport->toMap() : null;
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
        if (null !== $this->offsiteAgentReleaseReason) {
            $res['OffsiteAgentReleaseReason'] = $this->offsiteAgentReleaseReason;
        }
        if (null !== $this->outsideNumberReleaseReason) {
            $res['OutsideNumberReleaseReason'] = $this->outsideNumberReleaseReason;
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
        if (null !== $this->summaryIndex) {
            $res['SummaryIndex'] = null !== $this->summaryIndex ? $this->summaryIndex->toMap() : null;
        }
        if (null !== $this->talkTime) {
            $res['TalkTime'] = $this->talkTime;
        }
        if (null !== $this->transferCount) {
            $res['TransferCount'] = $this->transferCount;
        }
        if (null !== $this->voicebotDestinationNumber) {
            $res['VoicebotDestinationNumber'] = $this->voicebotDestinationNumber;
        }
        if (null !== $this->voicebotOriginatorNumber) {
            $res['VoicebotOriginatorNumber'] = $this->voicebotOriginatorNumber;
        }
        if (null !== $this->waitTime) {
            $res['WaitTime'] = $this->waitTime;
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
        if (isset($map['OffsiteAgentReleaseReason'])) {
            $model->offsiteAgentReleaseReason = $map['OffsiteAgentReleaseReason'];
        }
        if (isset($map['OutsideNumberReleaseReason'])) {
            $model->outsideNumberReleaseReason = $map['OutsideNumberReleaseReason'];
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
        if (isset($map['SummaryIndex'])) {
            $model->summaryIndex = summaryIndex::fromMap($map['SummaryIndex']);
        }
        if (isset($map['TalkTime'])) {
            $model->talkTime = $map['TalkTime'];
        }
        if (isset($map['TransferCount'])) {
            $model->transferCount = $map['TransferCount'];
        }
        if (isset($map['VoicebotDestinationNumber'])) {
            $model->voicebotDestinationNumber = $map['VoicebotDestinationNumber'];
        }
        if (isset($map['VoicebotOriginatorNumber'])) {
            $model->voicebotOriginatorNumber = $map['VoicebotOriginatorNumber'];
        }
        if (isset($map['WaitTime'])) {
            $model->waitTime = $map['WaitTime'];
        }

        return $model;
    }
}
