<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Dara\Model;

class ListDisposeStrategyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alertUuid;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $effectiveStatus;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $entityIdentity;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $entityUuidListShrink;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var string
     */
    public $groupKey;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $orderField;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $playbookName;

    /**
     * @var string
     */
    public $playbookTypes;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $queryMode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $responseRuleId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;

    /**
     * @var string
     */
    public $sophonTaskId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $strategyId;
    protected $_name = [
        'alertUuid' => 'AlertUuid',
        'currentPage' => 'CurrentPage',
        'effectiveStatus' => 'EffectiveStatus',
        'endTime' => 'EndTime',
        'entityIdentity' => 'EntityIdentity',
        'entityType' => 'EntityType',
        'entityUuidListShrink' => 'EntityUuidList',
        'groupBy' => 'GroupBy',
        'groupKey' => 'GroupKey',
        'incidentUuid' => 'IncidentUuid',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'orderField' => 'OrderField',
        'pageSize' => 'PageSize',
        'playbookName' => 'PlaybookName',
        'playbookTypes' => 'PlaybookTypes',
        'playbookUuid' => 'PlaybookUuid',
        'queryMode' => 'QueryMode',
        'regionId' => 'RegionId',
        'responseRuleId' => 'ResponseRuleId',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'sophonTaskId' => 'SophonTaskId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'strategyId' => 'StrategyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->effectiveStatus) {
            $res['EffectiveStatus'] = $this->effectiveStatus;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->entityIdentity) {
            $res['EntityIdentity'] = $this->entityIdentity;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->entityUuidListShrink) {
            $res['EntityUuidList'] = $this->entityUuidListShrink;
        }

        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }

        if (null !== $this->groupKey) {
            $res['GroupKey'] = $this->groupKey;
        }

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->playbookName) {
            $res['PlaybookName'] = $this->playbookName;
        }

        if (null !== $this->playbookTypes) {
            $res['PlaybookTypes'] = $this->playbookTypes;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->queryMode) {
            $res['QueryMode'] = $this->queryMode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->responseRuleId) {
            $res['ResponseRuleId'] = $this->responseRuleId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        if (null !== $this->sophonTaskId) {
            $res['SophonTaskId'] = $this->sophonTaskId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
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
        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EffectiveStatus'])) {
            $model->effectiveStatus = $map['EffectiveStatus'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EntityIdentity'])) {
            $model->entityIdentity = $map['EntityIdentity'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['EntityUuidList'])) {
            $model->entityUuidListShrink = $map['EntityUuidList'];
        }

        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }

        if (isset($map['GroupKey'])) {
            $model->groupKey = $map['GroupKey'];
        }

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PlaybookName'])) {
            $model->playbookName = $map['PlaybookName'];
        }

        if (isset($map['PlaybookTypes'])) {
            $model->playbookTypes = $map['PlaybookTypes'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['QueryMode'])) {
            $model->queryMode = $map['QueryMode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResponseRuleId'])) {
            $model->responseRuleId = $map['ResponseRuleId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        if (isset($map['SophonTaskId'])) {
            $model->sophonTaskId = $map['SophonTaskId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        return $model;
    }
}
