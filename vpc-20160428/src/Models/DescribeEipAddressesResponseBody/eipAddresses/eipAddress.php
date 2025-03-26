<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress\operationLocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress\securityProtectionTypes;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress\tags;

class eipAddress extends Model
{
    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $allocationTime;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bandwidthPackageBandwidth;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $bandwidthPackageType;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eipBandwidth;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $HDMonitorStatus;

    /**
     * @var string
     */
    public $hasReservationData;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceRegionId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $netmode;

    /**
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $publicIpAddressPoolId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @var string
     */
    public $reservationOrderType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $secondLimited;

    /**
     * @var securityProtectionTypes
     */
    public $securityProtectionTypes;

    /**
     * @var string
     */
    public $segmentInstanceId;

    /**
     * @var int
     */
    public $serviceID;

    /**
     * @var int
     */
    public $serviceManaged;

    /**
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
        'allocationId' => 'AllocationId',
        'allocationTime' => 'AllocationTime',
        'bandwidth' => 'Bandwidth',
        'bandwidthPackageBandwidth' => 'BandwidthPackageBandwidth',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'bandwidthPackageType' => 'BandwidthPackageType',
        'bizType' => 'BizType',
        'businessStatus' => 'BusinessStatus',
        'chargeType' => 'ChargeType',
        'deletionProtection' => 'DeletionProtection',
        'description' => 'Description',
        'eipBandwidth' => 'EipBandwidth',
        'expiredTime' => 'ExpiredTime',
        'HDMonitorStatus' => 'HDMonitorStatus',
        'hasReservationData' => 'HasReservationData',
        'ISP' => 'ISP',
        'instanceId' => 'InstanceId',
        'instanceRegionId' => 'InstanceRegionId',
        'instanceType' => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'ipAddress' => 'IpAddress',
        'mode' => 'Mode',
        'name' => 'Name',
        'netmode' => 'Netmode',
        'operationLocks' => 'OperationLocks',
        'privateIpAddress' => 'PrivateIpAddress',
        'publicIpAddressPoolId' => 'PublicIpAddressPoolId',
        'regionId' => 'RegionId',
        'reservationActiveTime' => 'ReservationActiveTime',
        'reservationBandwidth' => 'ReservationBandwidth',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
        'reservationOrderType' => 'ReservationOrderType',
        'resourceGroupId' => 'ResourceGroupId',
        'secondLimited' => 'SecondLimited',
        'securityProtectionTypes' => 'SecurityProtectionTypes',
        'segmentInstanceId' => 'SegmentInstanceId',
        'serviceID' => 'ServiceID',
        'serviceManaged' => 'ServiceManaged',
        'status' => 'Status',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        if (null !== $this->operationLocks) {
            $this->operationLocks->validate();
        }
        if (null !== $this->securityProtectionTypes) {
            $this->securityProtectionTypes->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
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

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->netmode) {
            $res['Netmode'] = $this->netmode;
        }

        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toArray($noStream) : $this->operationLocks;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
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
            $res['SecurityProtectionTypes'] = null !== $this->securityProtectionTypes ? $this->securityProtectionTypes->toArray($noStream) : $this->securityProtectionTypes;
        }

        if (null !== $this->segmentInstanceId) {
            $res['SegmentInstanceId'] = $this->segmentInstanceId;
        }

        if (null !== $this->serviceID) {
            $res['ServiceID'] = $this->serviceID;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
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

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
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

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
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

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
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

        if (isset($map['ServiceID'])) {
            $model->serviceID = $map['ServiceID'];
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
