<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTracesRequest\exclusionFilters;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchTracesRequest\tag;

class SearchTracesRequest extends Model
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
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'endTime' => 'EndTime',
        'exclusionFilters' => 'ExclusionFilters',
        'minDuration' => 'MinDuration',
        'operationName' => 'OperationName',
        'regionId' => 'RegionId',
        'reverse' => 'Reverse',
        'serviceIp' => 'ServiceIp',
        'serviceName' => 'ServiceName',
        'startTime' => 'StartTime',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->exclusionFilters)) {
            Model::validateArray($this->exclusionFilters);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
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

        if (null !== $this->minDuration) {
            $res['MinDuration'] = $this->minDuration;
        }

        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['MinDuration'])) {
            $model->minDuration = $map['MinDuration'];
        }

        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
