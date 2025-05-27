<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Dara\Model;

class ListDisposeStrategyRequest extends Model
{
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
    public $incidentUuid;

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
    public $regionId;

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
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'effectiveStatus' => 'EffectiveStatus',
        'endTime' => 'EndTime',
        'entityIdentity' => 'EntityIdentity',
        'entityType' => 'EntityType',
        'incidentUuid' => 'IncidentUuid',
        'order' => 'Order',
        'orderField' => 'OrderField',
        'pageSize' => 'PageSize',
        'playbookName' => 'PlaybookName',
        'playbookTypes' => 'PlaybookTypes',
        'playbookUuid' => 'PlaybookUuid',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'sophonTaskId' => 'SophonTaskId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
