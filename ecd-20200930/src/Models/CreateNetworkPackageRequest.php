<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkPackageRequest extends Model
{
    /**
     * @description Specifies whether to enable the automatic payment feature.
     *
     * Valid values:
     *
     *   true (default): enables the auto-payment feature.
     *
     * <!-- -->
     *
     *   false: disables the auto-payment feature. In this case, an order is generated but you need to make the payment manually.
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal for the premium bandwidth plan.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The bandwidth provided by the premium bandwidth plan. Unit: Mbit/s.
     *
     *   Valid values if the premium bandwidth plan is a subscription plan: 2 to 1000.
     *   Valid values if the premium bandwidth plan is a pay-as-you-go plan that charges by data transfer (PayByTraffic): 2 to 200.
     *   Valid values if the premium bandwidth plan is a pay-as-you-go plan that charges by fixed bandwidth (PayByBandwidth): 2 to 1000.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

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
     * @description The office network ID.
     *
     * @example cn-hangzhou+dir-363353****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The billing method of the premium bandwidth plan.
     *
     * Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The subscription duration of the premium bandwidth plan. This parameter takes effect and is required only when the `PayType` parameter is set to `PrePaid`. The valid values of this parameter vary based on the `PeriodUnit` value.
     *
     *   Valid value when the `PeriodUnit` parameter is set to `Week`: 1
     *   Valid values when the `PeriodUnit` parameter is set to `Month`: 1, 2, 3, and 6
     *   Valid values when the `PeriodUnit` parameter is set to `Year`: 1, 2, and 3
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration of the premium bandwidth plan. This parameter takes effect and is required only when the `PayType` parameter is set to `PrePaid`.
     *
     * Valid values:
     *
     *   Month
     *
     * <!-- -->
     *
     *   Year
     *
     * <!-- -->
     *
     *   Week
     *
     * <!-- -->
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
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
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
