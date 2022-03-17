<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class StartUserGameRequest extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @description 活动ID
     *
     * @var string
     */
    public $activityId;

    /**
     * @description 业务ID
     *
     * @var string
     */
    public $bizId;

    /**
     * @description 扩展信息
     *
     * @var mixed[]
     */
    public $extInfo;

    /**
     * @description 玩法ID
     *
     * @var string
     */
    public $gameId;

    /**
     * @description 路线ID
     *
     * @var string
     */
    public $routeId;

    /**
     * @description 业务方用户ID
     *
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @description 用户APP
     *
     * @var string
     */
    public $userApp;
    protected $_name = [
        'accountType'      => 'AccountType',
        'activityId'       => 'ActivityId',
        'bizId'            => 'BizId',
        'extInfo'          => 'ExtInfo',
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
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
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
     * @return StartUserGameRequest
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
            $model->extInfo = $map['ExtInfo'];
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
