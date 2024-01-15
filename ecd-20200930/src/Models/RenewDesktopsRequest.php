<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RenewDesktopsRequest extends Model
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
     *   false: disables the auto-payment feature. In this case, an order is generated, and no payment is automatically made.
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The cloud desktop ID. Only subscription cloud desktops can be renewed.
     *
     * @example ecd-ia2zw38bi6cm7****
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The renewal duration. Valid values of this parameter are determined by the value of the `PeriodUnit` parameter.
     *
     *   Valid values if you set the `PeriodUnit` parameter to `Month`: 1, 2, 3, and 6
     *   Valid values if you set the `PeriodUnit` parameter to `Year`: 1, 2, 3, 4, 5, and 6
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the renewal duration that is specified by the Period parameter.
     *
     * Valid values:
     *
     *   Month (default)
     *
     * <!-- -->
     *
     *   Year
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
     * @example 500030980150146
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoPay'     => 'AutoPay',
        'desktopId'   => 'DesktopId',
        'period'      => 'Period',
        'periodUnit'  => 'PeriodUnit',
        'promotionId' => 'PromotionId',
        'regionId'    => 'RegionId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewDesktopsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
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

        return $model;
    }
}
