<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesRequest\exclusionFilters;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesRequest\tag;
use AlibabaCloud\Tea\Model;

class SearchTracesRequest extends Model
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
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'endTime'          => 'EndTime',
        'exclusionFilters' => 'ExclusionFilters',
        'minDuration'      => 'MinDuration',
        'operationName'    => 'OperationName',
        'pid'              => 'Pid',
        'regionId'         => 'RegionId',
        'reverse'          => 'Reverse',
        'serviceIp'        => 'ServiceIp',
        'serviceName'      => 'ServiceName',
        'startTime'        => 'StartTime',
        'tag'              => 'Tag',
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
        if (null !== $this->minDuration) {
            $res['MinDuration'] = $this->minDuration;
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
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
        if (isset($map['MinDuration'])) {
            $model->minDuration = $map['MinDuration'];
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
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
