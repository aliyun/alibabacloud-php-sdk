<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBandwidthPackageRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateBandwidthPackageRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **false** (default): disables automatic payment. If you select this option, you must go to the Order Center to complete the payment after an order is generated.
     *   **true**: enables automatic payment. Payments are automatically completed.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal for the bandwidth plan. Valid values:
     *
     *   **true**: enables auto-renewal.
     *   **false** (default): does not enable auto-renewal.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal duration. Unit: months.
     *
     * Valid values: **1** to **12**. Default value: **1**.
     *
     * >  This parameter is required only if **AutoRenew** is set to **true**.
     * @example 1
     *
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @description Specifies whether to automatically pay bills by using coupons. Valid values:
     *
     *   **true**: yes
     *   **false** (default): no
     *
     * >  This parameter is required only if **AutoPay** is set to **true**.
     * @example false
     *
     * @var string
     */
    public $autoUseCoupon;

    /**
     * @description The bandwidth of the bandwidth plan. Unit: Mbit/s.
     *
     * Valid values: **2** to **2000**.
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The type of the bandwidth. Valid values:
     *
     *   **Basic**: standard bandwidth
     *   **Enhanced**: enhanced bandwidth
     *   **Advanced**: premium bandwidth
     *
     * If **Type** is set to **Basic**, this parameter is required.
     * @example Basic
     *
     * @var string
     */
    public $bandwidthType;

    /**
     * @description The metering method that is used when you use the pay-as-you-go billing method. Valid values:
     *
     *   **PayByTraffic** (default): pay-by-data-transfer
     *   **PayBY95**: pay-by-95th-percentile By default, the pay-by-95th-percentile metering method is unavailable. If you want to use the metering method, contact your account manager.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $billingType;

    /**
     * @description Area A to be connected. Set the value to **China-mainland**.
     *
     * You can set this parameter only if you call this operation on the international site (alibabacloud.com).
     * @example China-mainland
     *
     * @var string
     */
    public $cbnGeographicRegionIdA;

    /**
     * @description Area B to be connected. Set the value to **Global**.
     *
     * You can set this parameter only if you call this operation on the international site (alibabacloud.com).
     * @example Global
     *
     * @var string
     */
    public $cbnGeographicRegionIdB;

    /**
     * @description The billing method of the bandwidth plan. Valid values:
     *
     *   **PREPAY** (default): subscription.
     *   **POSTPAY**: pay-as-you-go. By default, the pay-as-you-go billing method is unavailable. If you want to use the billing method, contact your account manager.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must ensure that it is unique among all requests. The ClientToken value contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system sets **ClientToken** to the value of **RequestId**. The value of **RequestId** of each API request may be different.
     * @example 123e4567****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The subscription duration.
     *
     *   If the **PricingCycle** parameter is set to **Month**, the valid values for the **Duration** parameter are **1** to **9**.
     *   If the **PricingCycle** parameter is set to **Year**, the valid values for the **Duration** parameter are **1** to **3**.
     *
     * If **ChargeType** is set to **PREPAY**, this parameter is required.
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @description The billing cycle. Valid values:
     *
     *   **Month**: billed on a monthly basis.
     *   **Year**: billed on an annual basis.
     *
     * If **ChargeType** is set to **PREPAY**, this parameter is required.
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The coupon code.
     *
     * >  This parameter is only available on the international site (alibabacloud.com).
     * @example 50003298014****
     *
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @description The percentage of the minimum bandwidth guaranteed if the pay-by-95th-percentile-bandwidth metering method is used. Valid values: **30** to **100**.
     *
     * >  This parameter is required only if **BillingType** is set to **PayBY95**.
     * @example 30
     *
     * @var int
     */
    public $ratio;

    /**
     * @description The ID of the region where the GA instance is deployed. **cn-hangzhou** is returned.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzrnd67gq****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags to add to the bandwidth plan.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The type of the bandwidth plan. Valid values:
     *
     *   **Basic**: a basic bandwidth plan
     *   **CrossDomain**: a cross-region acceleration bandwidth plan
     *
     * If you call this operation on the Alibaba Cloud China site, only **Basic** is supported.
     * @example Basic
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoPay'                => 'AutoPay',
        'autoRenew'              => 'AutoRenew',
        'autoRenewDuration'      => 'AutoRenewDuration',
        'autoUseCoupon'          => 'AutoUseCoupon',
        'bandwidth'              => 'Bandwidth',
        'bandwidthType'          => 'BandwidthType',
        'billingType'            => 'BillingType',
        'cbnGeographicRegionIdA' => 'CbnGeographicRegionIdA',
        'cbnGeographicRegionIdB' => 'CbnGeographicRegionIdB',
        'chargeType'             => 'ChargeType',
        'clientToken'            => 'ClientToken',
        'duration'               => 'Duration',
        'pricingCycle'           => 'PricingCycle',
        'promotionOptionNo'      => 'PromotionOptionNo',
        'ratio'                  => 'Ratio',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
        'tag'                    => 'Tag',
        'type'                   => 'Type',
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
        if (null !== $this->autoRenewDuration) {
            $res['AutoRenewDuration'] = $this->autoRenewDuration;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->billingType) {
            $res['BillingType'] = $this->billingType;
        }
        if (null !== $this->cbnGeographicRegionIdA) {
            $res['CbnGeographicRegionIdA'] = $this->cbnGeographicRegionIdA;
        }
        if (null !== $this->cbnGeographicRegionIdB) {
            $res['CbnGeographicRegionIdB'] = $this->cbnGeographicRegionIdB;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
        }
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBandwidthPackageRequest
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
        if (isset($map['AutoRenewDuration'])) {
            $model->autoRenewDuration = $map['AutoRenewDuration'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['BillingType'])) {
            $model->billingType = $map['BillingType'];
        }
        if (isset($map['CbnGeographicRegionIdA'])) {
            $model->cbnGeographicRegionIdA = $map['CbnGeographicRegionIdA'];
        }
        if (isset($map['CbnGeographicRegionIdB'])) {
            $model->cbnGeographicRegionIdB = $map['CbnGeographicRegionIdB'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
