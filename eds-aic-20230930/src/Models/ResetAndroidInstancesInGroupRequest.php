<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ResetAndroidInstancesInGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $ignoreParamValidation;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var string
     */
    public $saleMode;

    /**
     * @var int
     */
    public $settingResetType;

    /**
     * @var int
     */
    public $targetDataDiskSize;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'autoPay' => 'AutoPay',
        'ignoreParamValidation' => 'IgnoreParamValidation',
        'promotionId' => 'PromotionId',
        'saleMode' => 'SaleMode',
        'settingResetType' => 'SettingResetType',
        'targetDataDiskSize' => 'TargetDataDiskSize',
    ];

    public function validate()
    {
        if (\is_array($this->androidInstanceIds)) {
            Model::validateArray($this->androidInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            if (\is_array($this->androidInstanceIds)) {
                $res['AndroidInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->androidInstanceIds as $item1) {
                    $res['AndroidInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->ignoreParamValidation) {
            $res['IgnoreParamValidation'] = $this->ignoreParamValidation;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
        }

        if (null !== $this->settingResetType) {
            $res['SettingResetType'] = $this->settingResetType;
        }

        if (null !== $this->targetDataDiskSize) {
            $res['TargetDataDiskSize'] = $this->targetDataDiskSize;
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
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = [];
                $n1 = 0;
                foreach ($map['AndroidInstanceIds'] as $item1) {
                    $model->androidInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['IgnoreParamValidation'])) {
            $model->ignoreParamValidation = $map['IgnoreParamValidation'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }

        if (isset($map['SettingResetType'])) {
            $model->settingResetType = $map['SettingResetType'];
        }

        if (isset($map['TargetDataDiskSize'])) {
            $model->targetDataDiskSize = $map['TargetDataDiskSize'];
        }

        return $model;
    }
}
