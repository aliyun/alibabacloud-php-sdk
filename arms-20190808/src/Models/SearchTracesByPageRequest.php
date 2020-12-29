<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageRequest\exclusionFilters;
use AlibabaCloud\Tea\Model;

class SearchTracesByPageRequest extends Model
{
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
    public $regionId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $operationName;

    /**
     * @var int
     */
    public $minDuration;

    /**
     * @var bool
     */
    public $reverse;

    /**
     * @var string
     */
    public $serviceIp;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var exclusionFilters[]
     */
    public $exclusionFilters;
    protected $_name = [
        'startTime'        => 'StartTime',
        'endTime'          => 'EndTime',
        'regionId'         => 'RegionId',
        'serviceName'      => 'ServiceName',
        'operationName'    => 'OperationName',
        'minDuration'      => 'MinDuration',
        'reverse'          => 'Reverse',
        'serviceIp'        => 'ServiceIp',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'exclusionFilters' => 'ExclusionFilters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->minDuration) {
            $res['MinDuration'] = $this->minDuration;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['MinDuration'])) {
            $model->minDuration = $map['MinDuration'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        return $model;
    }
}
