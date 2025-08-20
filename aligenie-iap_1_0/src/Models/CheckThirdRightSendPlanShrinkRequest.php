<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Dara\Model;

class CheckThirdRightSendPlanShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizGroup;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $extendInfoShrink;

    /**
     * @var string
     */
    public $sn;

    /**
     * @var int
     */
    public $supplierId;
    protected $_name = [
        'bizGroup' => 'BizGroup',
        'bizType' => 'BizType',
        'extendInfoShrink' => 'ExtendInfo',
        'sn' => 'Sn',
        'supplierId' => 'SupplierId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizGroup) {
            $res['BizGroup'] = $this->bizGroup;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->extendInfoShrink) {
            $res['ExtendInfo'] = $this->extendInfoShrink;
        }

        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }

        if (null !== $this->supplierId) {
            $res['SupplierId'] = $this->supplierId;
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
        if (isset($map['BizGroup'])) {
            $model->bizGroup = $map['BizGroup'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ExtendInfo'])) {
            $model->extendInfoShrink = $map['ExtendInfo'];
        }

        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        if (isset($map['SupplierId'])) {
            $model->supplierId = $map['SupplierId'];
        }

        return $model;
    }
}
