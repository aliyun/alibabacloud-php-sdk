<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RenewNetworkPackagesRequest extends Model
{
    /**
     * @description Specifies whether to automatically complete the payment. Valid values:
     *
     *   `true`: automatically completes the payment. Make sure that your Alibaba Cloud account has sufficient balance. If your Alibaba Cloud account does not have sufficient balance, abnormal orders are generated.
     *   `false`: does not complete the payment. In this case, an order is generated, but no payment is made. You can log on to the Elastic Desktop Service (EDS) console and complete the payment based on the order ID on the **Orders** page.
     *
     * Default value: `true`.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of the Internet access package. You can specify 1 to 100 IDs of Internet access packages.
     *
     * @var string[]
     */
    public $networkPackageId;

    /**
     * @description The renewal period. Valid values of this parameter are determined by the value of the `PeriodUnit` parameter.
     *
     *   Valid value when the `PeriodUnit` parameter is set to `Week`: 1
     *   Valid values when the `PeriodUnit` parameter is set to `Month`: 1, 2, 3, and 6
     *   Valid values when the `PeriodUnit` parameter is set to `Year`: 1, 2, and 3
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the renewal period. Default value: Month.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The ID of the promotion. You can call the `GetResourcePrice` operation to query the promotion ID.
     *
     * @example 500038360030606
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoPay'          => 'AutoPay',
        'networkPackageId' => 'NetworkPackageId',
        'period'           => 'Period',
        'periodUnit'       => 'PeriodUnit',
        'promotionId'      => 'PromotionId',
        'regionId'         => 'RegionId',
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
        if (null !== $this->networkPackageId) {
            $res['NetworkPackageId'] = $this->networkPackageId;
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
     * @return RenewNetworkPackagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['NetworkPackageId'])) {
            if (!empty($map['NetworkPackageId'])) {
                $model->networkPackageId = $map['NetworkPackageId'];
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
