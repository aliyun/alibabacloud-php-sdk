<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveRequest extends Model
{
    /**
     * @description 主播ID，支持中英文，最大长度128位，缺省时主播为当前创建直播用户。
     *
     * @var string
     */
    public $anchorId;

    /**
     * @description 应用唯一标识，可以包含小写字母、数字，长度为6个字符。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 直播推流码率，缺省时默认为3。取值：  -1：流畅lld。 1：标清lsd。 2：高清lhd。 3：超清lud。
     *
     * @var int
     */
    public $codeLevel;

    /**
     * @description 直播简介，支持中英文，最大长度2048位。
     *
     * @var string
     */
    public $introduction;

    /**
     * @description 直播资源的唯一标识ID，缺省时系统自动生成36位随机uuid字符串。
     *
     * @var string
     */
    public $liveId;

    /**
     * @description 房间ID，最大长度36个字符，传空值，则随机生成一个房间ID。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 直播标题，支持中英文，最大长度256位。
     *
     * @var string
     */
    public $title;

    /**
     * @description 创建直播用户。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'anchorId'     => 'AnchorId',
        'appId'        => 'AppId',
        'codeLevel'    => 'CodeLevel',
        'introduction' => 'Introduction',
        'liveId'       => 'LiveId',
        'roomId'       => 'RoomId',
        'title'        => 'Title',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorId) {
            $res['AnchorId'] = $this->anchorId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->codeLevel) {
            $res['CodeLevel'] = $this->codeLevel;
        }
        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CodeLevel'])) {
            $model->codeLevel = $map['CodeLevel'];
        }
        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
