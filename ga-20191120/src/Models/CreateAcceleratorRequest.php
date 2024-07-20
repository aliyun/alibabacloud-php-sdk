<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAcceleratorRequest\ipSetConfig;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateAcceleratorRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateAcceleratorRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Default value: false. Valid values:
     *
     *   **false:** disables automatic payment. If you select this option, you must go to the Order Center to complete the payment after an order is generated.
     *   **true:** enables automatic payment. Payments are automatically completed.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable auto-renewal for the GA instance. Default value: false. Valid values:
     *
     *   **true:** enables auto-renewal.
     *   **false:** disables auto-renewal.
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
     * >  This parameter takes effect only when **AutoRenew** is set to **true**.
     * @example 1
     *
     * @var int
     */
    public $autoRenewDuration;

    /**
     * @description Specifies whether to automatically use coupons when making payments. Default value: false. Valid values:
     *
     *   **true:** automatically pays bill by using coupons.
     *   **false:** does not automatically pay bills by using coupons.
     *
     * >  This parameter takes effect only when **AutoPay** is set to **true**.
     * @example false
     *
     * @var string
     */
    public $autoUseCoupon;

    /**
     * @description The bandwidth billing method.
     *
     *   **BandwidthPackage:** billed based on bandwidth plans.
     *   **CDT:** billed based on data transfer.
     *   **CDT95:** billed based on the 95th percentile bandwidth. The billing is managed by Cloud Data Transfer (CDT). This bandwidth billing method is not available by default. Contact your Alibaba Cloud account manager for more information.
     *
     * @example BandwidthPackage
     *
     * @var string
     */
    public $bandwidthBillingType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among all requests. The token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system sets **ClientToken** to the value of **RequestId**. The value of **RequestId** of each API request may be different.
     * @example 123e4567****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether only to precheck the request. Default value: false. Valid values:
     *
     *   **true**: prechecks the request without performing the operation. The system checks the required parameters, request syntax, and limits. If the request fails the precheck, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false**: sends the request. If the request passes the precheck, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The subscription duration of the GA instance.
     *
     *   If the **PricingCycle** parameter is set to **Month**, the valid values for the **Duration** parameter are **1** to **9**.
     *   If the **PricingCycle** parameter is set to **Year**, the valid values for the **Duration** parameter are **1** to **3**.
     *
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @description The billing method of the GA. Default value is PREPAY (subscription).
     *
     *   PREPAY : subscription.
     *   POSTPAY : pay-as-you-go
     *
     * @example PREPAY
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The configurations of the acceleration area.
     *
     * @var ipSetConfig
     */
    public $ipSetConfig;

    /**
     * @description The name of the GA instance.
     *
     * The name must be 2 to 128 characters in length and can contain digits, underscores (_), and hyphens (-). It must start with a letter.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The billing cycle of the GA instance. Valid values:
     *
     *   **Month:** billed on a monthly basis.
     *   **Year:** billed on an annual basis.
     *
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The coupon code.
     *
     * >
     * @example 50003298014****
     *
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @description The ID of the region in which to create the GA instance. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the standard GA instance belongs.
     *
     * @example rg-aekzrnd67gq****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of GA instance. Valid values:
     *
     *   **1:** Small Ⅰ
     *   **2:** Small Ⅱ
     *   **3:** Small Ⅲ
     *   **5:** Medium Ⅰ
     *   **8:** Medium Ⅱ
     *   **10:** Medium Ⅲ
     *   **20:** Large Ⅰ
     *   **30:** Large Ⅱ
     *   **40:** Large Ⅲ
     *   **50:** Large Ⅳ
     *   **60:** Large Ⅴ
     *   **70:** Large Ⅵ
     *   **80:** Large VⅡ
     *   **90:** Large VⅢ
     *   **100:** Super Large Ⅰ
     *   **200:** Super Large Ⅱ
     *
     * Each instance type provides different capabilities. For more information, see [Instance specifications](https://help.aliyun.com/document_detail/153127.html).
     * @example 1
     *
     * @var string
     */
    public $spec;

    /**
     * @description The tags of the GA instance.
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
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'duration'             => 'Duration',
        'instanceChargeType'   => 'InstanceChargeType',
        'ipSetConfig'          => 'IpSetConfig',
        'name'                 => 'Name',
        'pricingCycle'         => 'PricingCycle',
        'promotionOptionNo'    => 'PromotionOptionNo',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'spec'                 => 'Spec',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->ipSetConfig) {
            $res['IpSetConfig'] = null !== $this->ipSetConfig ? $this->ipSetConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
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
     * @return CreateAcceleratorRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['IpSetConfig'])) {
            $model->ipSetConfig = ipSetConfig::fromMap($map['IpSetConfig']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
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
