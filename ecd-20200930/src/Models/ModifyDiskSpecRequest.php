<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDiskSpecRequest extends Model
{
    /**
     * @description Specifies whether to enable the automatic payment feature.
     *
     *   If you set the value to `true`, ensure your account has sufficient balance to avoid generating abnormal orders.
     *   If you set the value to `false`, go to the **Expenses and Costs** page to complete the payment based on the order number.
     *
     * Valid values:
     *
     *   true (default): enables the automatic payment feature.
     *   false: generates the order and manually complete the payment.
     *
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of the cloud computer.
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
     * @description The ID of the region. You can call the [DescribeRegions](~~DescribeRegions~~) operation to query the list of regions where Elastic Desktop Service (EDS) Enterprise is available.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resellerOwnerUid;

    /**
     * @description The PL of the system disk. Only Enterprise Graphics or High Frequency cloud computers support disk PL adjustments.
     *
     * Valid values:
     *
     *   PL1
     *   PL0
     *   PL3
     *   PL2
     *
     * @example PL1
     *
     * @var string
     */
    public $rootDiskPerformanceLevel;

    /**
     * @description The PL of the data disk. Only Enterprise Graphics or High Frequency cloud computers support disk PL adjustments.
     *
     * Valid values:
     *
     *   PL1
     *   PL0
     *   PL3
     *   PL2
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
        'resellerOwnerUid'         => 'ResellerOwnerUid',
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
        if (null !== $this->resellerOwnerUid) {
            $res['ResellerOwnerUid'] = $this->resellerOwnerUid;
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
        if (isset($map['ResellerOwnerUid'])) {
            $model->resellerOwnerUid = $map['ResellerOwnerUid'];
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
