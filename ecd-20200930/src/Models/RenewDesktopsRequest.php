<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RenewDesktopsRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   true: enables automatic payment. Make sure that you have sufficient balance in your account. Otherwise, abnormal orders are generated.
     *   false: generates the order with no payment made. You can log on to the EDS console and complete the payment based on the order number.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The IDs of cloud desktops.
     *
     * Only subscription cloud desktops can be renewed by calling this operation.
     * @example ecd-ia2zw38bi6cm7****
     *
     * @var string[]
     */
    public $desktopId;

    /**
     * @description The renewal duration. The valid values of this parameter are determined by the PeriodUnit value.
     *
     *   If PeriodUnit is set to Month, the valid values of the Period parameter are 1, 2, 3, and 6.
     *   If PeriodUnit is set to Year, the valid values of the Period parameter are 1, 2, 3, 4, and 5.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the renewal duration specified by the Period parameter. Valid values:
     *
     *   Month
     *   Year
     *
     * Default value: Month.
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
     * @description The region ID of the cloud desktop.
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
