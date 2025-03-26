<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesResponseBody;

use AlibabaCloud\Dara\Model;

class networkPackages extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $eipAddresses;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $networkPackageStatus;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $officeSiteVpcType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $reservationActiveTime;

    /**
     * @var int
     */
    public $reservationBandwidth;

    /**
     * @var string
     */
    public $reservationInternetChargeType;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'businessStatus' => 'BusinessStatus',
        'createTime' => 'CreateTime',
        'eipAddresses' => 'EipAddresses',
        'expiredTime' => 'ExpiredTime',
        'internetChargeType' => 'InternetChargeType',
        'networkPackageId' => 'NetworkPackageId',
        'networkPackageStatus' => 'NetworkPackageStatus',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'officeSiteVpcType' => 'OfficeSiteVpcType',
        'payType' => 'PayType',
        'reservationActiveTime' => 'ReservationActiveTime',
        'reservationBandwidth' => 'ReservationBandwidth',
        'reservationInternetChargeType' => 'ReservationInternetChargeType',
    ];

    public function validate()
    {
        if (\is_array($this->eipAddresses)) {
            Model::validateArray($this->eipAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->eipAddresses)) {
                $res['EipAddresses'] = [];
                $n1 = 0;
                foreach ($this->eipAddresses as $item1) {
                    $res['EipAddresses'][$n1++] = $item1;
                }
            }
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

        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EipAddresses'])) {
            if (!empty($map['EipAddresses'])) {
                $model->eipAddresses = [];
                $n1 = 0;
                foreach ($map['EipAddresses'] as $item1) {
                    $model->eipAddresses[$n1++] = $item1;
                }
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
