<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\cenIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\orginInterRegionBandwidthLimits;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\tags;

class cenBandwidthPackage extends Model
{
    /**
     * @var int
     */
    public $bandwidth;
    /**
     * @var string
     */
    public $bandwidthPackageChargeType;
    /**
     * @var string
     */
    public $businessStatus;
    /**
     * @var string
     */
    public $cenBandwidthPackageId;
    /**
     * @var cenIds
     */
    public $cenIds;
    /**
     * @var string
     */
    public $creationTime;
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
    public $geographicRegionAId;
    /**
     * @var string
     */
    public $geographicRegionBId;
    /**
     * @var string
     */
    public $geographicSpanId;
    /**
     * @var string
     */
    public $hasReservationData;
    /**
     * @var bool
     */
    public $isCrossBorder;
    /**
     * @var string
     */
    public $name;
    /**
     * @var orginInterRegionBandwidthLimits
     */
    public $orginInterRegionBandwidthLimits;
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
        if (null !== $this->cenIds) {
            $this->cenIds->validate();
        }
        if (null !== $this->orginInterRegionBandwidthLimits) {
            $this->orginInterRegionBandwidthLimits->validate();
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
            $res['CenIds'] = null !== $this->cenIds ? $this->cenIds->toArray($noStream) : $this->cenIds;
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
            $res['OrginInterRegionBandwidthLimits'] = null !== $this->orginInterRegionBandwidthLimits ? $this->orginInterRegionBandwidthLimits->toArray($noStream) : $this->orginInterRegionBandwidthLimits;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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
