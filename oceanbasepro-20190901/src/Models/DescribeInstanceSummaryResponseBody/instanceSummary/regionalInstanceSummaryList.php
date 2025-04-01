<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSummaryResponseBody\instanceSummary;

use AlibabaCloud\Dara\Model;

class regionalInstanceSummaryList extends Model
{
    /**
     * @var int
     */
    public $expiredInstancesCount;

    /**
     * @var int
     */
    public $immediatelyExpiredInstancesCount;

    /**
     * @var int
     */
    public $recentCreatedInstancesCount;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $runningInstancesCount;

    /**
     * @var int
     */
    public $totalInstancesCount;
    protected $_name = [
        'expiredInstancesCount' => 'ExpiredInstancesCount',
        'immediatelyExpiredInstancesCount' => 'ImmediatelyExpiredInstancesCount',
        'recentCreatedInstancesCount' => 'RecentCreatedInstancesCount',
        'region' => 'Region',
        'runningInstancesCount' => 'RunningInstancesCount',
        'totalInstancesCount' => 'TotalInstancesCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
