<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAndroidInstanceGroupRequest;

use AlibabaCloud\Dara\Model;

class networkInfo extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $bandwidthPackageName;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $ipRatio;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var int
     */
    public $limitedBandwidth;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $visibleType;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'bandwidthPackageName' => 'BandwidthPackageName',
        'cidrBlock' => 'CidrBlock',
        'internetChargeType' => 'InternetChargeType',
        'ipRatio' => 'IpRatio',
        'isp' => 'Isp',
        'limitedBandwidth' => 'LimitedBandwidth',
        'payType' => 'PayType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'visibleType' => 'VisibleType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->bandwidthPackageName) {
            $res['BandwidthPackageName'] = $this->bandwidthPackageName;
        }

        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->ipRatio) {
            $res['IpRatio'] = $this->ipRatio;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->limitedBandwidth) {
            $res['LimitedBandwidth'] = $this->limitedBandwidth;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->visibleType) {
            $res['VisibleType'] = $this->visibleType;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BandwidthPackageName'])) {
            $model->bandwidthPackageName = $map['BandwidthPackageName'];
        }

        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['IpRatio'])) {
            $model->ipRatio = $map['IpRatio'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['LimitedBandwidth'])) {
            $model->limitedBandwidth = $map['LimitedBandwidth'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['VisibleType'])) {
            $model->visibleType = $map['VisibleType'];
        }

        return $model;
    }
}
