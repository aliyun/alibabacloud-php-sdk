<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\cenIds;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\orginInterRegionBandwidthLimits;
use AlibabaCloud\Tea\Model;

class cenBandwidthPackage extends Model
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
    public $creationTime;

    /**
     * @var string
     */
    public $reservationOrderType;

    /**
     * @var string
     */
    public $bandwidthPackageChargeType;

    /**
     * @var string
     */
    public $cenBandwidthPackageId;

    /**
     * @var string
     */
    public $reservationInternetChargeType;

    /**
     * @var string
     */
    public $ratio;

    /**
     * @var string
     */
    public $geographicRegionAId;

    /**
     * @var string
     */
    public $typeFor95;

    /**
     * @var int
     */
    public $bandwidth;

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
    public $reservationBandwidth;

    /**
     * @var string
     */
    public $geographicSpanId;

    /**
     * @var string
     */
    public $geographicRegionBId;

    /**
     * @var bool
     */
    public $isCrossBorder;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $hasReservationData;

    /**
     * @var orginInterRegionBandwidthLimits
     */
    public $orginInterRegionBandwidthLimits;

    /**
     * @var cenIds
     */
    public $cenIds;
    protected $_name = [
        'reservationActiveTime'           => 'ReservationActiveTime',
        'status'                          => 'Status',
        'creationTime'                    => 'CreationTime',
        'reservationOrderType'            => 'ReservationOrderType',
        'bandwidthPackageChargeType'      => 'BandwidthPackageChargeType',
        'cenBandwidthPackageId'           => 'CenBandwidthPackageId',
        'reservationInternetChargeType'   => 'ReservationInternetChargeType',
        'ratio'                           => 'Ratio',
        'geographicRegionAId'             => 'GeographicRegionAId',
        'typeFor95'                       => 'TypeFor95',
        'bandwidth'                       => 'Bandwidth',
        'description'                     => 'Description',
        'expiredTime'                     => 'ExpiredTime',
        'reservationBandwidth'            => 'ReservationBandwidth',
        'geographicSpanId'                => 'GeographicSpanId',
        'geographicRegionBId'             => 'GeographicRegionBId',
        'isCrossBorder'                   => 'IsCrossBorder',
        'businessStatus'                  => 'BusinessStatus',
        'name'                            => 'Name',
        'hasReservationData'              => 'HasReservationData',
        'orginInterRegionBandwidthLimits' => 'OrginInterRegionBandwidthLimits',
        'cenIds'                          => 'CenIds',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->reservationOrderType) {
            $res['ReservationOrderType'] = $this->reservationOrderType;
        }
        if (null !== $this->bandwidthPackageChargeType) {
            $res['BandwidthPackageChargeType'] = $this->bandwidthPackageChargeType;
        }
        if (null !== $this->cenBandwidthPackageId) {
            $res['CenBandwidthPackageId'] = $this->cenBandwidthPackageId;
        }
        if (null !== $this->reservationInternetChargeType) {
            $res['ReservationInternetChargeType'] = $this->reservationInternetChargeType;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->geographicRegionAId) {
            $res['GeographicRegionAId'] = $this->geographicRegionAId;
        }
        if (null !== $this->typeFor95) {
            $res['TypeFor95'] = $this->typeFor95;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->reservationBandwidth) {
            $res['ReservationBandwidth'] = $this->reservationBandwidth;
        }
        if (null !== $this->geographicSpanId) {
            $res['GeographicSpanId'] = $this->geographicSpanId;
        }
        if (null !== $this->geographicRegionBId) {
            $res['GeographicRegionBId'] = $this->geographicRegionBId;
        }
        if (null !== $this->isCrossBorder) {
            $res['IsCrossBorder'] = $this->isCrossBorder;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->hasReservationData) {
            $res['HasReservationData'] = $this->hasReservationData;
        }
        if (null !== $this->orginInterRegionBandwidthLimits) {
            $res['OrginInterRegionBandwidthLimits'] = null !== $this->orginInterRegionBandwidthLimits ? $this->orginInterRegionBandwidthLimits->toMap() : null;
        }
        if (null !== $this->cenIds) {
            $res['CenIds'] = null !== $this->cenIds ? $this->cenIds->toMap() : null;
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
        if (isset($map['ReservationActiveTime'])) {
            $model->reservationActiveTime = $map['ReservationActiveTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ReservationOrderType'])) {
            $model->reservationOrderType = $map['ReservationOrderType'];
        }
        if (isset($map['BandwidthPackageChargeType'])) {
            $model->bandwidthPackageChargeType = $map['BandwidthPackageChargeType'];
        }
        if (isset($map['CenBandwidthPackageId'])) {
            $model->cenBandwidthPackageId = $map['CenBandwidthPackageId'];
        }
        if (isset($map['ReservationInternetChargeType'])) {
            $model->reservationInternetChargeType = $map['ReservationInternetChargeType'];
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['GeographicRegionAId'])) {
            $model->geographicRegionAId = $map['GeographicRegionAId'];
        }
        if (isset($map['TypeFor95'])) {
            $model->typeFor95 = $map['TypeFor95'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ReservationBandwidth'])) {
            $model->reservationBandwidth = $map['ReservationBandwidth'];
        }
        if (isset($map['GeographicSpanId'])) {
            $model->geographicSpanId = $map['GeographicSpanId'];
        }
        if (isset($map['GeographicRegionBId'])) {
            $model->geographicRegionBId = $map['GeographicRegionBId'];
        }
        if (isset($map['IsCrossBorder'])) {
            $model->isCrossBorder = $map['IsCrossBorder'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['HasReservationData'])) {
            $model->hasReservationData = $map['HasReservationData'];
        }
        if (isset($map['OrginInterRegionBandwidthLimits'])) {
            $model->orginInterRegionBandwidthLimits = orginInterRegionBandwidthLimits::fromMap($map['OrginInterRegionBandwidthLimits']);
        }
        if (isset($map['CenIds'])) {
            $model->cenIds = cenIds::fromMap($map['CenIds']);
        }

        return $model;
    }
}
