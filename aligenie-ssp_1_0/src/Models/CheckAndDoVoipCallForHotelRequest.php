<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAndDoVoipCallForHotelRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAndDoVoipCallForHotelRequest\userInfo;
use AlibabaCloud\Tea\Model;

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
        'bizData'        => 'BizData',
        'calleeNick'     => 'CalleeNick',
        'calleePhoneNum' => 'CalleePhoneNum',
        'deviceInfo'     => 'DeviceInfo',
        'userInfo'       => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckAndDoVoipCallForHotelRequest
     */
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
