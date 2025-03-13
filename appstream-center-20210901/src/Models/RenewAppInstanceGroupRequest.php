<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class RenewAppInstanceGroupRequest extends Model
{
    /**
     * @description The ID of the delivery group.
     *
     * This parameter is required.
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description Specifies whether to enable automatic payment.
     *
     * Valid values:
     *
     *   true
     *   false: manual payment. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The subscription duration of resources. This parameter must be configured together with `PeriodUnit`.
     *
     * This parameter is required.
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
     * This parameter is required.
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
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @description The promotion ID. You can call the [GetResourcePrice](https://help.aliyun.com/document_detail/428503.html) operation to obtain the ID.
     *
     * @example 17440009****
     *
     * @var string
     */
    public $promotionId;
    protected $_name = [
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'autoPay'            => 'AutoPay',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'productType'        => 'ProductType',
        'promotionId'        => 'PromotionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
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
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewAppInstanceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
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
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        return $model;
    }
}
