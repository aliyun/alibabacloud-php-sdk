<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListCallDetailRecordsRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $contactType;

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
    public $agentId;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderByField;

    /**
     * @var string
     */
    public $criteria;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $calledNumber;

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
    public $satisfactionDescriptionList;
    protected $_name = [
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'startTime'                   => 'StartTime',
        'endTime'                     => 'EndTime',
        'contactType'                 => 'ContactType',
        'contactDisposition'          => 'ContactDisposition',
        'contactId'                   => 'ContactId',
        'agentId'                     => 'AgentId',
        'skillGroupId'                => 'SkillGroupId',
        'sortOrder'                   => 'SortOrder',
        'instanceId'                  => 'InstanceId',
        'orderByField'                => 'OrderByField',
        'criteria'                    => 'Criteria',
        'callingNumber'               => 'CallingNumber',
        'calledNumber'                => 'CalledNumber',
        'satisfactionList'            => 'SatisfactionList',
        'satisfactionSurveyChannel'   => 'SatisfactionSurveyChannel',
        'satisfactionDescriptionList' => 'SatisfactionDescriptionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }
        if (null !== $this->contactDisposition) {
            $res['ContactDisposition'] = $this->contactDisposition;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderByField) {
            $res['OrderByField'] = $this->orderByField;
        }
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->satisfactionList) {
            $res['SatisfactionList'] = $this->satisfactionList;
        }
        if (null !== $this->satisfactionSurveyChannel) {
            $res['SatisfactionSurveyChannel'] = $this->satisfactionSurveyChannel;
        }
        if (null !== $this->satisfactionDescriptionList) {
            $res['SatisfactionDescriptionList'] = $this->satisfactionDescriptionList;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }
        if (isset($map['ContactDisposition'])) {
            $model->contactDisposition = $map['ContactDisposition'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderByField'])) {
            $model->orderByField = $map['OrderByField'];
        }
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['SatisfactionList'])) {
            $model->satisfactionList = $map['SatisfactionList'];
        }
        if (isset($map['SatisfactionSurveyChannel'])) {
            $model->satisfactionSurveyChannel = $map['SatisfactionSurveyChannel'];
        }
        if (isset($map['SatisfactionDescriptionList'])) {
            $model->satisfactionDescriptionList = $map['SatisfactionDescriptionList'];
        }

        return $model;
    }
}
