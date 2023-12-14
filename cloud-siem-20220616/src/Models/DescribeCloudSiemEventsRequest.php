<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudSiemEventsRequest extends Model
{
    /**
     * @description The ID of the asset that is associated with the event.
     *
     * @example 6c740667-80b2-476d-8924-2e706feb****
     *
     * @var string
     */
    public $assetId;

    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * @example 1577808000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The name of the event.
     *
     * @example ECS unusual log in
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The ID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @description The sort order. Valid values:
     *
     *   desc: descending order
     *   asc: ascending order
     *
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The sort field. Valid values:
     *
     *   GmtModified: sorts the events by creation time. This is the default value.
     *   ThreatScore: sorts the events by risk score.
     *
     * @example ThreatScore
     *
     * @var string
     */
    public $orderField;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Unit: milliseconds.
     *
     * @example 1577808000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the event. Valid values:
     *
     *   0: unhandled
     *   1: handling
     *   5: handling failed
     *   10: handled
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The risk levels of the events. The value is a JSON array. Valid values:
     *
     *   serious: high
     *   suspicious: medium
     *   remind: low
     *
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
