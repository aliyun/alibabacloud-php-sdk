<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkPackageRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The maximum public bandwidth. Unit: Mbit/s.\
     * Valid values for the pay-by-data-transfer type (PayByTraffic): 10 to 200. Valid values for the pay-by-bandwith type (PayByBandwidth): 10 to 1000.
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The metering method of the pay-as-you-go Internet access package. Valid values: PayByTraffic: pay-by-data-transfer. PayByBandwidth: pay-by-bandwidth. Default value: PayByTraffic.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The billing method of the Internet access package.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The duration of the Internet access package.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of duration that you want to use for the Internet access package.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the sales promotion.
     *
     * @example 23141
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoPay'            => 'AutoPay',
        'autoRenew'          => 'AutoRenew',
        'bandwidth'          => 'Bandwidth',
        'internetChargeType' => 'InternetChargeType',
        'officeSiteId'       => 'OfficeSiteId',
        'payType'            => 'PayType',
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
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
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
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
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
