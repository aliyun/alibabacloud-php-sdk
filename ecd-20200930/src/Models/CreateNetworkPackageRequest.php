<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkPackageRequest extends Model
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
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $officeSiteId;

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
    public $promotionId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoPay'            => 'AutoPay',
        'autoRenew'          => 'AutoRenew',
        'bandwidth'          => 'Bandwidth',
        'internetChargeType' => 'InternetChargeType',
        'officeSiteId'       => 'OfficeSiteId',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'promotionId'        => 'PromotionId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
