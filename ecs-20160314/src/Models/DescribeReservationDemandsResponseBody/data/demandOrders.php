<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandsResponseBody\data;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandsResponseBody\data\demandOrders\recommendResource;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandsResponseBody\data\demandOrders\reservationResource;
use AlibabaCloud\Tea\Model;

class demandOrders extends Model
{
    /**
     * @var string
     */
    public $confirmType;

    /**
     * @var string
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
     * @var string
     */
    public $productType;

    /**
     * @var recommendResource
     */
    public $recommendResource;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var reservationResource
     */
    public $reservationResource;

    /**
     * @var string
     */
    public $reservedInstanceDescription;

    /**
     * @var string
     */
    public $reservedInstanceId;

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
    public $savingPlanSpecType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'confirmType'                       => 'ConfirmType',
        'couponAuto'                        => 'CouponAuto',
        'couponType'                        => 'CouponType',
        'demandId'                          => 'DemandId',
        'description'                       => 'Description',
        'instanceChargeType'                => 'InstanceChargeType',
        'instanceCpuCoreCount'              => 'InstanceCpuCoreCount',
        'instanceTypes'                     => 'InstanceTypes',
        'matchCriteria'                     => 'MatchCriteria',
        'name'                              => 'Name',
        'period'                            => 'Period',
        'periodUnit'                        => 'PeriodUnit',
        'phoneNumber'                       => 'PhoneNumber',
        'platform'                          => 'Platform',
        'productType'                       => 'ProductType',
        'recommendResource'                 => 'RecommendResource',
        'regionId'                          => 'RegionId',
        'reservationResource'               => 'ReservationResource',
        'reservedInstanceDescription'       => 'ReservedInstanceDescription',
        'reservedInstanceId'                => 'ReservedInstanceId',
        'reservedInstanceName'              => 'ReservedInstanceName',
        'reservedInstanceOfferingType'      => 'ReservedInstanceOfferingType',
        'resourceSupplyType'                => 'ResourceSupplyType',
        'savingPlanDescription'             => 'SavingPlanDescription',
        'savingPlanHourFee'                 => 'SavingPlanHourFee',
        'savingPlanId'                      => 'SavingPlanId',
        'savingPlanInstanceTypeFamilyGroup' => 'SavingPlanInstanceTypeFamilyGroup',
        'savingPlanName'                    => 'SavingPlanName',
        'savingPlanPayMode'                 => 'SavingPlanPayMode',
        'savingPlanSavingType'              => 'SavingPlanSavingType',
        'savingPlanSpecType'                => 'SavingPlanSpecType',
        'startTime'                         => 'StartTime',
        'status'                            => 'Status',
        'zoneIds'                           => 'ZoneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceCpuCoreCount) {
            $res['InstanceCpuCoreCount'] = $this->instanceCpuCoreCount;
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
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->recommendResource) {
            $res['RecommendResource'] = null !== $this->recommendResource ? $this->recommendResource->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservationResource) {
            $res['ReservationResource'] = null !== $this->reservationResource ? $this->reservationResource->toMap() : null;
        }
        if (null !== $this->reservedInstanceDescription) {
            $res['ReservedInstanceDescription'] = $this->reservedInstanceDescription;
        }
        if (null !== $this->reservedInstanceId) {
            $res['ReservedInstanceId'] = $this->reservedInstanceId;
        }
        if (null !== $this->reservedInstanceName) {
            $res['ReservedInstanceName'] = $this->reservedInstanceName;
        }
        if (null !== $this->reservedInstanceOfferingType) {
            $res['ReservedInstanceOfferingType'] = $this->reservedInstanceOfferingType;
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
        if (null !== $this->savingPlanSpecType) {
            $res['SavingPlanSpecType'] = $this->savingPlanSpecType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return demandOrders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceCpuCoreCount'])) {
            $model->instanceCpuCoreCount = $map['InstanceCpuCoreCount'];
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
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RecommendResource'])) {
            $model->recommendResource = recommendResource::fromMap($map['RecommendResource']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservationResource'])) {
            $model->reservationResource = reservationResource::fromMap($map['ReservationResource']);
        }
        if (isset($map['ReservedInstanceDescription'])) {
            $model->reservedInstanceDescription = $map['ReservedInstanceDescription'];
        }
        if (isset($map['ReservedInstanceId'])) {
            $model->reservedInstanceId = $map['ReservedInstanceId'];
        }
        if (isset($map['ReservedInstanceName'])) {
            $model->reservedInstanceName = $map['ReservedInstanceName'];
        }
        if (isset($map['ReservedInstanceOfferingType'])) {
            $model->reservedInstanceOfferingType = $map['ReservedInstanceOfferingType'];
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
        if (isset($map['SavingPlanSpecType'])) {
            $model->savingPlanSpecType = $map['SavingPlanSpecType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }

        return $model;
    }
}
