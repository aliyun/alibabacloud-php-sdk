<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopChargeTypeRequest extends Model
{
    /**
     * @description The IDs of the cloud desktops. You can specify 1 to 20 IDs.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of the sales promotion.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description Specifies whether to enable automatic payment if you specify subscription as the new billing method for the cloud desktop.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The IDs of the desktop groups. If multiple cloud desktops are created at a time, multiple cloud desktop IDs are returned.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The unit of the subscription duration if you specify subscription as the new billing method for the cloud desktop.
     *
     * @example 500038360030606
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The subscription duration if you specify subscription as the new billing method for the cloud desktop. The unit of the value is specified by the `PeriodUnit` parameter. This parameter takes effect only when the `ChargeType` parameter is set to `PrePaid`.
     *
     *   If the `PeriodUnit` parameter is set to `Week`, the valid value of the Period parameter is 1.
     *   If the `PeriodUnit` parameter is set to `Month`, the valid values of the Period parameter are 1, 2, 3, and 6.
     *   If the `PeriodUnit` parameter is set to `Year`, the valid values of the Period parameter are 1, 2, 3, 4, and 5.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description >  This parameter is in invitational preview and not available to the public.
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
