<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress\availableRegions;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress\operationLocks;
use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $reservationOrderType;

    /**
     * @var string
     */
    public $allocationTime;

    /**
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @var string
     */
    public $netmode;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $descritpion;

    /**
     * @var string
     */
    public $segmentInstanceId;

    /**
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @var string
     */
    public $eipBandwidth;

    /**
     * @var availableRegions
     */
    public $availableRegions;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $instanceRegionId;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $secondLimited;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $HDMonitorStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $bandwidthPackageBandwidth;

    /**
     * @var int
     */
    public $serviceManaged;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $bandwidthPackageType;

    /**
     * @var string
     */
    public $hasReservationData;

    /**
     * @var string
     */
    public $ISP;
    protected $_name = [
        'reservationActiveTime'         => 'ReservationActiveTime',
        'status'                        => 'Status',
        'reservationOrderType'          => 'ReservationOrderType',
        'allocationTime'                => 'AllocationTime',
        'operationLocks'                => 'OperationLocks',
        'netmode'                       => 'Netmode',
        'chargeType'                    => 'ChargeType',
        'descritpion'                   => 'Descritpion',
        'segmentInstanceId'             => 'SegmentInstanceId',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
        'bandwidthPackageId'            => 'BandwidthPackageId',
        'ipAddress'                     => 'IpAddress',
        'bandwidth'                     => 'Bandwidth',
        'reservationBandwidth'          => 'ReservationBandwidth',
        'eipBandwidth'                  => 'EipBandwidth',
        'availableRegions'              => 'AvailableRegions',
        'name'                          => 'Name',
        'instanceRegionId'              => 'InstanceRegionId',
        'deletionProtection'            => 'DeletionProtection',
        'instanceId'                    => 'InstanceId',
        'secondLimited'                 => 'SecondLimited',
        'instanceType'                  => 'InstanceType',
        'HDMonitorStatus'               => 'HDMonitorStatus',
        'regionId'                      => 'RegionId',
        'bandwidthPackageBandwidth'     => 'BandwidthPackageBandwidth',
        'serviceManaged'                => 'ServiceManaged',
        'expiredTime'                   => 'ExpiredTime',
        'resourceGroupId'               => 'ResourceGroupId',
        'allocationId'                  => 'AllocationId',
        'internetChargeType'            => 'InternetChargeType',
        'businessStatus'                => 'BusinessStatus',
        'bandwidthPackageType'          => 'BandwidthPackageType',
        'hasReservationData'            => 'HasReservationData',
        'ISP'                           => 'ISP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservationActiveTime) {
            $res['ReservationActiveTime'] = $this->reservationActiveTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
        }
        if (null !== $this->allocationTime) {
            $res['AllocationTime'] = $this->allocationTime;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->netmode) {
            $res['Netmode'] = $this->netmode;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->descritpion) {
            $res['Descritpion'] = $this->descritpion;
        }
        if (null !== $this->segmentInstanceId) {
            $res['SegmentInstanceId'] = $this->segmentInstanceId;
        }
        if (null !== $this->reservationInternetChargeType) {
            $res['ReservationInternetChargeType'] = $this->reservationInternetChargeType;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->reservationBandwidth) {
            $res['ReservationBandwidth'] = $this->reservationBandwidth;
        }
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->availableRegions) {
            $res['AvailableRegions'] = null !== $this->availableRegions ? $this->availableRegions->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->instanceRegionId) {
            $res['InstanceRegionId'] = $this->instanceRegionId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->secondLimited) {
            $res['SecondLimited'] = $this->secondLimited;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->HDMonitorStatus) {
            $res['HDMonitorStatus'] = $this->HDMonitorStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->bandwidthPackageBandwidth) {
            $res['BandwidthPackageBandwidth'] = $this->bandwidthPackageBandwidth;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->bandwidthPackageType) {
            $res['BandwidthPackageType'] = $this->bandwidthPackageType;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservationActiveTime'])) {
            $model->reservationActiveTime = $map['ReservationActiveTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
        }
        if (isset($map['AllocationTime'])) {
            $model->allocationTime = $map['AllocationTime'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['Netmode'])) {
            $model->netmode = $map['Netmode'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Descritpion'])) {
            $model->descritpion = $map['Descritpion'];
        }
        if (isset($map['SegmentInstanceId'])) {
            $model->segmentInstanceId = $map['SegmentInstanceId'];
        }
        if (isset($map['ReservationInternetChargeType'])) {
            $model->reservationInternetChargeType = $map['ReservationInternetChargeType'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ReservationBandwidth'])) {
            $model->reservationBandwidth = $map['ReservationBandwidth'];
        }
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['AvailableRegions'])) {
            $model->availableRegions = availableRegions::fromMap($map['AvailableRegions']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['InstanceRegionId'])) {
            $model->instanceRegionId = $map['InstanceRegionId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SecondLimited'])) {
            $model->secondLimited = $map['SecondLimited'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['HDMonitorStatus'])) {
            $model->HDMonitorStatus = $map['HDMonitorStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['BandwidthPackageBandwidth'])) {
            $model->bandwidthPackageBandwidth = $map['BandwidthPackageBandwidth'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['BandwidthPackageType'])) {
            $model->bandwidthPackageType = $map['BandwidthPackageType'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }

        return $model;
    }
}
