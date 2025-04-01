<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceInstanceDeployDetailsRequest\filter;

class ListServiceInstanceDeployDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $cycleTimeZone;

    /**
     * @var string
     */
    public $cycleType;

    /**
     * @var string[]
     */
    public $dimension;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'cycleTimeZone' => 'CycleTimeZone',
        'cycleType' => 'CycleType',
        'dimension' => 'Dimension',
        'endTime' => 'EndTime',
        'filter' => 'Filter',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->dimension)) {
            Model::validateArray($this->dimension);
        }
        if (\is_array($this->filter)) {
            Model::validateArray($this->filter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cycleTimeZone) {
            $res['CycleTimeZone'] = $this->cycleTimeZone;
        }

        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }

        if (null !== $this->dimension) {
            if (\is_array($this->dimension)) {
                $res['Dimension'] = [];
                $n1 = 0;
                foreach ($this->dimension as $item1) {
                    $res['Dimension'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->filter) {
            if (\is_array($this->filter)) {
                $res['Filter'] = [];
                $n1 = 0;
                foreach ($this->filter as $item1) {
                    $res['Filter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['CycleTimeZone'])) {
            $model->cycleTimeZone = $map['CycleTimeZone'];
        }

        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }

        if (isset($map['Dimension'])) {
            if (!empty($map['Dimension'])) {
                $model->dimension = [];
                $n1 = 0;
                foreach ($map['Dimension'] as $item1) {
                    $model->dimension[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n1 = 0;
                foreach ($map['Filter'] as $item1) {
                    $model->filter[$n1++] = filter::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
