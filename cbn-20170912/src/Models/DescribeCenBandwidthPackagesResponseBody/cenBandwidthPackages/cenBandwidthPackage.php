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
     * @description The ID of the bandwidth plan.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The maximum bandwidth of the bandwidth plan.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $bandwidthPackageChargeType;

    /**
     * @description The ID of the request.
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The ID of the connected area.
     *
     * @example cenbwp-4c2zaavbvh5x****
     *
     * @var string
     */
    public $cenBandwidthPackageId;

    /**
     * @var cenIds
     */
    public $cenIds;

    /**
     * @description The connected regions.
     *
     * @example 2021-02-01T11:14Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The timeout period of the bandwidth plan.
     *
     * @example cen
     *
     * @var string
     */
    public $description;

    /**
     * @description The new billing method.
     *
     * @example 2021-09-08T16:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The name of the bandwidth plan.
     *
     * @example china
     *
     * @var string
     */
    public $geographicRegionAId;

    /**
     * @description The number of entries returned per page.
     *
     * @example north-america
     *
     * @var string
     */
    public $geographicRegionBId;

    /**
     * @description The page number of the returned page.
     *
     * @example north-america_china
     *
     * @var string
     */
    public $geographicSpanId;

    /**
     * @description Queries details about Cloud Enterprise Network (CEN) bandwidth plans within the current Alibaba Cloud account.
     *
     * @example false
     *
     * @var string
     */
    public $hasReservationData;

    /**
     * @description The filter condition.
     *
     * You can use filter conditions to filter the bandwidth plans that you want to query. The following filter conditions are supported:
     *
     *   **CenId**: CEN instance ID
     *
     *   **Status**: bandwidth plan status. Valid values:
     *
     *   **Idle**: not associated with a CEN instance.
     *   **InUse**: associated with a CEN instance.
     *
     *   **CenBandwidthPackageId**: bandwidth plan ID
     *
     *   **Name**: bandwidth plan name
     *
     * You can specify one or more filter conditions. The maximum value of **N** is **5**.
     * @example false
     *
     * @var bool
     */
    public $isCrossBorder;

    /**
     * @description The renewal method.
     *
     *   **TEMP_UPGRADE**: temporary upgrade
     *   **UPGRADE**: upgrade
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description DescribeCenBandwidthPackages
     *
     * @var orginInterRegionBandwidthLimits
     */
    public $orginInterRegionBandwidthLimits;

    /**
     * @description The maximum bandwidth value for the inter-region connection.
     *
     * @example 2021-08-30T16:00Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @description The logical operator between the filter conditions. Valid values:
     *
     *   **false** (default): **AND** Bandwidth plans that meet all filter conditions are returned.
     *   **true**: **OR** Bandwidth plans that meet one of the filter conditions are returned.
     *
     * @example 10
     *
     * @var string
     */
    public $reservationBandwidth;

    /**
     * @description Indicates whether the bandwidth plan is associated with a CEN instance.
     *
     *   **Idle**: no
     *   **InUse**: yes
     *
     * @example PREPAY
     *
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @description The number of entries to return on each page. Maximum value: **50**. Default value: **10**.
     *
     * @example UPGRADE
     *
     * @var string
     */
    public $reservationOrderType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example InUse
     *
     * @var string
     */
    public $status;

    /**
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
