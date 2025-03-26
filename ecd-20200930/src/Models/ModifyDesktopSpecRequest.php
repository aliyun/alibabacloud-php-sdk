<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopSpecRequest\resourceSpecs;

class ModifyDesktopSpecRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var string
     */
    public $promotionId;

    /**
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
     * @var int
     */
    public $rootDiskSizeGib;

    /**
     * @var string
     */
    public $userDiskPerformanceLevel;

    /**
     * @var int
     */
    public $userDiskSizeGib;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'desktopId' => 'DesktopId',
        'desktopType' => 'DesktopType',
        'promotionId' => 'PromotionId',
        'regionId' => 'RegionId',
        'resourceSpecs' => 'ResourceSpecs',
        'resourceType' => 'ResourceType',
        'rootDiskSizeGib' => 'RootDiskSizeGib',
        'userDiskPerformanceLevel' => 'UserDiskPerformanceLevel',
        'userDiskSizeGib' => 'UserDiskSizeGib',
    ];

    public function validate()
    {
        if (\is_array($this->resourceSpecs)) {
            Model::validateArray($this->resourceSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->resourceSpecs)) {
                $res['ResourceSpecs'] = [];
                $n1 = 0;
                foreach ($this->resourceSpecs as $item1) {
                    $res['ResourceSpecs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ResourceSpecs'] as $item1) {
                    $model->resourceSpecs[$n1++] = resourceSpecs::fromMap($item1);
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
