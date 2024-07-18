<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListCallDetailRecordsV2Request extends Model
{
    /**
     * @example ["Web","AliMe"]
     *
     * @var string
     */
    public $accessChannelTypeList;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $agentId;

    /**
     * @example 021****4972
     *
     * @var string
     */
    public $broker;

    /**
     * @example 191***9993
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example 191***9993
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @example ["Success","NoAnswer"]
     *
     * @var string
     */
    public $contactDispositionList;

    /**
     * @example ["job-123456789","job-234567891"]
     *
     * @var string
     */
    public $contactIdList;

    /**
     * @example ["INBOUND","OUTBOUND"]
     *
     * @var string
     */
    public $contactTypeList;

    /**
     * @example ["NotConnected","NoAnswer"]
     *
     * @var string
     */
    public $earlyMediaStateList;

    /**
     * @example 1657879880010
     *
     * @var int
     */
    public $endTime;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $firstAgentId;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example AUDIO
     *
     * @var string
     */
    public $mediaType;

    /**
     * @example 191***9993
     *
     * @var string
     */
    public $number;

    /**
     * @example startTime
     *
     * @var string
     */
    public $orderByField;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $satisfactionDescriptionList;

    /**
     * @example ["1","3"]
     *
     * @var string
     */
    public $satisfactionRateList;

    /**
     * @example IVR
     *
     * @var string
     */
    public $satisfactionSurveyChannel;

    /**
     * @var string
     */
    public $searchPattern;

    /**
     * @example [
     * ]
     * @var string
     */
    public $skillGroupIdList;

    /**
     * @example DESC
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @example 1657853640015
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'accessChannelTypeList'       => 'AccessChannelTypeList',
        'agentId'                     => 'AgentId',
        'broker'                      => 'Broker',
        'calledNumber'                => 'CalledNumber',
        'callingNumber'               => 'CallingNumber',
        'contactDispositionList'      => 'ContactDispositionList',
        'contactIdList'               => 'ContactIdList',
        'contactTypeList'             => 'ContactTypeList',
        'earlyMediaStateList'         => 'EarlyMediaStateList',
        'endTime'                     => 'EndTime',
        'firstAgentId'                => 'FirstAgentId',
        'instanceId'                  => 'InstanceId',
        'mediaType'                   => 'MediaType',
        'number'                      => 'Number',
        'orderByField'                => 'OrderByField',
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'satisfactionDescriptionList' => 'SatisfactionDescriptionList',
        'satisfactionRateList'        => 'SatisfactionRateList',
        'satisfactionSurveyChannel'   => 'SatisfactionSurveyChannel',
        'searchPattern'               => 'SearchPattern',
        'skillGroupIdList'            => 'SkillGroupIdList',
        'sortOrder'                   => 'SortOrder',
        'startTime'                   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessChannelTypeList) {
            $res['AccessChannelTypeList'] = $this->accessChannelTypeList;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
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

    /**
     * @param array $map
     *
     * @return ListCallDetailRecordsV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessChannelTypeList'])) {
            $model->accessChannelTypeList = $map['AccessChannelTypeList'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
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
