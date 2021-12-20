<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyNetworkPackageBandwidthRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $promotionId;

    /**
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
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('networkPackageId', $this->networkPackageId, true);
        Model::validateRequired('regionId', $this->regionId, true);
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
