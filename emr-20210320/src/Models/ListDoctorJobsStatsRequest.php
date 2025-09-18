<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsRequest\endRange;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsRequest\startRange;

class ListDoctorJobsStatsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var endRange
     */
    public $endRange;

    /**
     * @var string[]
     */
    public $groupBy;

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
    public $orderBy;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var startRange
     */
    public $startRange;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'endRange' => 'EndRange',
        'groupBy' => 'GroupBy',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderBy' => 'OrderBy',
        'orderType' => 'OrderType',
        'regionId' => 'RegionId',
        'startRange' => 'StartRange',
    ];

    public function validate()
    {
        if (null !== $this->endRange) {
            $this->endRange->validate();
        }
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        if (null !== $this->startRange) {
            $this->startRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->endRange) {
            $res['EndRange'] = null !== $this->endRange ? $this->endRange->toArray($noStream) : $this->endRange;
        }

        if (null !== $this->groupBy) {
            if (\is_array($this->groupBy)) {
                $res['GroupBy'] = [];
                $n1 = 0;
                foreach ($this->groupBy as $item1) {
                    $res['GroupBy'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startRange) {
            $res['StartRange'] = null !== $this->startRange ? $this->startRange->toArray($noStream) : $this->startRange;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['EndRange'])) {
            $model->endRange = endRange::fromMap($map['EndRange']);
        }

        if (isset($map['GroupBy'])) {
            if (!empty($map['GroupBy'])) {
                $model->groupBy = [];
                $n1 = 0;
                foreach ($map['GroupBy'] as $item1) {
                    $model->groupBy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartRange'])) {
            $model->startRange = startRange::fromMap($map['StartRange']);
        }

        return $model;
    }
}
