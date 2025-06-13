<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class CreateSavingsPlanRequest extends Model
{
    /**
     * @var string
     */
    public $chargeType;

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
    public $instanceTypeFamilyGroup;

    /**
     * @var string
     */
    public $offeringType;

    /**
     * @var string
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
        'chargeType' => 'ChargeType',
        'committedAmount' => 'CommittedAmount',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'instanceTypeFamilyGroup' => 'InstanceTypeFamilyGroup',
        'offeringType' => 'OfferingType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'planType' => 'PlanType',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        if (\is_array($this->resourceId)) {
            Model::validateArray($this->resourceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->committedAmount) {
            $res['CommittedAmount'] = $this->committedAmount;
        }

        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }

        if (null !== $this->instanceTypeFamilyGroup) {
            $res['InstanceTypeFamilyGroup'] = $this->instanceTypeFamilyGroup;
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
            if (\is_array($this->resourceId)) {
                $res['ResourceId'] = [];
                $n1 = 0;
                foreach ($this->resourceId as $item1) {
                    $res['ResourceId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CommittedAmount'])) {
            $model->committedAmount = $map['CommittedAmount'];
        }

        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }

        if (isset($map['InstanceTypeFamilyGroup'])) {
            $model->instanceTypeFamilyGroup = $map['InstanceTypeFamilyGroup'];
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
                $model->resourceId = [];
                $n1 = 0;
                foreach ($map['ResourceId'] as $item1) {
                    $model->resourceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
