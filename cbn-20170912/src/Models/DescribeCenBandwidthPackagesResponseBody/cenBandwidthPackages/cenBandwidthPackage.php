<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\cenIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\orginInterRegionBandwidthLimits;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\tags;
use AlibabaCloud\Tea\Model;

class cenBandwidthPackage extends Model
{
    /**
     * @description The maximum bandwidth of the bandwidth plan.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The billing method of the bandwidth plan.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $bandwidthPackageChargeType;

    /**
     * @description The status of the bandwidth plan. Valid values:
     *
     *   **Normal**: running as expected.
     *   **FinancialLocked**: locked due to overdue payments.
     *   **SecurityLocked**: locked due to security reasons
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The ID of the bandwidth plan.
     *
     * @example cenbwp-4c2zaavbvh5x****
     *
     * @var string
     */
    public $cenBandwidthPackageId;

    /**
     * @description A list of CEN instances that are associated with the bandwidth plan.
     *
     * @var cenIds
     */
    public $cenIds;

    /**
     * @description The time when the bandwidth plan was created. The time is displayed in the ISO8601 standard in the YYYY-MM-DDThh:mmZ format.
     *
     * @example 2021-02-01T11:14Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the bandwidth plan.
     *
     * @example cen
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the bandwidth plan expires.
     *
     * @example 2021-09-08T16:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The ID of the area that you want to query. Valid values:
     *
     *   **china**: Chinese mainland.
     *   **asia-pacific**: Asia Pacific
     *   **europe**: Europe
     *   **north-america**: North America
     *
     * @example china
     *
     * @var string
     */
    public $geographicRegionAId;

    /**
     * @description The ID of the other area connected by the bandwidth plan. Valid values:
     *
     *   **china**: Chinese mainland.
     *   **asia-pacific**: Asia Pacific
     *   **europe**: Europe
     *   **north-america**: North America
     *
     * @example north-america
     *
     * @var string
     */
    public $geographicRegionBId;

    /**
     * @description The ID of the connected area.
     *
     * @example north-america_china
     *
     * @var string
     */
    public $geographicSpanId;

    /**
     * @description Indicates whether renewal data is included.
     *
     *   **true**
     *   **false**
     *
     * >  This parameter returns **true** only when the **IncludeReservationData** parameter is set to **true** and a pending order exists.
     * @example false
     *
     * @var string
     */
    public $hasReservationData;

    /**
     * @description Indicates whether the bandwidth plan supports cross-border communication.
     *
     *   **false**
     *   **true**
     *
     * @example false
     *
     * @var bool
     */
    public $isCrossBorder;

    /**
     * @description The name of the bandwidth plan.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The details about the connected regions.
     *
     * @var orginInterRegionBandwidthLimits
     */
    public $orginInterRegionBandwidthLimits;

    /**
     * @description The expiration time of the temporary upgrade.
     *
     * @example 2021-08-30T16:00Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @description The bandwidth value to which the bandwidth plan is restored when the temporary upgrade ends.
     *
     * @example 10
     *
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @description The new billing method.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @description The renewal method.
     *
     *   **TEMP_UPGRADE**: temporary upgrade
     *   **UPGRADE**: upgrade
     *
     * @example UPGRADE
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @description The ID of the resource group to which the ACL belongs.
     *
     * @example rg-aekzoyr5k36****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the bandwidth plan is associated with a CEN instance.
     *
     *   **Idle**
     *   **InUse**
     *
     * @example InUse
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the bandwidth plan.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'bandwidth'                       => 'Bandwidth',
        'bandwidthPackageChargeType'      => 'BandwidthPackageChargeType',
        'businessStatus'                  => 'BusinessStatus',
        'cenBandwidthPackageId'           => 'CenBandwidthPackageId',
        'cenIds'                          => 'CenIds',
        'creationTime'                    => 'CreationTime',
        'description'                     => 'Description',
        'expiredTime'                     => 'ExpiredTime',
        'geographicRegionAId'             => 'GeographicRegionAId',
        'geographicRegionBId'             => 'GeographicRegionBId',
        'geographicSpanId'                => 'GeographicSpanId',
        'hasReservationData'              => 'HasReservationData',
        'isCrossBorder'                   => 'IsCrossBorder',
        'name'                            => 'Name',
        'orginInterRegionBandwidthLimits' => 'OrginInterRegionBandwidthLimits',
        'reservationActiveTime'           => 'ReservationActiveTime',
        'reservationBandwidth'            => 'ReservationBandwidth',
        'reservationInternetChargeType'   => 'ReservationInternetChargeType',
        'reservationOrderType'            => 'ReservationOrderType',
        'resourceGroupId'                 => 'ResourceGroupId',
        'status'                          => 'Status',
        'tags'                            => 'Tags',
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
        if (null !== $this->bandwidthPackageChargeType) {
            $res['BandwidthPackageChargeType'] = $this->bandwidthPackageChargeType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->cenBandwidthPackageId) {
            $res['CenBandwidthPackageId'] = $this->cenBandwidthPackageId;
        }
        if (null !== $this->cenIds) {
            $res['CenIds'] = null !== $this->cenIds ? $this->cenIds->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->geographicRegionAId) {
            $res['GeographicRegionAId'] = $this->geographicRegionAId;
        }
        if (null !== $this->geographicRegionBId) {
            $res['GeographicRegionBId'] = $this->geographicRegionBId;
        }
        if (null !== $this->geographicSpanId) {
            $res['GeographicSpanId'] = $this->geographicSpanId;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->isCrossBorder) {
            $res['IsCrossBorder'] = $this->isCrossBorder;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orginInterRegionBandwidthLimits) {
            $res['OrginInterRegionBandwidthLimits'] = null !== $this->orginInterRegionBandwidthLimits ? $this->orginInterRegionBandwidthLimits->toMap() : null;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenBandwidthPackage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthPackageChargeType'])) {
            $model->bandwidthPackageChargeType = $map['BandwidthPackageChargeType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CenBandwidthPackageId'])) {
            $model->cenBandwidthPackageId = $map['CenBandwidthPackageId'];
        }
        if (isset($map['CenIds'])) {
            $model->cenIds = cenIds::fromMap($map['CenIds']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GeographicRegionAId'])) {
            $model->geographicRegionAId = $map['GeographicRegionAId'];
        }
        if (isset($map['GeographicRegionBId'])) {
            $model->geographicRegionBId = $map['GeographicRegionBId'];
        }
        if (isset($map['GeographicSpanId'])) {
            $model->geographicSpanId = $map['GeographicSpanId'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['IsCrossBorder'])) {
            $model->isCrossBorder = $map['IsCrossBorder'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrginInterRegionBandwidthLimits'])) {
            $model->orginInterRegionBandwidthLimits = orginInterRegionBandwidthLimits::fromMap($map['OrginInterRegionBandwidthLimits']);
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
