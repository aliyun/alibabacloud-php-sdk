<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class GetUserTokenPageRequest extends Model
{
    /**
     * @description 业务ID
     *
     * @var string
     */
    public $bizId;

    /**
     * @description 过期时间
     *
     * @var int
     */
    public $expireSeconds;

    /**
     * @description 扩展信息
     *
     * @var string
     */
    public $extJson;

    /**
     * @description 业务方用户ID
     *
     * @var string
     */
    public $thirdPartyUserId;

    /**
     * @description 用户昵称
     *
     * @var string
     */
    public $userNick;
    protected $_name = [
        'bizId'            => 'BizId',
        'expireSeconds'    => 'ExpireSeconds',
        'extJson'          => 'ExtJson',
        'thirdPartyUserId' => 'ThirdPartyUserId',
        'userNick'         => 'UserNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->expireSeconds) {
            $res['ExpireSeconds'] = $this->expireSeconds;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->thirdPartyUserId) {
            $res['ThirdPartyUserId'] = $this->thirdPartyUserId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserTokenPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ExpireSeconds'])) {
            $model->expireSeconds = $map['ExpireSeconds'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['ThirdPartyUserId'])) {
            $model->thirdPartyUserId = $map['ThirdPartyUserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
