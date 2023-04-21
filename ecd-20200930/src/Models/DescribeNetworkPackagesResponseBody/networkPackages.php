<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesResponseBody;

use AlibabaCloud\Tea\Model;

class networkPackages extends Model
{
    /**
     * @description The maximum public bandwidth of the Internet access package. Unit: Mbit/s.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The time when the Internet access package was created.
     *
     * @example 2021-05-10T02:35:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The elastic IP addresses (EIPs) of the Internet access package for outbound traffic.
     *
     * @var string[]
     */
    public $eipAddresses;

    /**
     * @description The time when the Internet access package expires.
     *
     *   If the Internet access package is metered on a pay-by-bandwidth basis, the actual expiration time is returned.
     *   If the Internet access package is metered on a pay-by-data-transfer basis, 2099-12-31T15:59:59Z is returned.
     *
     * @example 2099-12-31T15:59:59Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The billing method of the network bandwidth.
     *
     *   PayByTraffic: pay-by-data-transfer
     *   PayByBandwidth: pay-by-bandwidth
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The ID of the Internet access package.
     *
     * @example np-amtp8e8q1o9e4****
     *
     * @var string
     */
    public $networkPackageId;

    /**
     * @description The state of the Internet access package. Valid values:
     *
     *   Creating
     *   InUse
     *   Releasing
     *   Released
     *
     * @example InUse
     *
     * @var string
     */
    public $networkPackageStatus;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the workspace.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The type of the workspace. Valid values:
     *
     *   basic
     *   standard
     *   customized
     *
     * @example basic
     *
     * @var string
     */
    public $officeSiteVpcType;

    /**
     * @description The billing method for the network.
     *
     *   PrePaid: subscription
     *   PostPaid: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The time when the reserved network bandwidth takes effect.
     *
     * @example 2021-07-10T00:00:00Z
     *
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @description The peak bandwidth of the reserved network bandwidth. Unit: Mbit/s.
     *
     * @example 20
     *
     * @var int
     */
    public $reservationBandwidth;

    /**
     * @description The billing method of the reserved network bandwidth.
     *
     *   PayByTraffic: pay-by-data-transfer
     *   PayByBandwidth: pay-by-bandwidth
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $reservationInternetChargeType;
    protected $_name = [
        'bandwidth'                     => 'Bandwidth',
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
