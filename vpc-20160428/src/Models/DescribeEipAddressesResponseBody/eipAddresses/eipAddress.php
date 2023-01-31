<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress\operationLocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress\securityProtectionTypes;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress\tags;
use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @example eip-2zeerraiwb7ujcdvf****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @example 2021-04-23T01:37:38Z
     *
     * @var string
     */
    public $allocationTime;

    /**
     * @example 5
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @example 50
     *
     * @var string
     */
    public $bandwidthPackageBandwidth;

    /**
     * @example cbwp-bp1ego3i4j07ccdvf****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @example CommonBandwidthPackage
     *
     * @var string
     */
    public $bandwidthPackageType;

    /**
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @example 101
     *
     * @var string
     */
    public $eipBandwidth;

    /**
     * @example 2021-05-23T02:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example false
     *
     * @var string
     */
    public $HDMonitorStatus;

    /**
     * @example false
     *
     * @var string
     */
    public $hasReservationData;

    /**
     * @example BGP
     *
     * @var string
     */
    public $ISP;

    /**
     * @example i-bp15zckdt37cdvf****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegionId;

    /**
     * @example EcsInstance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @example 47.75.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example EIP-01
     *
     * @var string
     */
    public $name;

    /**
     * @example public
     *
     * @var string
     */
    public $netmode;

    /**
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @example pippool-2vc0kxcedhquybdsz****
     *
     * @var string
     */
    public $publicIpAddressPoolId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2021-05-23T16:00:00Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @example 12
     *
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @example PayByBandwidth
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @example RENEWCHANGE
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @example rg-acfmxazcdxs****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example false
     *
     * @var bool
     */
    public $secondLimited;

    /**
     * @var securityProtectionTypes
     */
    public $securityProtectionTypes;

    /**
     * @example eipsg-t4nr90yik5oy38xd****
     *
     * @var string
     */
    public $segmentInstanceId;

    /**
     * @example 0
     *
     * @var int
     */
    public $serviceManaged;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'allocationId'                  => 'AllocationId',
        'allocationTime'                => 'AllocationTime',
        'bandwidth'                     => 'Bandwidth',
        'bandwidthPackageBandwidth'     => 'BandwidthPackageBandwidth',
        'bandwidthPackageId'            => 'BandwidthPackageId',
        'bandwidthPackageType'          => 'BandwidthPackageType',
        'businessStatus'                => 'BusinessStatus',
        'chargeType'                    => 'ChargeType',
        'deletionProtection'            => 'DeletionProtection',
        'description'                   => 'Description',
        'eipBandwidth'                  => 'EipBandwidth',
        'expiredTime'                   => 'ExpiredTime',
        'HDMonitorStatus'               => 'HDMonitorStatus',
        'hasReservationData'            => 'HasReservationData',
        'ISP'                           => 'ISP',
        'instanceId'                    => 'InstanceId',
        'instanceRegionId'              => 'InstanceRegionId',
        'instanceType'                  => 'InstanceType',
        'internetChargeType'            => 'InternetChargeType',
        'ipAddress'                     => 'IpAddress',
        'name'                          => 'Name',
        'netmode'                       => 'Netmode',
        'operationLocks'                => 'OperationLocks',
        'publicIpAddressPoolId'         => 'PublicIpAddressPoolId',
        'regionId'                      => 'RegionId',
        'reservationActiveTime'         => 'ReservationActiveTime',
        'reservationBandwidth'          => 'ReservationBandwidth',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
        'reservationOrderType'          => 'ReservationOrderType',
        'resourceGroupId'               => 'ResourceGroupId',
        'secondLimited'                 => 'SecondLimited',
        'securityProtectionTypes'       => 'SecurityProtectionTypes',
        'segmentInstanceId'             => 'SegmentInstanceId',
        'serviceManaged'                => 'ServiceManaged',
        'status'                        => 'Status',
        'tags'                          => 'Tags',
        'vpcId'                         => 'VpcId',
        'zone'                          => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->allocationTime) {
            $res['AllocationTime'] = $this->allocationTime;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthPackageBandwidth) {
            $res['BandwidthPackageBandwidth'] = $this->bandwidthPackageBandwidth;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->bandwidthPackageType) {
            $res['BandwidthPackageType'] = $this->bandwidthPackageType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eipBandwidth) {
            $res['EipBandwidth'] = $this->eipBandwidth;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->HDMonitorStatus) {
            $res['HDMonitorStatus'] = $this->HDMonitorStatus;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceRegionId) {
            $res['InstanceRegionId'] = $this->instanceRegionId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netmode) {
            $res['Netmode'] = $this->netmode;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->publicIpAddressPoolId) {
            $res['PublicIpAddressPoolId'] = $this->publicIpAddressPoolId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservationActiveTime) {
            $res['ReservationActiveTime'] = $this->reservationActiveTime;
        }
        if (null !== $this->reservationBandwidth) {
            $res['ReservationBandwidth'] = $this->reservationBandwidth;
        }
        if (null !== $this->reservationInternetChargeType) {
            $res['ReservationInternetChargeType'] = $this->reservationInternetChargeType;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->secondLimited) {
            $res['SecondLimited'] = $this->secondLimited;
        }
        if (null !== $this->securityProtectionTypes) {
            $res['SecurityProtectionTypes'] = null !== $this->securityProtectionTypes ? $this->securityProtectionTypes->toMap() : null;
        }
        if (null !== $this->segmentInstanceId) {
            $res['SegmentInstanceId'] = $this->segmentInstanceId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
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
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['AllocationTime'])) {
            $model->allocationTime = $map['AllocationTime'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthPackageBandwidth'])) {
            $model->bandwidthPackageBandwidth = $map['BandwidthPackageBandwidth'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['BandwidthPackageType'])) {
            $model->bandwidthPackageType = $map['BandwidthPackageType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EipBandwidth'])) {
            $model->eipBandwidth = $map['EipBandwidth'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['HDMonitorStatus'])) {
            $model->HDMonitorStatus = $map['HDMonitorStatus'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceRegionId'])) {
            $model->instanceRegionId = $map['InstanceRegionId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Netmode'])) {
            $model->netmode = $map['Netmode'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['PublicIpAddressPoolId'])) {
            $model->publicIpAddressPoolId = $map['PublicIpAddressPoolId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservationActiveTime'])) {
            $model->reservationActiveTime = $map['ReservationActiveTime'];
        }
        if (isset($map['ReservationBandwidth'])) {
            $model->reservationBandwidth = $map['ReservationBandwidth'];
        }
        if (isset($map['ReservationInternetChargeType'])) {
            $model->reservationInternetChargeType = $map['ReservationInternetChargeType'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecondLimited'])) {
            $model->secondLimited = $map['SecondLimited'];
        }
        if (isset($map['SecurityProtectionTypes'])) {
            $model->securityProtectionTypes = securityProtectionTypes::fromMap($map['SecurityProtectionTypes']);
        }
        if (isset($map['SegmentInstanceId'])) {
            $model->segmentInstanceId = $map['SegmentInstanceId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
