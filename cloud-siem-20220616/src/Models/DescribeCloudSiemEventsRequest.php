<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Dara\Model;

class DescribeCloudSiemEventsRequest extends Model
{
    /**
     * @var string
     */
    public $assetId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $entityUuid;

    /**
     * @var string
     */
    public $eventName;

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
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string[]
     */
    public $threadLevel;
    protected $_name = [
        'assetId' => 'AssetId',
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'entityUuid' => 'EntityUuid',
        'eventName' => 'EventName',
        'incidentUuid' => 'IncidentUuid',
        'order' => 'Order',
        'orderField' => 'OrderField',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'threadLevel' => 'ThreadLevel',
    ];

    public function validate()
    {
        if (\is_array($this->threadLevel)) {
            Model::validateArray($this->threadLevel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->entityUuid) {
            $res['EntityUuid'] = $this->entityUuid;
        }

        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->threadLevel) {
            if (\is_array($this->threadLevel)) {
                $res['ThreadLevel'] = [];
                $n1 = 0;
                foreach ($this->threadLevel as $item1) {
                    $res['ThreadLevel'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EntityUuid'])) {
            $model->entityUuid = $map['EntityUuid'];
        }

        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ThreadLevel'])) {
            if (!empty($map['ThreadLevel'])) {
                $model->threadLevel = [];
                $n1 = 0;
                foreach ($map['ThreadLevel'] as $item1) {
                    $model->threadLevel[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
