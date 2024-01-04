<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\MobileRecommendRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\MobileRecommendRequest\userInfo;
use AlibabaCloud\Tea\Model;

class MobileRecommendRequest extends Model
{
    /**
     * @example 10
     *
     * @var string
     */
    public $botId;

    /**
     * @example 6
     *
     * @var string
     */
    public $count;

    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var string
     */
    public $style;

    /**
     * @example DAILY_REC
     *
     * @var string
     */
    public $type;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'botId'      => 'BotId',
        'count'      => 'Count',
        'deviceInfo' => 'DeviceInfo',
        'style'      => 'Style',
        'type'       => 'Type',
        'userInfo'   => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->botId) {
            $res['BotId'] = $this->botId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toMap() : null;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MobileRecommendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BotId'])) {
            $model->botId = $map['BotId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
