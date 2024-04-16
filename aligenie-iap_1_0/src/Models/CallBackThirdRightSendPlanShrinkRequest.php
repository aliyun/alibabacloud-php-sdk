<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Tea\Model;

class CallBackThirdRightSendPlanShrinkRequest extends Model
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
     * @example 1001
     *
     * @var int
     */
    public $cardType;

    /**
     * @example 领取异常
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example {}
     *
     * @var string
     */
    public $extendInfoShrink;

    /**
     * @example 1dsds2FzCXFGVA1ADS
     *
     * @var string
     */
    public $genieOpenId;

    /**
     * @example 1
     *
     * @var int
     */
    public $receiveStatus;

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
        'cardType'         => 'CardType',
        'errorMsg'         => 'ErrorMsg',
        'extendInfoShrink' => 'ExtendInfo',
        'genieOpenId'      => 'GenieOpenId',
        'receiveStatus'    => 'ReceiveStatus',
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
        if (null !== $this->cardType) {
            $res['CardType'] = $this->cardType;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->extendInfoShrink) {
            $res['ExtendInfo'] = $this->extendInfoShrink;
        }
        if (null !== $this->genieOpenId) {
            $res['GenieOpenId'] = $this->genieOpenId;
        }
        if (null !== $this->receiveStatus) {
            $res['ReceiveStatus'] = $this->receiveStatus;
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
     * @return CallBackThirdRightSendPlanShrinkRequest
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
        if (isset($map['CardType'])) {
            $model->cardType = $map['CardType'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfoShrink = $map['ExtendInfo'];
        }
        if (isset($map['GenieOpenId'])) {
            $model->genieOpenId = $map['GenieOpenId'];
        }
        if (isset($map['ReceiveStatus'])) {
            $model->receiveStatus = $map['ReceiveStatus'];
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
