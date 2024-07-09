<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopSpecRequest\resourceSpecs;
use AlibabaCloud\Tea\Model;

class ModifyDesktopSpecRequest extends Model
{
    /**
     * @description Specifies whether to enable the auto-payment feature.
     *
     * Default value: true. Valid values:
     *
     *   true: enables the auto-payment feature.
     *
     * <!-- -->
     *
     *   false: disables the auto-payment feature. In this case, an order is generated, and no payment is automatically made.
     *
     * <!-- -->
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The ID of a cloud computer.
     *
     * @example ecd-4543qyik164a4****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The destination instance type. You can call the [DescribeDesktopTypes](https://help.aliyun.com/document_detail/188882.html) operation to query the instance types supported by cloud computers.
     *
     * This parameter is required.
     * @example eds.general.2c8g
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The ID of the promotional activity.
     *
     * @example 500033080110596
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var resourceSpecs[]
     */
    public $resourceSpecs;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @description The size of the new system disk. Unit: GiB. Valid values: 80 to 500 GiB. The value must be a multiple of 10.
     *
     * @example 80
     *
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @description The performance level (PL) of the data disk. Default value: PL0.
     *
     * Valid values:
     *
     *   PL1
     *
     * <!-- -->
     *
     *   PL0
     *
     * <!-- -->
     *
     *   PL3
     *
     * <!-- -->
     *
     *   PL2
     *
     * <!-- -->
     * @example PL0
     *
     * @var string
     */
    public $userDiskPerformanceLevel;

    /**
     * @description The destination data disk size. Unit: GiB.
     *
     *   The data disk size of a non-graphical cloud computer ranges from 20 to 1020 GiB and must be a multiple of 10.
     *   The data disk size of a graphical cloud computer ranges from 40 to 1020 GiB and must be a multiple of 10.
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
        'resourceSpecs'            => 'ResourceSpecs',
        'resourceType'             => 'ResourceType',
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
        if (null !== $this->resourceSpecs) {
            $res['ResourceSpecs'] = [];
            if (null !== $this->resourceSpecs && \is_array($this->resourceSpecs)) {
                $n = 0;
                foreach ($this->resourceSpecs as $item) {
                    $res['ResourceSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['ResourceSpecs'])) {
            if (!empty($map['ResourceSpecs'])) {
                $model->resourceSpecs = [];
                $n                    = 0;
                foreach ($map['ResourceSpecs'] as $item) {
                    $model->resourceSpecs[$n++] = null !== $item ? resourceSpecs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
