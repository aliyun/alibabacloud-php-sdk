<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ListCallDetailRecordsV2Request extends Model
{
    /**
     * @var string
     */
    public $accessChannelTypeList;

    /**
     * @var string
     */
    public $agentId;

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
    public $calledNumber;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $contactDispositionList;

    /**
     * @var string
     */
    public $contactIdList;

    /**
     * @var string
     */
    public $contactTypeList;

    /**
     * @var string
     */
    public $earlyMediaStateList;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $firstAgentId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $orderByField;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $releaseInitiatorList;

    /**
     * @var string
     */
    public $releaseReasonList;

    /**
     * @var string
     */
    public $satisfactionDescriptionList;

    /**
     * @var string
     */
    public $satisfactionRateList;

    /**
     * @var string
     */
    public $satisfactionSurveyChannel;

    /**
     * @var string
     */
    public $searchPattern;

    /**
     * @var string
     */
    public $skillGroupIdList;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'accessChannelTypeList' => 'AccessChannelTypeList',
        'agentId' => 'AgentId',
        'analyticsReportReady' => 'AnalyticsReportReady',
        'broker' => 'Broker',
        'calledNumber' => 'CalledNumber',
        'callingNumber' => 'CallingNumber',
        'contactDispositionList' => 'ContactDispositionList',
        'contactIdList' => 'ContactIdList',
        'contactTypeList' => 'ContactTypeList',
        'earlyMediaStateList' => 'EarlyMediaStateList',
        'endTime' => 'EndTime',
        'firstAgentId' => 'FirstAgentId',
        'instanceId' => 'InstanceId',
        'mediaType' => 'MediaType',
        'number' => 'Number',
        'orderByField' => 'OrderByField',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'releaseInitiatorList' => 'ReleaseInitiatorList',
        'releaseReasonList' => 'ReleaseReasonList',
        'satisfactionDescriptionList' => 'SatisfactionDescriptionList',
        'satisfactionRateList' => 'SatisfactionRateList',
        'satisfactionSurveyChannel' => 'SatisfactionSurveyChannel',
        'searchPattern' => 'SearchPattern',
        'skillGroupIdList' => 'SkillGroupIdList',
        'sortOrder' => 'SortOrder',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessChannelTypeList) {
            $res['AccessChannelTypeList'] = $this->accessChannelTypeList;
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->analyticsReportReady) {
            $res['AnalyticsReportReady'] = $this->analyticsReportReady;
        }

        if (null !== $this->broker) {
            $res['Broker'] = $this->broker;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }

        if (null !== $this->contactDispositionList) {
            $res['ContactDispositionList'] = $this->contactDispositionList;
        }

        if (null !== $this->contactIdList) {
            $res['ContactIdList'] = $this->contactIdList;
        }

        if (null !== $this->contactTypeList) {
            $res['ContactTypeList'] = $this->contactTypeList;
        }

        if (null !== $this->earlyMediaStateList) {
            $res['EarlyMediaStateList'] = $this->earlyMediaStateList;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->firstAgentId) {
            $res['FirstAgentId'] = $this->firstAgentId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }

        if (null !== $this->orderByField) {
            $res['OrderByField'] = $this->orderByField;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->releaseInitiatorList) {
            $res['ReleaseInitiatorList'] = $this->releaseInitiatorList;
        }

        if (null !== $this->releaseReasonList) {
            $res['ReleaseReasonList'] = $this->releaseReasonList;
        }

        if (null !== $this->satisfactionDescriptionList) {
            $res['SatisfactionDescriptionList'] = $this->satisfactionDescriptionList;
        }

        if (null !== $this->satisfactionRateList) {
            $res['SatisfactionRateList'] = $this->satisfactionRateList;
        }

        if (null !== $this->satisfactionSurveyChannel) {
            $res['SatisfactionSurveyChannel'] = $this->satisfactionSurveyChannel;
        }

        if (null !== $this->searchPattern) {
            $res['SearchPattern'] = $this->searchPattern;
        }

        if (null !== $this->skillGroupIdList) {
            $res['SkillGroupIdList'] = $this->skillGroupIdList;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
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
        if (isset($map['AccessChannelTypeList'])) {
            $model->accessChannelTypeList = $map['AccessChannelTypeList'];
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AnalyticsReportReady'])) {
            $model->analyticsReportReady = $map['AnalyticsReportReady'];
        }

        if (isset($map['Broker'])) {
            $model->broker = $map['Broker'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }

        if (isset($map['ContactDispositionList'])) {
            $model->contactDispositionList = $map['ContactDispositionList'];
        }

        if (isset($map['ContactIdList'])) {
            $model->contactIdList = $map['ContactIdList'];
        }

        if (isset($map['ContactTypeList'])) {
            $model->contactTypeList = $map['ContactTypeList'];
        }

        if (isset($map['EarlyMediaStateList'])) {
            $model->earlyMediaStateList = $map['EarlyMediaStateList'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FirstAgentId'])) {
            $model->firstAgentId = $map['FirstAgentId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }

        if (isset($map['OrderByField'])) {
            $model->orderByField = $map['OrderByField'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ReleaseInitiatorList'])) {
            $model->releaseInitiatorList = $map['ReleaseInitiatorList'];
        }

        if (isset($map['ReleaseReasonList'])) {
            $model->releaseReasonList = $map['ReleaseReasonList'];
        }

        if (isset($map['SatisfactionDescriptionList'])) {
            $model->satisfactionDescriptionList = $map['SatisfactionDescriptionList'];
        }

        if (isset($map['SatisfactionRateList'])) {
            $model->satisfactionRateList = $map['SatisfactionRateList'];
        }

        if (isset($map['SatisfactionSurveyChannel'])) {
            $model->satisfactionSurveyChannel = $map['SatisfactionSurveyChannel'];
        }

        if (isset($map['SearchPattern'])) {
            $model->searchPattern = $map['SearchPattern'];
        }

        if (isset($map['SkillGroupIdList'])) {
            $model->skillGroupIdList = $map['SkillGroupIdList'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
