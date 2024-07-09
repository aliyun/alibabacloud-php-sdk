<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDiskSpecRequest extends Model
{
    /**
     * @description Specifies whether to automatically complete the payment. Valid values:
     *
     *   `true`: automatically completes the payment. Make sure that your Alibaba Cloud account has sufficient balance. If your Alibaba Cloud account does not have sufficient balance, abnormal orders are generated.
     *   `false`: does not complete the payment. In this case, an order is generated, but no payment is made. You can log on to the Elastic Desktop Service (EDS) console and complete the payment based on the order ID on the **Orders** page.
     *
     * Default value: `true`.
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of the cloud desktop.
     *
     * This parameter is required.
     * @example ecd-2yjhqxo1monxxxxxx
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The ID of the sales promotion activity. You can call the DescribePrice operation to obtain the IDs of matching sales promotion activities.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The performance level (PL) of the system disk. If the cloud desktop type is Graphics or High Frequency, you can set the PL of the system disk. Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * @example PL1
     *
     * @var string
     */
    public $rootDiskPerformanceLevel;

    /**
     * @description The PL of the data disk. If the cloud desktop type is Graphics or High Frequency, you can set the PL of the data disk. Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * @example PL1
     *
     * @var string
     */
    public $userDiskPerformanceLevel;
    protected $_name = [
        'autoPay'                  => 'AutoPay',
        'desktopId'                => 'DesktopId',
        'promotionId'              => 'PromotionId',
        'regionId'                 => 'RegionId',
        'rootDiskPerformanceLevel' => 'RootDiskPerformanceLevel',
        'userDiskPerformanceLevel' => 'UserDiskPerformanceLevel',
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
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rootDiskPerformanceLevel) {
            $res['RootDiskPerformanceLevel'] = $this->rootDiskPerformanceLevel;
        }
        if (null !== $this->userDiskPerformanceLevel) {
            $res['UserDiskPerformanceLevel'] = $this->userDiskPerformanceLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDiskSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RootDiskPerformanceLevel'])) {
            $model->rootDiskPerformanceLevel = $map['RootDiskPerformanceLevel'];
        }
        if (isset($map['UserDiskPerformanceLevel'])) {
            $model->userDiskPerformanceLevel = $map['UserDiskPerformanceLevel'];
        }

        return $model;
    }
}
