<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudSiemEventsRequest extends Model
{
    /**
     * @example 6c740667-80b2-476d-8924-2e706feb****
     *
     * @var string
     */
    public $assetId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1577808000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example ECS unusual log in
     *
     * @var string
     */
    public $eventName;

    /**
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @example ThreatScore
     *
     * @var string
     */
    public $orderField;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1577808000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example ["serious","suspicious","remind"]
     *
     * @var string[]
     */
    public $threadLevel;
    protected $_name = [
        'assetId'      => 'AssetId',
        'currentPage'  => 'CurrentPage',
        'endTime'      => 'EndTime',
        'eventName'    => 'EventName',
        'incidentUuid' => 'IncidentUuid',
        'order'        => 'Order',
        'orderField'   => 'OrderField',
        'pageSize'     => 'PageSize',
        'regionId'     => 'RegionId',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'threadLevel'  => 'ThreadLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->threadLevel) {
            $res['ThreadLevel'] = $this->threadLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudSiemEventsRequest
     */
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ThreadLevel'])) {
            if (!empty($map['ThreadLevel'])) {
                $model->threadLevel = $map['ThreadLevel'];
            }
        }

        return $model;
    }
}
