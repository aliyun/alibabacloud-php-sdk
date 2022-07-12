<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyDiskSpecRequest extends Model
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
    public $promotionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $rootDiskPerformanceLevel;

    /**
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
