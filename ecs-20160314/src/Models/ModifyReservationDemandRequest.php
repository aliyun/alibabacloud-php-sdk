<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyReservationDemandRequest\privatePoolOptions;
use AlibabaCloud\SDK\Ecs\V20160314\Models\ModifyReservationDemandRequest\tag;
use AlibabaCloud\Tea\Model;

class ModifyReservationDemandRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $confirmType;

    /**
     * @var bool
     */
    public $couponAuto;

    /**
     * @var string
     */
    public $couponType;

    /**
     * @var string
     */
    public $demandId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $instanceAmount;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var int
     */
    public $instanceCpuCoreCount;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $instanceTypes;

    /**
     * @var string
     */
    public $matchCriteria;

    /**
     * @var string
     */
    public $name;

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
    public $phoneNumber;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var privatePoolOptions[]
     */
    public $privatePoolOptions;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reservedInstanceDescription;

    /**
     * @var string
     */
    public $reservedInstanceGroupId;

    /**
     * @var string
     */
    public $reservedInstanceName;

    /**
     * @var string
     */
    public $reservedInstanceOfferingType;

    /**
     * @var string
     */
    public $reservedInstanceScope;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceSupplyType;

    /**
     * @var string
     */
    public $savingPlanDescription;

    /**
     * @var float
     */
    public $savingPlanHourFee;

    /**
     * @var string
     */
    public $savingPlanId;

    /**
     * @var string
     */
    public $savingPlanInstanceTypeFamilyGroup;

    /**
     * @var string
     */
    public $savingPlanName;

    /**
     * @var string
     */
    public $savingPlanPayMode;

    /**
     * @var string
     */
    public $savingPlanSavingType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'clientToken'                       => 'ClientToken',
        'confirmType'                       => 'ConfirmType',
        'couponAuto'                        => 'CouponAuto',
        'couponType'                        => 'CouponType',
        'demandId'                          => 'DemandId',
        'description'                       => 'Description',
        'instanceAmount'                    => 'InstanceAmount',
        'instanceChargeType'                => 'InstanceChargeType',
        'instanceCpuCoreCount'              => 'InstanceCpuCoreCount',
        'instanceTypeFamily'                => 'InstanceTypeFamily',
        'instanceTypes'                     => 'InstanceTypes',
        'matchCriteria'                     => 'MatchCriteria',
        'name'                              => 'Name',
        'period'                            => 'Period',
        'periodUnit'                        => 'PeriodUnit',
        'phoneNumber'                       => 'PhoneNumber',
        'platform'                          => 'Platform',
        'privatePoolOptions'                => 'PrivatePoolOptions',
        'productType'                       => 'ProductType',
        'regionId'                          => 'RegionId',
        'reservedInstanceDescription'       => 'ReservedInstanceDescription',
        'reservedInstanceGroupId'           => 'ReservedInstanceGroupId',
        'reservedInstanceName'              => 'ReservedInstanceName',
        'reservedInstanceOfferingType'      => 'ReservedInstanceOfferingType',
        'reservedInstanceScope'             => 'ReservedInstanceScope',
        'resourceOwnerId'                   => 'ResourceOwnerId',
        'resourceSupplyType'                => 'ResourceSupplyType',
        'savingPlanDescription'             => 'SavingPlanDescription',
        'savingPlanHourFee'                 => 'SavingPlanHourFee',
        'savingPlanId'                      => 'SavingPlanId',
        'savingPlanInstanceTypeFamilyGroup' => 'SavingPlanInstanceTypeFamilyGroup',
        'savingPlanName'                    => 'SavingPlanName',
        'savingPlanPayMode'                 => 'SavingPlanPayMode',
        'savingPlanSavingType'              => 'SavingPlanSavingType',
        'startTime'                         => 'StartTime',
        'tag'                               => 'Tag',
        'zoneIds'                           => 'ZoneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->confirmType) {
            $res['ConfirmType'] = $this->confirmType;
        }
        if (null !== $this->couponAuto) {
            $res['CouponAuto'] = $this->couponAuto;
        }
        if (null !== $this->couponType) {
            $res['CouponType'] = $this->couponType;
        }
        if (null !== $this->demandId) {
            $res['DemandId'] = $this->demandId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceCpuCoreCount) {
            $res['InstanceCpuCoreCount'] = $this->instanceCpuCoreCount;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = $this->instanceTypes;
        }
        if (null !== $this->matchCriteria) {
            $res['MatchCriteria'] = $this->matchCriteria;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->privatePoolOptions) {
            $res['PrivatePoolOptions'] = [];
            if (null !== $this->privatePoolOptions && \is_array($this->privatePoolOptions)) {
                $n = 0;
                foreach ($this->privatePoolOptions as $item) {
                    $res['PrivatePoolOptions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservedInstanceDescription) {
            $res['ReservedInstanceDescription'] = $this->reservedInstanceDescription;
        }
        if (null !== $this->reservedInstanceGroupId) {
            $res['ReservedInstanceGroupId'] = $this->reservedInstanceGroupId;
        }
        if (null !== $this->reservedInstanceName) {
            $res['ReservedInstanceName'] = $this->reservedInstanceName;
        }
        if (null !== $this->reservedInstanceOfferingType) {
            $res['ReservedInstanceOfferingType'] = $this->reservedInstanceOfferingType;
        }
        if (null !== $this->reservedInstanceScope) {
            $res['ReservedInstanceScope'] = $this->reservedInstanceScope;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceSupplyType) {
            $res['ResourceSupplyType'] = $this->resourceSupplyType;
        }
        if (null !== $this->savingPlanDescription) {
            $res['SavingPlanDescription'] = $this->savingPlanDescription;
        }
        if (null !== $this->savingPlanHourFee) {
            $res['SavingPlanHourFee'] = $this->savingPlanHourFee;
        }
        if (null !== $this->savingPlanId) {
            $res['SavingPlanId'] = $this->savingPlanId;
        }
        if (null !== $this->savingPlanInstanceTypeFamilyGroup) {
            $res['SavingPlanInstanceTypeFamilyGroup'] = $this->savingPlanInstanceTypeFamilyGroup;
        }
        if (null !== $this->savingPlanName) {
            $res['SavingPlanName'] = $this->savingPlanName;
        }
        if (null !== $this->savingPlanPayMode) {
            $res['SavingPlanPayMode'] = $this->savingPlanPayMode;
        }
        if (null !== $this->savingPlanSavingType) {
            $res['SavingPlanSavingType'] = $this->savingPlanSavingType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyReservationDemandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConfirmType'])) {
            $model->confirmType = $map['ConfirmType'];
        }
        if (isset($map['CouponAuto'])) {
            $model->couponAuto = $map['CouponAuto'];
        }
        if (isset($map['CouponType'])) {
            $model->couponType = $map['CouponType'];
        }
        if (isset($map['DemandId'])) {
            $model->demandId = $map['DemandId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceCpuCoreCount'])) {
            $model->instanceCpuCoreCount = $map['InstanceCpuCoreCount'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = $map['InstanceTypes'];
        }
        if (isset($map['MatchCriteria'])) {
            $model->matchCriteria = $map['MatchCriteria'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['PrivatePoolOptions'])) {
            if (!empty($map['PrivatePoolOptions'])) {
                $model->privatePoolOptions = [];
                $n                         = 0;
                foreach ($map['PrivatePoolOptions'] as $item) {
                    $model->privatePoolOptions[$n++] = null !== $item ? privatePoolOptions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservedInstanceDescription'])) {
            $model->reservedInstanceDescription = $map['ReservedInstanceDescription'];
        }
        if (isset($map['ReservedInstanceGroupId'])) {
            $model->reservedInstanceGroupId = $map['ReservedInstanceGroupId'];
        }
        if (isset($map['ReservedInstanceName'])) {
            $model->reservedInstanceName = $map['ReservedInstanceName'];
        }
        if (isset($map['ReservedInstanceOfferingType'])) {
            $model->reservedInstanceOfferingType = $map['ReservedInstanceOfferingType'];
        }
        if (isset($map['ReservedInstanceScope'])) {
            $model->reservedInstanceScope = $map['ReservedInstanceScope'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceSupplyType'])) {
            $model->resourceSupplyType = $map['ResourceSupplyType'];
        }
        if (isset($map['SavingPlanDescription'])) {
            $model->savingPlanDescription = $map['SavingPlanDescription'];
        }
        if (isset($map['SavingPlanHourFee'])) {
            $model->savingPlanHourFee = $map['SavingPlanHourFee'];
        }
        if (isset($map['SavingPlanId'])) {
            $model->savingPlanId = $map['SavingPlanId'];
        }
        if (isset($map['SavingPlanInstanceTypeFamilyGroup'])) {
            $model->savingPlanInstanceTypeFamilyGroup = $map['SavingPlanInstanceTypeFamilyGroup'];
        }
        if (isset($map['SavingPlanName'])) {
            $model->savingPlanName = $map['SavingPlanName'];
        }
        if (isset($map['SavingPlanPayMode'])) {
            $model->savingPlanPayMode = $map['SavingPlanPayMode'];
        }
        if (isset($map['SavingPlanSavingType'])) {
            $model->savingPlanSavingType = $map['SavingPlanSavingType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }

        return $model;
    }
}
