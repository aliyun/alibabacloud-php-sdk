<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceSummaryResponseBody\instanceSummary\regionalInstanceSummaryList;

class instanceSummary extends Model
{
    /**
     * @var int
     */
    public $alarmSummaryCount;

    /**
     * @var int
     */
    public $anomalySQLCount;

    /**
     * @var int
     */
    public $clusterInstancesCount;

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
    public $insufficientDiskInstancesCount;

    /**
     * @var int
     */
    public $overLoadInstancesCount;

    /**
     * @var regionalInstanceSummaryList[]
     */
    public $regionalInstanceSummaryList;

    /**
     * @var int
     */
    public $runningInstancesCount;

    /**
     * @var int
     */
    public $tenantInstancesCount;

    /**
     * @var int
     */
    public $totalInstancesCount;

    /**
     * @var int
     */
    public $totalOmsInstancesCount;
    protected $_name = [
        'alarmSummaryCount' => 'AlarmSummaryCount',
        'anomalySQLCount' => 'AnomalySQLCount',
        'clusterInstancesCount' => 'ClusterInstancesCount',
        'expiredInstancesCount' => 'ExpiredInstancesCount',
        'immediatelyExpiredInstancesCount' => 'ImmediatelyExpiredInstancesCount',
        'insufficientDiskInstancesCount' => 'InsufficientDiskInstancesCount',
        'overLoadInstancesCount' => 'OverLoadInstancesCount',
        'regionalInstanceSummaryList' => 'RegionalInstanceSummaryList',
        'runningInstancesCount' => 'RunningInstancesCount',
        'tenantInstancesCount' => 'TenantInstancesCount',
        'totalInstancesCount' => 'TotalInstancesCount',
        'totalOmsInstancesCount' => 'TotalOmsInstancesCount',
    ];

    public function validate()
    {
        if (\is_array($this->regionalInstanceSummaryList)) {
            Model::validateArray($this->regionalInstanceSummaryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->regionalInstanceSummaryList)) {
                $res['RegionalInstanceSummaryList'] = [];
                $n1 = 0;
                foreach ($this->regionalInstanceSummaryList as $item1) {
                    $res['RegionalInstanceSummaryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['RegionalInstanceSummaryList'] as $item1) {
                    $model->regionalInstanceSummaryList[$n1] = regionalInstanceSummaryList::fromMap($item1);
                    ++$n1;
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
