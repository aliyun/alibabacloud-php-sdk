<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterArchRequest extends Model
{
    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $hotStandbyCluster;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $standbyAZ;
    protected $_name = [
        'autoUseCoupon' => 'AutoUseCoupon',
        'DBClusterId' => 'DBClusterId',
        'hotStandbyCluster' => 'HotStandbyCluster',
        'promotionCode' => 'PromotionCode',
        'regionId' => 'RegionId',
        'standbyAZ' => 'StandbyAZ',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->hotStandbyCluster) {
            $res['HotStandbyCluster'] = $this->hotStandbyCluster;
        }

        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->standbyAZ) {
            $res['StandbyAZ'] = $this->standbyAZ;
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
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['HotStandbyCluster'])) {
            $model->hotStandbyCluster = $map['HotStandbyCluster'];
        }

        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StandbyAZ'])) {
            $model->standbyAZ = $map['StandbyAZ'];
        }

        return $model;
    }
}
