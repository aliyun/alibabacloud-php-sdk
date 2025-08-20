<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models;

use AlibabaCloud\Dara\Model;

class CallBackThirdRightSendPlanShrinkRequest extends Model
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
     * @var int
     */
    public $cardType;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $extendInfoShrink;

    /**
     * @var string
     */
    public $genieOpenId;

    /**
     * @var int
     */
    public $receiveStatus;

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
        'cardType' => 'CardType',
        'errorMsg' => 'ErrorMsg',
        'extendInfoShrink' => 'ExtendInfo',
        'genieOpenId' => 'GenieOpenId',
        'receiveStatus' => 'ReceiveStatus',
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
