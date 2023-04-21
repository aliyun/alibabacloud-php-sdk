<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyNetworkPackageBandwidthRequest extends Model
{
    /**
     * @description Specifies whether to enable automatic payment. Valid values:
     *
     *   `true`: enables automatic payment. Make sure that your Alibaba Cloud account has sufficient balance. If your Alibaba Cloud account does not have sufficient balance, abnormal orders are generated.
     *   `false`: disables automatic payment. In this case, an order is generated, but no payment is complete. You can log on to the Elastic Desktop Service (EDS) console and complete the payment based on the order ID on the **Orders** page.
     *
     * Default value: `true`.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The bandwidth of the Internet access package. Unit: Mbit/s. Valid values: 10 to 1000.
     *
     * @example 10
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of the Internet access package.
     *
     * @example np-cxj99qb8d34vo****
     *
     * @var string
     */
    public $networkPackageId;

    /**
     * @description The ID of the promotion. You can call the `GetResourcePrice` operation to obtain the ID of the promotion.
     *
     * @example 500033080110596
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
