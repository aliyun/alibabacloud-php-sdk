<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicAcceleratorRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateBasicAcceleratorRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   **false:** disables automatic payment. If you select this option, you must go to the Order Center to complete the payment after an order is generated. This is the default value.
     *   **true:** enables automatic payment. Payments are automatically completed.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal for the basic GA instance. Valid values:
     *
     *   **true:** enables auto-renewal for the basic GA instance.
     *   **false:** disables auto-renewal for the basic GA instance. This is the default value.
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
     * >  This parameter takes effect only when the **AutoPay** parameter is set to **true**.
     * @example 1
     *
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @description Specifies whether to automatically apply coupons to your bills. Valid values:
     *
     *   **true:** automatically applies coupons to your bills.
     *   **false:** does not automatically apply coupons to your bills. This is the default value.
     *
     * >  This parameter takes effect only when the **AutoPay** parameter is set to **true**.
     * @example false
     *
     * @var string
     */
    public $autoUseCoupon;

    /**
     * @description The bandwidth billing method. Valid values:
     *
     *   **BandwidthPackage:** billed based on bandwidth plans.
     *   **CDT:** billed based on data transfer. The bills are managed by using Cloud Data Transfer (CDT).
     *   **CDT95:** billed based on the 95th percentile bandwidth. The bills are managed by using Cloud Data Transfer (CDT). This bandwidth billing method is not available by default. Contact your Alibaba Cloud account manager for more information.
     *
     * @example CDT
     *
     * @var string
     */
    public $bandwidthBillingType;

    /**
     * @description The billing method. Valid values:
     *
     *   **PREPAY** (default)
     *   **POSTPAY**
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true:** performs a dry run. The system checks the required parameters, request syntax, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false**: performs a dry run and sends the request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The subscription duration of the GA instance.
     *
     *   If you set **PricingCycle** to **Month**, the valid values for **Duration** are **1** to **9**.
     *   If you set **PricingCycle** to **Year**, the valid values for **Duration** are **1** to **3**.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The billing cycle. Valid values:
     *
     *   **Month**
     *   **Year**
     *
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The code of the coupon.
     *
     * >  This parameter takes effect only for accounts registered on the international site (alibabacloud.com).
     * @example 50003298014****
     *
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @description The ID of the region where the basic GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the basic GA instance belongs.
     *
     * @example rg-acfmxshhcsn****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags of the basic GA instance.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'autoRenew'            => 'AutoRenew',
        'autoRenewDuration'    => 'AutoRenewDuration',
        'autoUseCoupon'        => 'AutoUseCoupon',
        'bandwidthBillingType' => 'BandwidthBillingType',
        'chargeType'           => 'ChargeType',
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'duration'             => 'Duration',
        'pricingCycle'         => 'PricingCycle',
        'promotionOptionNo'    => 'PromotionOptionNo',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'tag'                  => 'Tag',
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
        if (null !== $this->bandwidthBillingType) {
            $res['BandwidthBillingType'] = $this->bandwidthBillingType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBasicAcceleratorRequest
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
        if (isset($map['BandwidthBillingType'])) {
            $model->bandwidthBillingType = $map['BandwidthBillingType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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

        return $model;
    }
}
