<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribeCorePackageListResponseBody\corePackageInfo\corePackageList;

use AlibabaCloud\Dara\Model;

class remainingPeriods extends Model
{
    /**
     * @var string
     */
    public $periodEndTime;

    /**
     * @var string
     */
    public $periodStartTime;

    /**
     * @var float
     */
    public $remainingCoreHours;

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
    public $usedCoreHours;
    protected $_name = [
        'periodEndTime' => 'PeriodEndTime',
        'periodStartTime' => 'PeriodStartTime',
        'remainingCoreHours' => 'RemainingCoreHours',
        'status' => 'Status',
        'totalCoreHours' => 'TotalCoreHours',
        'usedCoreHours' => 'UsedCoreHours',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->periodEndTime) {
            $res['PeriodEndTime'] = $this->periodEndTime;
        }

        if (null !== $this->periodStartTime) {
            $res['PeriodStartTime'] = $this->periodStartTime;
        }

        if (null !== $this->remainingCoreHours) {
            $res['RemainingCoreHours'] = $this->remainingCoreHours;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalCoreHours) {
            $res['TotalCoreHours'] = $this->totalCoreHours;
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
        if (isset($map['PeriodEndTime'])) {
            $model->periodEndTime = $map['PeriodEndTime'];
        }

        if (isset($map['PeriodStartTime'])) {
            $model->periodStartTime = $map['PeriodStartTime'];
        }

        if (isset($map['RemainingCoreHours'])) {
            $model->remainingCoreHours = $map['RemainingCoreHours'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalCoreHours'])) {
            $model->totalCoreHours = $map['TotalCoreHours'];
        }

        if (isset($map['UsedCoreHours'])) {
            $model->usedCoreHours = $map['UsedCoreHours'];
        }

        return $model;
    }
}
