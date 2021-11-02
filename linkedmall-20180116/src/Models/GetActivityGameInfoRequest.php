<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class GetActivityGameInfoRequest extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $thirdPartyUserId;
    protected $_name = [
        'accountType'      => 'AccountType',
        'activityId'       => 'ActivityId',
        'bizId'            => 'BizId',
        'gameId'           => 'GameId',
        'thirdPartyUserId' => 'ThirdPartyUserId',
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
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetActivityGameInfoRequest
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
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }

        return $model;
    }
}
