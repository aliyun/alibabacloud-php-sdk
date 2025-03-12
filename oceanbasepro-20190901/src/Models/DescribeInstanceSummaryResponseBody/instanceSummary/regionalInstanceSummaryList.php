<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSummaryResponseBody\instanceSummary;

use AlibabaCloud\Tea\Model;

class regionalInstanceSummaryList extends Model
{
    /**
     * @description The number of expired instances.
     *
     * @example 1
     *
     * @var int
     */
    public $expiredInstancesCount;

    /**
     * @description The number of instances about to expire.
     *
     * @example 1
     *
     * @var int
     */
    public $immediatelyExpiredInstancesCount;

    /**
     * @description The number of recently created instances.
     *
     * @example 1
     *
     * @var int
     */
    public $recentCreatedInstancesCount;

    /**
     * @description The ID of the region.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The total number of running instances.
     *
     * @example 1
     *
     * @var int
     */
    public $runningInstancesCount;

    /**
     * @description The total number of instances.
     *
     * @example 3
     *
     * @var int
     */
    public $totalInstancesCount;
    protected $_name = [
        'expiredInstancesCount'            => 'ExpiredInstancesCount',
        'immediatelyExpiredInstancesCount' => 'ImmediatelyExpiredInstancesCount',
        'recentCreatedInstancesCount'      => 'RecentCreatedInstancesCount',
        'region'                           => 'Region',
        'runningInstancesCount'            => 'RunningInstancesCount',
        'totalInstancesCount'              => 'TotalInstancesCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredInstancesCount) {
            $res['ExpiredInstancesCount'] = $this->expiredInstancesCount;
        }
        if (null !== $this->immediatelyExpiredInstancesCount) {
            $res['ImmediatelyExpiredInstancesCount'] = $this->immediatelyExpiredInstancesCount;
        }
        if (null !== $this->recentCreatedInstancesCount) {
            $res['RecentCreatedInstancesCount'] = $this->recentCreatedInstancesCount;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->runningInstancesCount) {
            $res['RunningInstancesCount'] = $this->runningInstancesCount;
        }
        if (null !== $this->totalInstancesCount) {
            $res['TotalInstancesCount'] = $this->totalInstancesCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionalInstanceSummaryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiredInstancesCount'])) {
            $model->expiredInstancesCount = $map['ExpiredInstancesCount'];
        }
        if (isset($map['ImmediatelyExpiredInstancesCount'])) {
            $model->immediatelyExpiredInstancesCount = $map['ImmediatelyExpiredInstancesCount'];
        }
        if (isset($map['RecentCreatedInstancesCount'])) {
            $model->recentCreatedInstancesCount = $map['RecentCreatedInstancesCount'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RunningInstancesCount'])) {
            $model->runningInstancesCount = $map['RunningInstancesCount'];
        }
        if (isset($map['TotalInstancesCount'])) {
            $model->totalInstancesCount = $map['TotalInstancesCount'];
        }

        return $model;
    }
}
