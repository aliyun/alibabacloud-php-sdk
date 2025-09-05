<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class UpgradeAndroidInstanceGroupRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var int
     */
    public $increaseNumberOfInstance;

    /**
     * @var string
     */
    public $instanceGroupId;

    /**
     * @var string
     */
    public $promotionId;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'increaseNumberOfInstance' => 'IncreaseNumberOfInstance',
        'instanceGroupId' => 'InstanceGroupId',
        'promotionId' => 'PromotionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->increaseNumberOfInstance) {
            $res['IncreaseNumberOfInstance'] = $this->increaseNumberOfInstance;
        }

        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
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

        if (isset($map['IncreaseNumberOfInstance'])) {
            $model->increaseNumberOfInstance = $map['IncreaseNumberOfInstance'];
        }

        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        return $model;
    }
}
