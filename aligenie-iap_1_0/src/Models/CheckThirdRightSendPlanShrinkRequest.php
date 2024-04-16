<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Tea\Model;

class CheckThirdRightSendPlanShrinkRequest extends Model
{
    /**
     * @example cc
     *
     * @var string
     */
    public $bizGroup;

    /**
     * @example ailabs
     *
     * @var string
     */
    public $bizType;

    /**
     * @example {}
     *
     * @var string
     */
    public $extendInfoShrink;

    /**
     * @example 01000019100307010000600
     *
     * @var string
     */
    public $sn;

    /**
     * @example 1
     *
     * @var int
     */
    public $supplierId;
    protected $_name = [
        'bizGroup'         => 'BizGroup',
        'bizType'          => 'BizType',
        'extendInfoShrink' => 'ExtendInfo',
        'sn'               => 'Sn',
        'supplierId'       => 'SupplierId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CheckThirdRightSendPlanShrinkRequest
     */
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
