<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageRequest\exclusionFilters;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageRequest\tags;
use AlibabaCloud\Tea\Model;

class SearchTracesByPageRequest extends Model
{
    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * @example 1595210400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The filter conditions.
     *
     * @var exclusionFilters[]
     */
    public $exclusionFilters;

    /**
     * @description 是否过滤错误的调用链。
     * - `false`（默认）：不过滤
     * @example false
     *
     * @var bool
     */
    public $isError;

    /**
     * @description The minimum amount of time consumed by traces. Unit: milliseconds.
     *
     * @example 2
     *
     * @var int
     */
    public $minDuration;

    /**
     * @description The name of the traced span.
     *
     * @example /demo/queryNotExistDB/11
     *
     * @var string
     */
    public $operationName;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 100.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The application ID.
     *
     * @example b590lhguqs@9781be0f44dXXXX
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to sort the query results in chronological order or reverse chronological order. Default value: `false`.
     *
     *   `true`: sorts the query results in reverse chronological order.
     *   `false`: sorts the query results in chronological order.
     *
     * @example false
     *
     * @var bool
     */
    public $reverse;

    /**
     * @description The IP address of the host where the application resides.
     *
     * @example 172.20.XX.XX
     *
     * @var string
     */
    public $serviceIp;

    /**
     * @description The name of the application.
     *
     * @example arms-k8s-demo-subcomponent
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The beginning of the time range to query. Unit: milliseconds.
     *
     * @example 1595174400000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The list of tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'endTime'          => 'EndTime',
        'exclusionFilters' => 'ExclusionFilters',
        'isError'          => 'IsError',
        'minDuration'      => 'MinDuration',
        'operationName'    => 'OperationName',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'pid'              => 'Pid',
        'regionId'         => 'RegionId',
        'reverse'          => 'Reverse',
        'serviceIp'        => 'ServiceIp',
        'serviceName'      => 'ServiceName',
        'startTime'        => 'StartTime',
        'tags'             => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->exclusionFilters) {
            $res['ExclusionFilters'] = [];
            if (null !== $this->exclusionFilters && \is_array($this->exclusionFilters)) {
                $n = 0;
                foreach ($this->exclusionFilters as $item) {
                    $res['ExclusionFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isError) {
            $res['IsError'] = $this->isError;
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
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTracesByPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExclusionFilters'])) {
            if (!empty($map['ExclusionFilters'])) {
                $model->exclusionFilters = [];
                $n                       = 0;
                foreach ($map['ExclusionFilters'] as $item) {
                    $model->exclusionFilters[$n++] = null !== $item ? exclusionFilters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsError'])) {
            $model->isError = $map['IsError'];
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
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
