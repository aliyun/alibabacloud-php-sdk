<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;

class CheckAndDoVoipCallForHotelShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizData;

    /**
     * @var string
     */
    public $calleeNick;

    /**
     * @var string
     */
    public $calleePhoneNum;

    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'bizData' => 'BizData',
        'calleeNick' => 'CalleeNick',
        'calleePhoneNum' => 'CalleePhoneNum',
        'deviceInfoShrink' => 'DeviceInfo',
        'userInfoShrink' => 'UserInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizData) {
            $res['BizData'] = $this->bizData;
        }

        if (null !== $this->calleeNick) {
            $res['CalleeNick'] = $this->calleeNick;
        }

        if (null !== $this->calleePhoneNum) {
            $res['CalleePhoneNum'] = $this->calleePhoneNum;
        }

        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }

        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
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
        if (isset($map['BizData'])) {
            $model->bizData = $map['BizData'];
        }

        if (isset($map['CalleeNick'])) {
            $model->calleeNick = $map['CalleeNick'];
        }

        if (isset($map['CalleePhoneNum'])) {
            $model->calleePhoneNum = $map['CalleePhoneNum'];
        }

        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
