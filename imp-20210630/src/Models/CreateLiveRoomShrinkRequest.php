<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveRoomShrinkRequest extends Model
{
    /**
     * @description 主播id，仅支持英文和数字，最大长度36位。
     *
     * @var string
     */
    public $anchorId;

    /**
     * @description 主播昵称。
     *
     * @var string
     */
    public $anchorNick;

    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 封面，支持图片地址链接格式
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description 拓展字段，按需传递，需要额外记录的房间属性。
     *
     * @var string
     */
    public $extensionShrink;

    /**
     * @description 公告，支持中英文，最大长度256位。
     *
     * @var string
     */
    public $notice;

    /**
     * @description 标题，支持中英文，最大长度32位。
     *
     * @var string
     */
    public $title;

    /**
     * @description 操作人ID。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'anchorId'        => 'AnchorId',
        'anchorNick'      => 'AnchorNick',
        'appId'           => 'AppId',
        'coverUrl'        => 'CoverUrl',
        'extensionShrink' => 'Extension',
        'notice'          => 'Notice',
        'title'           => 'Title',
        'userId'          => 'UserId',
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
        if (null !== $this->anchorNick) {
            $res['AnchorNick'] = $this->anchorNick;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->extensionShrink) {
            $res['Extension'] = $this->extensionShrink;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
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
     * @return CreateLiveRoomShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }
        if (isset($map['AnchorNick'])) {
            $model->anchorNick = $map['AnchorNick'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['Extension'])) {
            $model->extensionShrink = $map['Extension'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
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
