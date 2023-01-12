<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class StartUserGameShrinkRequest extends Model
{
    /**
     * @example ANONY
     *
     * @var string
     */
    public $accountType;

    /**
     * @example 671091829240653825
     *
     * @var string
     */
    public $activityId;

    /**
     * @example LMALL20288*****003
     *
     * @var string
     */
    public $bizId;

    /**
     * @example {\"channelId\":\"test\"}
     *
     * @var string
     */
    public $extInfoShrink;

    /**
     * @example 673474835708274689
     *
     * @var string
     */
    public $gameId;

    /**
     * @example RouteId1
     *
     * @var string
     */
    public $routeId;

    /**
     * @example 123
     *
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @example MAC
     *
     * @var string
     */
    public $userApp;
    protected $_name = [
        'accountType'      => 'AccountType',
        'activityId'       => 'ActivityId',
        'bizId'            => 'BizId',
        'extInfoShrink'    => 'ExtInfo',
        'gameId'           => 'GameId',
        'routeId'          => 'RouteId',
        'thirdPartyUserId' => 'ThirdPartyUserId',
        'userApp'          => 'UserApp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->extInfoShrink) {
            $res['ExtInfo'] = $this->extInfoShrink;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->userApp) {
            $res['UserApp'] = $this->userApp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartUserGameShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfoShrink = $map['ExtInfo'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['UserApp'])) {
            $model->userApp = $map['UserApp'];
        }

        return $model;
    }
}
