<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage\publicIpAddresses;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage\securityProtectionTypes;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage\tags;

class commonBandwidthPackage extends Model
{
    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bandwidthPackageId;

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
    public $creationTime;

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
    public $expiredTime;

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
    public $instanceChargeType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var publicIpAddresses
     */
    public $publicIpAddresses;

    /**
     * @var int
     */
    public $ratio;

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
     * @var securityProtectionTypes
     */
    public $securityProtectionTypes;

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
    public $zone;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'bizType' => 'BizType',
        'businessStatus' => 'BusinessStatus',
        'creationTime' => 'CreationTime',
        'deletionProtection' => 'DeletionProtection',
        'description' => 'Description',
        'expiredTime' => 'ExpiredTime',
        'hasReservationData' => 'HasReservationData',
        'ISP' => 'ISP',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
        'name' => 'Name',
        'publicIpAddresses' => 'PublicIpAddresses',
        'ratio' => 'Ratio',
        'regionId' => 'RegionId',
        'reservationActiveTime' => 'ReservationActiveTime',
        'reservationBandwidth' => 'ReservationBandwidth',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
        'reservationOrderType' => 'ReservationOrderType',
        'resourceGroupId' => 'ResourceGroupId',
        'securityProtectionTypes' => 'SecurityProtectionTypes',
        'serviceManaged' => 'ServiceManaged',
        'status' => 'Status',
        'tags' => 'Tags',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        if (null !== $this->publicIpAddresses) {
            $this->publicIpAddresses->validate();
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }

        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->publicIpAddresses) {
            $res['PublicIpAddresses'] = null !== $this->publicIpAddresses ? $this->publicIpAddresses->toArray($noStream) : $this->publicIpAddresses;
        }

        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
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

        if (null !== $this->securityProtectionTypes) {
            $res['SecurityProtectionTypes'] = null !== $this->securityProtectionTypes ? $this->securityProtectionTypes->toArray($noStream) : $this->securityProtectionTypes;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }

        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PublicIpAddresses'])) {
            $model->publicIpAddresses = publicIpAddresses::fromMap($map['PublicIpAddresses']);
        }

        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
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

        if (isset($map['SecurityProtectionTypes'])) {
            $model->securityProtectionTypes = securityProtectionTypes::fromMap($map['SecurityProtectionTypes']);
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

        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
