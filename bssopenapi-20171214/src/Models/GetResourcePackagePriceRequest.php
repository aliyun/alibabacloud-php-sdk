<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class GetResourcePackagePriceRequest extends Model
{
    /**
     * @description The validity period of the resource plan. The value must be the same as the duration of the resource plan specified in the specifications.
     *
     * This parameter is required.
     * @example 6
     *
     * @var int
     */
    public $duration;

    /**
     * @description The time when the resource plan takes effect. If you do not specify this parameter, the resource plan immediately takes effect by default.
     * When the **OrderType** is **BUY**, resource packs with the **EffectiveDate longer than the current time of 6 months** are not supported.
     * If the **OrderType** is **UPGRADE**, the **EffectiveDate** **must be less than or equal to** the actual expiration time of the upgraded instance.
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time must be in UTC.
     * @example 2020-02-10T12:00:00Z
     *
     * @var string
     */
    public $effectiveDate;

    /**
     * @description The ID of the instance. **This parameter is required when the order type is renewal or upgrade.**
     *
     * @example OSSBAG-cn-0xl0002
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the order. Valid values:
     *
     *   BUY: You place the order to purchase an instance.
     *   UPGRADE: You place the order to upgrade an instance.
     *   RENEW: You place the order to renew an instance.
     *
     * Default value: BUY.
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The type of the resource plan. The value must be the same as the value of the **ProductCode** parameter that is returned when you call the **DescribeResourcePackageProduct** operation.
     *
     * This parameter is required.
     * @example FPT_ossbag_periodMonthlyAcc_NetworkOut_finance_common
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The unit of validity period of the resource plan. Valid values:
     *
     *   Month
     *   Year
     *
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The code of service. You can query the service code by calling the **QueryProductList** operation or viewing **Codes of Alibaba Cloud Services**.
     *
     * This parameter is required.
     * @example ossbag
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The specifications of the resource plan.
     *
     * This parameter is required.
     * @example 500
     *
     * @var string
     */
    public $specification;
    protected $_name = [
        'duration'      => 'Duration',
        'effectiveDate' => 'EffectiveDate',
        'instanceId'    => 'InstanceId',
        'orderType'     => 'OrderType',
        'ownerId'       => 'OwnerId',
        'packageType'   => 'PackageType',
        'pricingCycle'  => 'PricingCycle',
        'productCode'   => 'ProductCode',
        'specification' => 'Specification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->effectiveDate) {
            $res['EffectiveDate'] = $this->effectiveDate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourcePackagePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EffectiveDate'])) {
            $model->effectiveDate = $map['EffectiveDate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        return $model;
    }
}
