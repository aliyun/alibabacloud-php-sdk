<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class MobileRecommendShrinkRequest extends Model
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
     * @var string
     */
    public $deviceInfoShrink;

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
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'botId'            => 'BotId',
        'count'            => 'Count',
        'deviceInfoShrink' => 'DeviceInfo',
        'style'            => 'Style',
        'type'             => 'Type',
        'userInfoShrink'   => 'UserInfo',
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
        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MobileRecommendShrinkRequest
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
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
