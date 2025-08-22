<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageRequest\exclusionFilters;
use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageRequest\tags;

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
     * @var bool
     */
    public $isError;

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
    public $pid;

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

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'endTime' => 'EndTime',
        'exclusionFilters' => 'ExclusionFilters',
        'isError' => 'IsError',
        'minDuration' => 'MinDuration',
        'operationName' => 'OperationName',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'pid' => 'Pid',
        'regionId' => 'RegionId',
        'reverse' => 'Reverse',
        'serviceIp' => 'ServiceIp',
        'serviceName' => 'ServiceName',
        'startTime' => 'StartTime',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->exclusionFilters)) {
            Model::validateArray($this->exclusionFilters);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->exclusionFilters) {
            if (\is_array($this->exclusionFilters)) {
                $res['ExclusionFilters'] = [];
                $n1 = 0;
                foreach ($this->exclusionFilters as $item1) {
                    $res['ExclusionFilters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExclusionFilters'])) {
            if (!empty($map['ExclusionFilters'])) {
                $model->exclusionFilters = [];
                $n1 = 0;
                foreach ($map['ExclusionFilters'] as $item1) {
                    $model->exclusionFilters[$n1] = exclusionFilters::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
