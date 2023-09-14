<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsRequest\endRange;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorJobsStatsRequest\startRange;
use AlibabaCloud\Tea\Model;

class ListDoctorJobsStatsRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var endRange
     */
    public $endRange;

    /**
     * @example null
     *
     * @var string[]
     */
    public $groupBy;

    /**
     * @description 一次获取的最大记录数。取值范围：1~100。
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 标记当前开始读取的位置，置空表示从头开始。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example vcoreSeconds
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example ASC
     *
     * @var string
     */
    public $orderType;

    /**
     * @description 区域ID。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var startRange
     */
    public $startRange;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'endRange'   => 'EndRange',
        'groupBy'    => 'GroupBy',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'orderBy'    => 'OrderBy',
        'orderType'  => 'OrderType',
        'regionId'   => 'RegionId',
        'startRange' => 'StartRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endRange) {
            $res['EndRange'] = null !== $this->endRange ? $this->endRange->toMap() : null;
        }
        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
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
            $res['StartRange'] = null !== $this->startRange ? $this->startRange->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDoctorJobsStatsRequest
     */
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
                $model->groupBy = $map['GroupBy'];
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
