<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListCallDetailRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

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
    public $contactDisposition;

    /**
     * @var string
     */
    public $contactDispositionList;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactType;

    /**
     * @var string
     */
    public $contactTypeList;

    /**
     * @var string
     */
    public $criteria;

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
    public $instanceId;

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
    public $satisfactionDescriptionList;

    /**
     * @var string
     */
    public $satisfactionList;

    /**
     * @var string
     */
    public $satisfactionSurveyChannel;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $sortOrder;

    /**
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
