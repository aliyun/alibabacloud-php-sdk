<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class CreateAvdsOrderRequest extends Model
{
    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $siteNum;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $urlNum;

    /**
     * @var string
     */
    public $addVulNum;
    protected $_name = [
        'period'         => 'Period',
        'periodUnit'     => 'PeriodUnit',
        'autoPay'        => 'AutoPay',
        'autoUseCoupon'  => 'AutoUseCoupon',
        'siteNum'        => 'SiteNum',
        'serviceVersion' => 'ServiceVersion',
        'urlNum'         => 'UrlNum',
        'addVulNum'      => 'AddVulNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->siteNum) {
            $res['SiteNum'] = $this->siteNum;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->urlNum) {
            $res['UrlNum'] = $this->urlNum;
        }
        if (null !== $this->addVulNum) {
            $res['AddVulNum'] = $this->addVulNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAvdsOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['SiteNum'])) {
            $model->siteNum = $map['SiteNum'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['UrlNum'])) {
            $model->urlNum = $map['UrlNum'];
        }
        if (isset($map['AddVulNum'])) {
            $model->addVulNum = $map['AddVulNum'];
        }

        return $model;
    }
}
