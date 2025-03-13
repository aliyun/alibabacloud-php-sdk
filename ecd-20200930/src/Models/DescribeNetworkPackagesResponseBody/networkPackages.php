<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesResponseBody;

use AlibabaCloud\Tea\Model;

class networkPackages extends Model
{
    /**
     * @description The bandwidth provided by the premium bandwidth plan. Unit: Mbit/s.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The business status.
     *
     * Valid values:
     *
     *   Expired
     *
     * <!-- -->
     *
     *   Normal
     *
     * <!-- -->
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The time when the premium bandwidth plan was created.
     *
     * @example 2021-05-10T02:35:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The public egress IP address of the premium bandwidth plan.
     *
     * @var string[]
     */
    public $eipAddresses;

    /**
     * @description The time when the premium bandwidth plan expires.
     *
     *   If the plan is a subscription one, the time when the plan expires is returned.
     *   If the plan is a pay-as-you-go one, `2099-12-31T15:59:59Z` is returned.
     *
     * @example 2099-12-31T15:59:59Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The charge type of the premium bandwidth plan.
     *
     *   Valid value when the `PayType` parameter is set to `PrePaid`:
     *
     *   PayByBandwidth: charges by fixed bandwidth.
     *
     *   Valid values when the `PayType` parameter is set to `PostPaid`:
     *
     *   PayByTraffic: charges by data transfer.
     *   PayByBandwidth: charges by fixed bandwidth.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The ID of the premium bandwidth plan.
     *
     * @example np-amtp8e8q1o9e4****
     *
     * @var string
     */
    public $networkPackageId;

    /**
     * @description The status of the premium bandwidth plan.
     *
     * Valid values:
     *
     *   Creating
     *
     * <!-- -->
     *
     *   Released
     *
     * <!-- -->
     *
     *   InUse
     *
     * <!-- -->
     *
     *   Releasing
     *
     * <!-- -->
     * @example InUse
     *
     * @var string
     */
    public $networkPackageStatus;

    /**
     * @description The office network ID.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The office network name.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The type of the office network.
     *
     * Valid values:
     *
     *   standard: advanced office network
     *   customized: custom office network
     *   basic: basic office network
     *
     * @example basic
     *
     * @var string
     */
    public $officeSiteVpcType;

    /**
     * @description The billing method of the premium bandwidth plan.
     *
     * Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The time when the reserved network bandwidth took effect.
     *
     * @example 2021-07-10T00:00:00Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @description The peak bandwidth that is reserved for the premium bandwidth plan. Unit: Mbit/s.
     *
     * @example 20
     *
     * @var int
     */
    public $reservationBandwidth;

    /**
     * @description The billing method of the reserved network bandwidth.
     *
     * Valid values:
     *
     *   PayByTraffic: charges by data transfer.
     *
     *   PayByBandwidth: charges by fixed bandwidth.
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $reservationInternetChargeType;
    protected $_name = [
        'bandwidth'                     => 'Bandwidth',
        'businessStatus'                => 'BusinessStatus',
        'createTime'                    => 'CreateTime',
        'eipAddresses'                  => 'EipAddresses',
        'expiredTime'                   => 'ExpiredTime',
        'internetChargeType'            => 'InternetChargeType',
        'networkPackageId'              => 'NetworkPackageId',
        'networkPackageStatus'          => 'NetworkPackageStatus',
        'officeSiteId'                  => 'OfficeSiteId',
        'officeSiteName'                => 'OfficeSiteName',
        'officeSiteVpcType'             => 'OfficeSiteVpcType',
        'payType'                       => 'PayType',
        'reservationActiveTime'         => 'ReservationActiveTime',
        'reservationBandwidth'          => 'ReservationBandwidth',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
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
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->eipAddresses) {
            $res['EipAddresses'] = $this->eipAddresses;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->networkPackageId) {
            $res['NetworkPackageId'] = $this->networkPackageId;
        }
        if (null !== $this->networkPackageStatus) {
            $res['NetworkPackageStatus'] = $this->networkPackageStatus;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->officeSiteVpcType) {
            $res['OfficeSiteVpcType'] = $this->officeSiteVpcType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EipAddresses'])) {
            if (!empty($map['EipAddresses'])) {
                $model->eipAddresses = $map['EipAddresses'];
            }
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['NetworkPackageId'])) {
            $model->networkPackageId = $map['NetworkPackageId'];
        }
        if (isset($map['NetworkPackageStatus'])) {
            $model->networkPackageStatus = $map['NetworkPackageStatus'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['OfficeSiteVpcType'])) {
            $model->officeSiteVpcType = $map['OfficeSiteVpcType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
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

        return $model;
    }
}
