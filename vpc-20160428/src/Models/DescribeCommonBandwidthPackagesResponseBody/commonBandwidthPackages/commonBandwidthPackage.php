<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage\publicIpAddresses;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage\securityProtectionTypes;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage\tags;
use AlibabaCloud\Tea\Model;

class commonBandwidthPackage extends Model
{
    /**
     * @description The maximum bandwidth of the Internet Shared Bandwidth instance. Unit: Mbit/s.
     *
     * @example 20
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The ID of the Internet Shared Bandwidth instance.
     *
     * @example cbwp-bp1t3sm1ffzmshdki****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The service type of the Internet Shared Bandwidth instance. Valid values:
     *
     *   **CloudBox** The cloud box. Only cloud box users can select this type.
     *   **Default** (default): The general service type.
     *
     * @example CloudBox
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The service status of the Internet Shared Bandwidth instance. Valid values:
     *
     *   **Normal**: The Internet Shared Bandwidth instance runs as expected.
     *   **FinancialLocked**: An overdue payment occurs in the Internet Shared Bandwidth instance
     *   **Unactivated**: The Internet Shared Bandwidth instance is not activated.
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The time when the Internet Shared Bandwidth instance was created. The time is displayed in the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2017-06-28T06:39:20Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether deletion protection is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The description of the Internet Shared Bandwidth instance.
     *
     * @example none
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the Internet Shared Bandwidth instance expired. The time is displayed in the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2019-01-15T03:08:37Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description Indicates whether the information about pending orders is returned. Valid values:
     *
     *   **false**
     *   **true**
     *
     * @example false
     *
     * @var string
     */
    public $hasReservationData;

    /**
     * @description The line type. Valid values:
     *
     *   **BGP**: BGP (Multi-ISP) line The BGP (Multi-ISP) line is supported in all regions.
     *   **BGP_PRO**: BGP (Multi-ISP) Pro line The BGP (Multi-ISP) Pro line is supported in the China (Hong Kong), Singapore (Singapore), Japan (Tokyo), Philippines (Manila), Malaysia (Kuala Lumpur), Indonesia (Jakarta), and Thailand (Bangkok) regions.
     *
     * If you are allowed to use single-ISP bandwidth, one of the following values is returned:
     *
     *   **ChinaTelecom**
     *   **ChinaUnicom**
     *   **ChinaMobile**
     *   **ChinaTelecom_L2**
     *   **ChinaUnicom_L2**
     *   **ChinaMobile_L2**
     *
     * If your services are deployed in China East 1 Finance, **BGP_FinanceCloud** is returned.
     * @example BGP
     *
     * @var string
     */
    public $ISP;

    /**
     * @description The billing method of the Internet Shared Bandwidth instance. Valid value:
     *
     **PostPaid**: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The metering method of the Internet Shared Bandwidth instance. Valid value:
     *
     **PayByTraffic**
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The name of the Internet Shared Bandwidth instance.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The elastic IP addresses (EIPs) that are associated with the Internet Shared Bandwidth instance.
     *
     * @var publicIpAddresses
     */
    public $publicIpAddresses;

    /**
     * @description The percentage of the minimum bandwidth commitment. Only **20** is returned.
     *
     * >  This parameter is supported only on the Alibaba Cloud China site.
     * @example 20
     *
     * @var int
     */
    public $ratio;

    /**
     * @description The ID of the region where the Internet Shared Bandwidth instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the renewal took effect. The time is displayed in the `YYYY-MM-DDThh:mm:ssZ` format.
     *
     * @example 2018-08-30T16:00:00Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @description The new maximum bandwidth after the configurations are changed. Unit: Mbit/s.
     *
     * @example 1000
     *
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @description The metering method after the configurations are changed. Valid value:
     *
     **PayByTraffic**
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @description The renewal method. Valid values:
     *
     *   **RENEWCHANGE**: renewal with a specification change
     *   **TEMP_UPGRADE**: renewal with a temporary upgrade
     *   **UPGRADE**: renewal with an upgrade
     *
     * @example RENEWCHANGE
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The editions of Anti-DDoS.
     *
     *   If this parameter is empty, Anti-DDoS Origin Basic is enabled.
     *   If **AntiDDoS_Enhanced** is returned, Anti-DDoS Pro/Premium is enabled.
     *
     * @var securityProtectionTypes
     */
    public $securityProtectionTypes;

    /**
     * @description Indicates whether the resource is created by the service account. Valid values:
     *
     *   **0**: The resource is not created by the service account.
     *   **1**: The resource is created by the service account.
     *
     * @example 1
     *
     * @var int
     */
    public $serviceManaged;

    /**
     * @description The status of the Internet Shared Bandwidth instance. Valid values:
     *
     *   **Available**: The Internet Shared Bandwidth instance is available.
     *   **Modifying**: The Internet Shared Bandwidth instance is being modified.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag that is added to the Internet Shared Bandwidth instance.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The zone of the Internet Shared Bandwidth instance. This parameter is returned only when BizType is set to CloudBox. If BizType is set to Default, an empty value is returned.
     *
     * @example ap-southeast-1-lzdvn-cb
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'bandwidth'                     => 'Bandwidth',
        'bandwidthPackageId'            => 'BandwidthPackageId',
        'bizType'                       => 'BizType',
        'businessStatus'                => 'BusinessStatus',
        'creationTime'                  => 'CreationTime',
        'deletionProtection'            => 'DeletionProtection',
        'description'                   => 'Description',
        'expiredTime'                   => 'ExpiredTime',
        'hasReservationData'            => 'HasReservationData',
        'ISP'                           => 'ISP',
        'instanceChargeType'            => 'InstanceChargeType',
        'internetChargeType'            => 'InternetChargeType',
        'name'                          => 'Name',
        'publicIpAddresses'             => 'PublicIpAddresses',
        'ratio'                         => 'Ratio',
        'regionId'                      => 'RegionId',
        'reservationActiveTime'         => 'ReservationActiveTime',
        'reservationBandwidth'          => 'ReservationBandwidth',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
        'reservationOrderType'          => 'ReservationOrderType',
        'resourceGroupId'               => 'ResourceGroupId',
        'securityProtectionTypes'       => 'SecurityProtectionTypes',
        'serviceManaged'                => 'ServiceManaged',
        'status'                        => 'Status',
        'tags'                          => 'Tags',
        'zone'                          => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['PublicIpAddresses'] = null !== $this->publicIpAddresses ? $this->publicIpAddresses->toMap() : null;
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
            $res['SecurityProtectionTypes'] = null !== $this->securityProtectionTypes ? $this->securityProtectionTypes->toMap() : null;
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
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commonBandwidthPackage
     */
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
