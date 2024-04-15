<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyNetworkPackageBandwidthRequest extends Model
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
     *   false: disables the auto-payment feature. In this case, an order is generated but you need to make the payment manually.
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The bandwidth provided by the premium bandwidth plan. Unit: Mbit/s.
     *
     *   Valid values if the premium bandwidth plan is a subscription plan: 2 to 1000.
     *   Valid values if the premium bandwidth plan is a pay-as-you-go plan that charges by data transfer (PayByTraffic): 2 to 200.
     *   Valid values if the premium bandwidth plan is a pay-as-you-go plan that charges by fixed bandwidth (PayByBandwidth): 2 to 1000.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of the premium bandwidth plan.
     *
     * @example np-cxj99qb8d34vo****
     *
     * @var string
     */
    public $networkPackageId;

    /**
     * @description The promotion ID.
     *
     * @example 500033080110596
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoPay'          => 'AutoPay',
        'bandwidth'        => 'Bandwidth',
        'networkPackageId' => 'NetworkPackageId',
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->networkPackageId) {
            $res['NetworkPackageId'] = $this->networkPackageId;
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
     * @return ModifyNetworkPackageBandwidthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['NetworkPackageId'])) {
            $model->networkPackageId = $map['NetworkPackageId'];
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
