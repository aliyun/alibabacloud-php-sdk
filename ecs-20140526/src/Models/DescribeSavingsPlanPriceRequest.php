<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeSavingsPlanPriceRequest extends Model
{
    /**
     * @var string
     */
    public $committedAmount;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $offeringType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $resourceId;
    protected $_name = [
        'committedAmount'    => 'CommittedAmount',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'offeringType'       => 'OfferingType',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'planType'           => 'PlanType',
        'regionId'           => 'RegionId',
        'resourceId'         => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->committedAmount) {
            $res['CommittedAmount'] = $this->committedAmount;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->offeringType) {
            $res['OfferingType'] = $this->offeringType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSavingsPlanPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommittedAmount'])) {
            $model->committedAmount = $map['CommittedAmount'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['OfferingType'])) {
            $model->offeringType = $map['OfferingType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }

        return $model;
    }
}
