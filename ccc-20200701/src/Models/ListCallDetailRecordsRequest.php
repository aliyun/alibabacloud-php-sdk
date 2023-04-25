<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListCallDetailRecordsRequest extends Model
{
    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $agentId;

    /**
     * @example 1320523****
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example 07353988****
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
     * @example ["Success","NoAnswer"]
     *
     * @var string
     */
    public $contactDispositionList;

    /**
     * @example job-12515239414412****
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
     * @example ["Internal","Inbound"]
     *
     * @var string
     */
    public $contactTypeList;

    /**
     * @example {"phoneNumber":"0735"}
     *
     * @var string
     */
    public $criteria;

    /**
     * @example ["NotConnected","NoAnswer"]
     *
     * @var string
     */
    public $earlyMediaStateList;

    /**
     * @example 1532707199000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example startTime
     *
     * @var string
     */
    public $orderByField;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
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
    public $satisfactionList;

    /**
     * @example IVR
     *
     * @var string
     */
    public $satisfactionSurveyChannel;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example DESC
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @example 1532448000000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'agentId'                     => 'AgentId',
        'calledNumber'                => 'CalledNumber',
        'callingNumber'               => 'CallingNumber',
        'contactDisposition'          => 'ContactDisposition',
        'contactDispositionList'      => 'ContactDispositionList',
        'contactId'                   => 'ContactId',
        'contactType'                 => 'ContactType',
        'contactTypeList'             => 'ContactTypeList',
        'criteria'                    => 'Criteria',
        'earlyMediaStateList'         => 'EarlyMediaStateList',
        'endTime'                     => 'EndTime',
        'instanceId'                  => 'InstanceId',
        'orderByField'                => 'OrderByField',
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'satisfactionDescriptionList' => 'SatisfactionDescriptionList',
        'satisfactionList'            => 'SatisfactionList',
        'satisfactionSurveyChannel'   => 'SatisfactionSurveyChannel',
        'skillGroupId'                => 'SkillGroupId',
        'sortOrder'                   => 'SortOrder',
        'startTime'                   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->contactDisposition) {
            $res['ContactDisposition'] = $this->contactDisposition;
        }
        if (null !== $this->contactDispositionList) {
            $res['ContactDispositionList'] = $this->contactDispositionList;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->contactTypeList) {
            $res['ContactTypeList'] = $this->contactTypeList;
        }
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->earlyMediaStateList) {
            $res['EarlyMediaStateList'] = $this->earlyMediaStateList;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->satisfactionList) {
            $res['SatisfactionList'] = $this->satisfactionList;
        }
        if (null !== $this->satisfactionSurveyChannel) {
            $res['SatisfactionSurveyChannel'] = $this->satisfactionSurveyChannel;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
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
     * @return ListCallDetailRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['ContactDisposition'])) {
            $model->contactDisposition = $map['ContactDisposition'];
        }
        if (isset($map['ContactDispositionList'])) {
            $model->contactDispositionList = $map['ContactDispositionList'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['ContactTypeList'])) {
            $model->contactTypeList = $map['ContactTypeList'];
        }
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['EarlyMediaStateList'])) {
            $model->earlyMediaStateList = $map['EarlyMediaStateList'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['SatisfactionList'])) {
            $model->satisfactionList = $map['SatisfactionList'];
        }
        if (isset($map['SatisfactionSurveyChannel'])) {
            $model->satisfactionSurveyChannel = $map['SatisfactionSurveyChannel'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
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
