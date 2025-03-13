<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopChargeTypeRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment if you specify subscription as the new billing method for the cloud desktop.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The new billing method that you want to apply.
     *
     * Valid values:
     *
     *   PostPaid: changes the billing method from subscription to pay-as-you-go.
     *
     * <!-- -->
     *
     *   PrePaid: changes the billing method from pay-as-you-go to subscription.
     *
     * <!-- -->
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The IDs of the cloud computers. You can specify 1 to 20 IDs.
     *
     * This parameter is required.
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The subscription duration of the cloud computers if you set the ChargeType parameter to PrePaid. The unit is specified by the `PeriodUnit` parameter. This parameter is valid only when the `ChargeType` parameter is set to `PrePaid`. In this case, you must specify this parameter.
     *
     *   If the `PeriodUnit` parameter is set to `Week`, set the Period parameter to 1.
     *   If the `PeriodUnit` parameter is set to `Month`, the valid values of the Period parameter are 1, 2, 3, and 6.
     *   If the `PeriodUnit` parameter is set to `Year`, the valid values of the Period parameter are 1, 2, 3, 4, and 5.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration if you specify subscription as the new billing method for the cloud desktop.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the promotional activity.
     *
     * @example 500038360030606
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description >  This parameter is in invitational preview and not publicly available.
     *
     * @example internal only
     *
     * @var int
     */
    public $useDuration;
    protected $_name = [
        'autoPay'     => 'AutoPay',
        'chargeType'  => 'ChargeType',
        'desktopId'   => 'DesktopId',
        'period'      => 'Period',
        'periodUnit'  => 'PeriodUnit',
        'promotionId' => 'PromotionId',
        'regionId'    => 'RegionId',
        'useDuration' => 'UseDuration',
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
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
        if (null !== $this->useDuration) {
            $res['UseDuration'] = $this->useDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDesktopChargeTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DesktopId'])) {
            if (!empty($map['DesktopId'])) {
                $model->desktopId = $map['DesktopId'];
            }
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
        if (isset($map['UseDuration'])) {
            $model->useDuration = $map['UseDuration'];
        }

        return $model;
    }
}
