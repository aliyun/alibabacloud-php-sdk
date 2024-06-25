<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\SearchTracesRequest\tag;
use AlibabaCloud\Tea\Model;

class SearchTracesRequest extends Model
{
    /**
     * @description The type of the application. You can set the value to **XTRACE** or leave this parameter unspecified.
     *
     * @example XTRACE
     *
     * @var string
     */
    public $appType;

    /**
     * @description The timestamp of the end time of the time range to query. The timestamp is accurate to milliseconds.
     *
     * This parameter is required.
     * @example 1575622455686
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time more than which is used to call the trace. Unit: milliseconds. For example, a value of 100 specifies to return the traces that more than 100 milliseconds are used to call.
     *
     * @example 1000
     *
     * @var int
     */
    public $minDuration;

    /**
     * @description The name of the span.
     *
     * @example /api
     *
     * @var string
     */
    public $operationName;

    /**
     * @description The number of the page to return. For example, a value of 5 indicates page 5.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to sort the query results in chronological order or reverse chronological order. Default value: false. Valid values:
     *
     * - false: chronological order
     * @example false
     *
     * @var bool
     */
    public $reverse;

    /**
     * @description The IP address that corresponds to the span.
     *
     * @example 10.0.0.0
     *
     * @var string
     */
    public $serviceIp;

    /**
     * @description The name of the application.
     *
     * @example service 1
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The timestamp of the start time of the time range to query. The timestamp is accurate to milliseconds.
     *
     * This parameter is required.
     * @example 1575561600000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The list of the tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'appType'       => 'AppType',
        'endTime'       => 'EndTime',
        'minDuration'   => 'MinDuration',
        'operationName' => 'OperationName',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'regionId'      => 'RegionId',
        'reverse'       => 'Reverse',
        'serviceIp'     => 'ServiceIp',
        'serviceName'   => 'ServiceName',
        'startTime'     => 'StartTime',
        'tag'           => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->minDuration) {
            $res['MinDuration'] = $this->minDuration;
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTracesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MinDuration'])) {
            $model->minDuration = $map['MinDuration'];
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
