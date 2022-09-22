<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandCommittedAmountRequest\demandPlan;
use AlibabaCloud\Tea\Model;

class DescribeReservationDemandCommittedAmountRequest extends Model
{
    /**
     * @var demandPlan[]
     */
    public $demandPlan;

    /**
     * @var string
     */
    public $instanceFamily;

    /**
     * @var string
     */
    public $instanceFamilySet;

    /**
     * @var string
     */
    public $offeringType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

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
    public $platform;

    /**
     * @var string
     */
    public $purchaseMethod;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;
    protected $_name = [
        'demandPlan'           => 'DemandPlan',
        'instanceFamily'       => 'InstanceFamily',
        'instanceFamilySet'    => 'InstanceFamilySet',
        'offeringType'         => 'OfferingType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'planType'             => 'PlanType',
        'platform'             => 'Platform',
        'purchaseMethod'       => 'PurchaseMethod',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demandPlan) {
            $res['DemandPlan'] = [];
            if (null !== $this->demandPlan && \is_array($this->demandPlan)) {
                $n = 0;
                foreach ($this->demandPlan as $item) {
                    $res['DemandPlan'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceFamily) {
            $res['InstanceFamily'] = $this->instanceFamily;
        }
        if (null !== $this->instanceFamilySet) {
            $res['InstanceFamilySet'] = $this->instanceFamilySet;
        }
        if (null !== $this->offeringType) {
            $res['OfferingType'] = $this->offeringType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->purchaseMethod) {
            $res['PurchaseMethod'] = $this->purchaseMethod;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReservationDemandCommittedAmountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DemandPlan'])) {
            if (!empty($map['DemandPlan'])) {
                $model->demandPlan = [];
                $n                 = 0;
                foreach ($map['DemandPlan'] as $item) {
                    $model->demandPlan[$n++] = null !== $item ? demandPlan::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceFamily'])) {
            $model->instanceFamily = $map['InstanceFamily'];
        }
        if (isset($map['InstanceFamilySet'])) {
            $model->instanceFamilySet = $map['InstanceFamilySet'];
        }
        if (isset($map['OfferingType'])) {
            $model->offeringType = $map['OfferingType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['PurchaseMethod'])) {
            $model->purchaseMethod = $map['PurchaseMethod'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        return $model;
    }
}
