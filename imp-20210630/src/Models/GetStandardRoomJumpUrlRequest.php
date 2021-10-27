<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class GetStandardRoomJumpUrlRequest extends Model
{
    /**
     * @description 用户的应用ID，在控制台创建应用时生成
     *
     * @var string
     */
    public $appId;

    /**
     * @description 终端设备类型,通过控制台创建和查询
     *
     * @var string
     */
    public $appKey;

    /**
     * @description 资源ID：根据业务类型来定，比如直播ID，课堂ID等
     *
     * @var string
     */
    public $bizId;

    /**
     * @description 业务类型：互动直播live，互动课堂class
     *
     * @var string
     */
    public $bizType;

    /**
     * @description 平台：win, mac, android, ios, web
     *
     * @var string
     */
    public $platform;

    /**
     * @description 用户UserId,在AppId下单独唯一
     *
     * @var string
     */
    public $userId;

    /**
     * @description 用户昵称
     *
     * @var string
     */
    public $userNick;
    protected $_name = [
        'appId'    => 'AppId',
        'appKey'   => 'AppKey',
        'bizId'    => 'BizId',
        'bizType'  => 'BizType',
        'platform' => 'Platform',
        'userId'   => 'UserId',
        'userNick' => 'UserNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStandardRoomJumpUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
