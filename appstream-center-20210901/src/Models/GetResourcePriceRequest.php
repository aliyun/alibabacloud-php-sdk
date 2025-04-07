<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class GetResourcePriceRequest extends Model
{
    /**
     * @description The number of resources to purchase.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description The type ID of the sessions that you purchase. You can call the `ListAppInstanceType` operation to obtain the ID.
     *
     * You must specify one of AppInstanceType and NodeInstanceType. If you specify both of the parameters, the value of NodeInstanceType takes effect.
     *
     * @example appstreaming.general
     *
     * @var string
     */
    public $appInstanceType;

    /**
     * @description The ID of the region where the delivery group resides. For information about the supported regions, see [Limits](https://help.aliyun.com/document_detail/426036.html).
     *
     * Valid values:
     *
     *   cn-shanghai: China (Shanghai).
     *   cn-hangzhou: China (Hangzhou)
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The billing method.
     *
     * Valid values:
     *
     *   PostPaid: pay-as-you-go
     *   PrePaid: subscription
     *
     * This parameter is required.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The ID of the resource type that you purchase. You can call the [ListNodeInstanceType](https://help.aliyun.com/document_detail/428502.html) to obtain the ID.
     *
     * You must specify one of AppInstanceType and NodeInstanceType. If you specify both of the parameters, the value of NodeInstanceType takes effect.
     *
     * Valid values:
     *
     *   appstreaming.vgpu.8c16g.4g: WUYING - Graphics - 8 vCPUs, 16 GiB Memory, 4 GiB GPU Memory
     *   appstreaming.general.8c16g: WUYING - General - 8 vCPUs, 16 GiB Memory
     *   appstreaming.general.4c8g: WUYING - General - 4 vCPUs, 8 GiB Memory
     *   appstreaming.vgpu.14c93g.12g: WUYING - Graphics - 14 vCPUs, 93 GiB Memory, 12 GiB GPU Memory.
     *   appstreaming.vgpu.8c31g.16g: WUYING - Graphics - 8 vCPUs, 31 GiB Memory, 16 GiB GPU Memory
     *
     * @example appstreaming.vgpu.4c8g.2g
     *
     * @var string
     */
    public $nodeInstanceType;

    /**
     * @description The subscription duration of resources. This parameter must be configured together with `PeriodUnit`.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration. This parameter must be configured together with `Period`. The following items describe valid values for the combinations of `Period` and `PeriodUnit`:
     *
     *   1 Week
     *   1 Month
     *   2 Month
     *   3 Month
     *   6 Month
     *   1 Year
     *   2 Year
     *   3 Year
     *
     * >  The value of this parameter is case-insensitive. For example, `Week` is valid and `week` is invalid. If you specify a value combination other than the preceding combinations, such as `2 Week`, the operation can still be called. However, an error occurs when you place the order.
     *
     * This parameter is required.
     *
     * @example Week
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The product type.
     *
     * Valid value:
     *
     *   CloudApp: App Streaming
     *
     * This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'amount' => 'Amount',
        'appInstanceType' => 'AppInstanceType',
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'nodeInstanceType' => 'NodeInstanceType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'productType' => 'ProductType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->appInstanceType) {
            $res['AppInstanceType'] = $this->appInstanceType;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->nodeInstanceType) {
            $res['NodeInstanceType'] = $this->nodeInstanceType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourcePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AppInstanceType'])) {
            $model->appInstanceType = $map['AppInstanceType'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['NodeInstanceType'])) {
            $model->nodeInstanceType = $map['NodeInstanceType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
