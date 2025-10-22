<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\CheckPushReceiverResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var bool
     */
    public $canReceivePush;

    /**
     * @var string
     */
    public $maskedMobile;

    /**
     * @var string
     */
    public $reasonCode;
    protected $_name = [
        'canReceivePush' => 'CanReceivePush',
        'maskedMobile' => 'MaskedMobile',
        'reasonCode' => 'ReasonCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canReceivePush) {
            $res['CanReceivePush'] = $this->canReceivePush;
        }

        if (null !== $this->maskedMobile) {
            $res['MaskedMobile'] = $this->maskedMobile;
        }

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
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
        if (isset($map['CanReceivePush'])) {
            $model->canReceivePush = $map['CanReceivePush'];
        }

        if (isset($map['MaskedMobile'])) {
            $model->maskedMobile = $map['MaskedMobile'];
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        return $model;
    }
}
