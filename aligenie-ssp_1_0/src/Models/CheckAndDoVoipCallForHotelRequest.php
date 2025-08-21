<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAndDoVoipCallForHotelRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAndDoVoipCallForHotelRequest\userInfo;

class CheckAndDoVoipCallForHotelRequest extends Model
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
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'bizData' => 'BizData',
        'calleeNick' => 'CalleeNick',
        'calleePhoneNum' => 'CalleePhoneNum',
        'deviceInfo' => 'DeviceInfo',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
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

        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toArray($noStream) : $this->deviceInfo;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
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
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
