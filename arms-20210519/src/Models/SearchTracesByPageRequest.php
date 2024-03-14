<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\SDK\ARMS\V20210519\Models\SearchTracesByPageRequest\exclusionFilters;
use AlibabaCloud\Tea\Model;

class SearchTracesByPageRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var exclusionFilters[]
     */
    public $exclusionFilters;

    /**
     * @var int
     */
    public $minDuration;

    /**
     * @var string
     */
    public $operationName;

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
    public $regionId;

    /**
     * @var bool
     */
    public $reverse;

    /**
     * @var string
     */
    public $serviceIp;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'          => 'EndTime',
        'exclusionFilters' => 'ExclusionFilters',
        'minDuration'      => 'MinDuration',
        'operationName'    => 'OperationName',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'regionId'         => 'RegionId',
        'reverse'          => 'Reverse',
        'serviceIp'        => 'ServiceIp',
        'serviceName'      => 'ServiceName',
        'startTime'        => 'StartTime',
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

        return $model;
    }
}
