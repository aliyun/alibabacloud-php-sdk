<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeCorePackageListResponseBody\corePackageInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeCorePackageListResponseBody\corePackageInfo\corePackageList\remainingPeriods;

class corePackageList extends Model
{
    /**
     * @var float
     */
    public $assignedCoreHours;

    /**
     * @var mixed[]
     */
    public $deductionInstanceList;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $periodEndTime;

    /**
     * @var string
     */
    public $periodStartTime;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var float
     */
    public $remainingCoreHours;

    /**
     * @var remainingPeriods[]
     */
    public $remainingPeriods;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var float
     */
    public $totalCoreHours;

    /**
     * @var float
     */
    public $unassignedCoreHours;

    /**
     * @var float
     */
    public $usedCoreHours;
    protected $_name = [
        'assignedCoreHours' => 'AssignedCoreHours',
        'deductionInstanceList' => 'DeductionInstanceList',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'periodEndTime' => 'PeriodEndTime',
        'periodStartTime' => 'PeriodStartTime',
        'productType' => 'ProductType',
        'remainingCoreHours' => 'RemainingCoreHours',
        'remainingPeriods' => 'RemainingPeriods',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'totalCoreHours' => 'TotalCoreHours',
        'unassignedCoreHours' => 'UnassignedCoreHours',
        'usedCoreHours' => 'UsedCoreHours',
    ];

    public function validate()
    {
        if (\is_array($this->deductionInstanceList)) {
            Model::validateArray($this->deductionInstanceList);
        }
        if (\is_array($this->remainingPeriods)) {
            Model::validateArray($this->remainingPeriods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedCoreHours) {
            $res['AssignedCoreHours'] = $this->assignedCoreHours;
        }

        if (null !== $this->deductionInstanceList) {
            if (\is_array($this->deductionInstanceList)) {
                $res['DeductionInstanceList'] = [];
                $n1 = 0;
                foreach ($this->deductionInstanceList as $item1) {
                    $res['DeductionInstanceList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->periodEndTime) {
            $res['PeriodEndTime'] = $this->periodEndTime;
        }

        if (null !== $this->periodStartTime) {
            $res['PeriodStartTime'] = $this->periodStartTime;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->remainingCoreHours) {
            $res['RemainingCoreHours'] = $this->remainingCoreHours;
        }

        if (null !== $this->remainingPeriods) {
            if (\is_array($this->remainingPeriods)) {
                $res['RemainingPeriods'] = [];
                $n1 = 0;
                foreach ($this->remainingPeriods as $item1) {
                    $res['RemainingPeriods'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalCoreHours) {
            $res['TotalCoreHours'] = $this->totalCoreHours;
        }

        if (null !== $this->unassignedCoreHours) {
            $res['UnassignedCoreHours'] = $this->unassignedCoreHours;
        }

        if (null !== $this->usedCoreHours) {
            $res['UsedCoreHours'] = $this->usedCoreHours;
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
        if (isset($map['AssignedCoreHours'])) {
            $model->assignedCoreHours = $map['AssignedCoreHours'];
        }

        if (isset($map['DeductionInstanceList'])) {
            if (!empty($map['DeductionInstanceList'])) {
                $model->deductionInstanceList = [];
                $n1 = 0;
                foreach ($map['DeductionInstanceList'] as $item1) {
                    $model->deductionInstanceList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PeriodEndTime'])) {
            $model->periodEndTime = $map['PeriodEndTime'];
        }

        if (isset($map['PeriodStartTime'])) {
            $model->periodStartTime = $map['PeriodStartTime'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['RemainingCoreHours'])) {
            $model->remainingCoreHours = $map['RemainingCoreHours'];
        }

        if (isset($map['RemainingPeriods'])) {
            if (!empty($map['RemainingPeriods'])) {
                $model->remainingPeriods = [];
                $n1 = 0;
                foreach ($map['RemainingPeriods'] as $item1) {
                    $model->remainingPeriods[$n1] = remainingPeriods::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalCoreHours'])) {
            $model->totalCoreHours = $map['TotalCoreHours'];
        }

        if (isset($map['UnassignedCoreHours'])) {
            $model->unassignedCoreHours = $map['UnassignedCoreHours'];
        }

        if (isset($map['UsedCoreHours'])) {
            $model->usedCoreHours = $map['UsedCoreHours'];
        }

        return $model;
    }
}
