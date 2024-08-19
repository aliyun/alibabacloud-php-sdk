<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSummaryResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSummaryResponseBody\instanceSummary\regionalInstanceSummaryList;
use AlibabaCloud\Tea\Model;

class instanceSummary extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $alarmSummaryCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $anomalySQLCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $clusterInstancesCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $expiredInstancesCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $immediatelyExpiredInstancesCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $insufficientDiskInstancesCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $overLoadInstancesCount;

    /**
     * @var regionalInstanceSummaryList[]
     */
    public $regionalInstanceSummaryList;

    /**
     * @example 1
     *
     * @var int
     */
    public $runningInstancesCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $tenantInstancesCount;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalInstancesCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalOmsInstancesCount;
    protected $_name = [
        'alarmSummaryCount'                => 'AlarmSummaryCount',
        'anomalySQLCount'                  => 'AnomalySQLCount',
        'clusterInstancesCount'            => 'ClusterInstancesCount',
        'expiredInstancesCount'            => 'ExpiredInstancesCount',
        'immediatelyExpiredInstancesCount' => 'ImmediatelyExpiredInstancesCount',
        'insufficientDiskInstancesCount'   => 'InsufficientDiskInstancesCount',
        'overLoadInstancesCount'           => 'OverLoadInstancesCount',
        'regionalInstanceSummaryList'      => 'RegionalInstanceSummaryList',
        'runningInstancesCount'            => 'RunningInstancesCount',
        'tenantInstancesCount'             => 'TenantInstancesCount',
        'totalInstancesCount'              => 'TotalInstancesCount',
        'totalOmsInstancesCount'           => 'TotalOmsInstancesCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmSummaryCount) {
            $res['AlarmSummaryCount'] = $this->alarmSummaryCount;
        }
        if (null !== $this->anomalySQLCount) {
            $res['AnomalySQLCount'] = $this->anomalySQLCount;
        }
        if (null !== $this->clusterInstancesCount) {
            $res['ClusterInstancesCount'] = $this->clusterInstancesCount;
        }
        if (null !== $this->expiredInstancesCount) {
            $res['ExpiredInstancesCount'] = $this->expiredInstancesCount;
        }
        if (null !== $this->immediatelyExpiredInstancesCount) {
            $res['ImmediatelyExpiredInstancesCount'] = $this->immediatelyExpiredInstancesCount;
        }
        if (null !== $this->insufficientDiskInstancesCount) {
            $res['InsufficientDiskInstancesCount'] = $this->insufficientDiskInstancesCount;
        }
        if (null !== $this->overLoadInstancesCount) {
            $res['OverLoadInstancesCount'] = $this->overLoadInstancesCount;
        }
        if (null !== $this->regionalInstanceSummaryList) {
            $res['RegionalInstanceSummaryList'] = [];
            if (null !== $this->regionalInstanceSummaryList && \is_array($this->regionalInstanceSummaryList)) {
                $n = 0;
                foreach ($this->regionalInstanceSummaryList as $item) {
                    $res['RegionalInstanceSummaryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->runningInstancesCount) {
            $res['RunningInstancesCount'] = $this->runningInstancesCount;
        }
        if (null !== $this->tenantInstancesCount) {
            $res['TenantInstancesCount'] = $this->tenantInstancesCount;
        }
        if (null !== $this->totalInstancesCount) {
            $res['TotalInstancesCount'] = $this->totalInstancesCount;
        }
        if (null !== $this->totalOmsInstancesCount) {
            $res['TotalOmsInstancesCount'] = $this->totalOmsInstancesCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmSummaryCount'])) {
            $model->alarmSummaryCount = $map['AlarmSummaryCount'];
        }
        if (isset($map['AnomalySQLCount'])) {
            $model->anomalySQLCount = $map['AnomalySQLCount'];
        }
        if (isset($map['ClusterInstancesCount'])) {
            $model->clusterInstancesCount = $map['ClusterInstancesCount'];
        }
        if (isset($map['ExpiredInstancesCount'])) {
            $model->expiredInstancesCount = $map['ExpiredInstancesCount'];
        }
        if (isset($map['ImmediatelyExpiredInstancesCount'])) {
            $model->immediatelyExpiredInstancesCount = $map['ImmediatelyExpiredInstancesCount'];
        }
        if (isset($map['InsufficientDiskInstancesCount'])) {
            $model->insufficientDiskInstancesCount = $map['InsufficientDiskInstancesCount'];
        }
        if (isset($map['OverLoadInstancesCount'])) {
            $model->overLoadInstancesCount = $map['OverLoadInstancesCount'];
        }
        if (isset($map['RegionalInstanceSummaryList'])) {
            if (!empty($map['RegionalInstanceSummaryList'])) {
                $model->regionalInstanceSummaryList = [];
                $n                                  = 0;
                foreach ($map['RegionalInstanceSummaryList'] as $item) {
                    $model->regionalInstanceSummaryList[$n++] = null !== $item ? regionalInstanceSummaryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RunningInstancesCount'])) {
            $model->runningInstancesCount = $map['RunningInstancesCount'];
        }
        if (isset($map['TenantInstancesCount'])) {
            $model->tenantInstancesCount = $map['TenantInstancesCount'];
        }
        if (isset($map['TotalInstancesCount'])) {
            $model->totalInstancesCount = $map['TotalInstancesCount'];
        }
        if (isset($map['TotalOmsInstancesCount'])) {
            $model->totalOmsInstancesCount = $map['TotalOmsInstancesCount'];
        }

        return $model;
    }
}
