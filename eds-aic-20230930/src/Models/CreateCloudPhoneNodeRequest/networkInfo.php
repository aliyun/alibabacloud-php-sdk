<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest;

use AlibabaCloud\Dara\Model;

class networkInfo extends Model
{
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
    protected $_name = [
        'bandwidthPackageName' => 'BandwidthPackageName',
        'cidrBlock' => 'CidrBlock',
        'internetChargeType' => 'InternetChargeType',
        'ipRatio' => 'IpRatio',
        'isp' => 'Isp',
        'limitedBandwidth' => 'LimitedBandwidth',
        'payType' => 'PayType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
