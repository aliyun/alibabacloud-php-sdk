<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDesktopSpecRequest extends Model
{
    /**
     * @description Specifies whether to automatically complete the payment. Valid values:
     *
     *   `true`: automatically completes the payment. Make sure that your Alibaba Cloud account has sufficient balance. If your Alibaba Cloud account does not have sufficient balance, abnormal orders are generated.
     *   `false`: does not automatically complete the payment. In this case, an order is generated, but no payment is made. You can log on to the EDS console and complete the payment based on the order ID on the **Orders** page.
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
     * @example ecd-4543qyik164a4****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The desktop type. You can call the [DescribeDesktopTypes](~~188882~~) operation to query the IDs of supported desktop types.
     *
     * @example eds.general.2c8g
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The ID of the sales promotion.
     *
     * @example 500033080110596
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The size of the new system disk. Unit: GiB. Valid values: 80 to 500 GiB. The value must be a multiple of 10.
     *
     * @example 80
     *
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @description The performance level (PL) of the data disk. Valid values:
     *
     *   PL0
     *   PL1
     *   PL2
     *   PL3
     *
     * Default value: PL0.
     * @example PL0
     *
     * @var string
     */
    public $userDiskPerformanceLevel;

    /**
     * @description The size of the new data disk. Unit: GiB.
     *
     *   The data disk size of a non-Graphics cloud desktop can be within the range of 20 to 1,020 GiB. The value must be a multiple of 10.
     *   The data disk size of the Graphics cloud desktop can be within the range of 40 to 1,020 GiB. The value must be a multiple of 10.
     *
     * @example 100
     *
     * @var int
     */
    public $userDiskSizeGib;
    protected $_name = [
        'autoPay'                  => 'AutoPay',
        'desktopId'                => 'DesktopId',
        'desktopType'              => 'DesktopType',
        'promotionId'              => 'PromotionId',
        'regionId'                 => 'RegionId',
        'rootDiskSizeGib'          => 'RootDiskSizeGib',
        'userDiskPerformanceLevel' => 'UserDiskPerformanceLevel',
        'userDiskSizeGib'          => 'UserDiskSizeGib',
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
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rootDiskSizeGib) {
            $res['RootDiskSizeGib'] = $this->rootDiskSizeGib;
        }
        if (null !== $this->userDiskPerformanceLevel) {
            $res['UserDiskPerformanceLevel'] = $this->userDiskPerformanceLevel;
        }
        if (null !== $this->userDiskSizeGib) {
            $res['UserDiskSizeGib'] = $this->userDiskSizeGib;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDesktopSpecRequest
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
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RootDiskSizeGib'])) {
            $model->rootDiskSizeGib = $map['RootDiskSizeGib'];
        }
        if (isset($map['UserDiskPerformanceLevel'])) {
            $model->userDiskPerformanceLevel = $map['UserDiskPerformanceLevel'];
        }
        if (isset($map['UserDiskSizeGib'])) {
            $model->userDiskSizeGib = $map['UserDiskSizeGib'];
        }

        return $model;
    }
}
