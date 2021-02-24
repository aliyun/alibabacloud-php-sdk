<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatMemberRequest\requestParams;

use AlibabaCloud\Tea\Model;

class groupChatMembers extends Model
{
    /**
     * @description 用户ID
     *
     * @var string
     */
    public $appUid;

    /**
     * @description 成员权限
     *
     * @var int
     */
    public $role;

    /**
     * @description 昵称
     *
     * @var string
     */
    public $nick;

    /**
     * @description 是否置顶
     *
     * @var bool
     */
    public $top;

    /**
     * @description 未读数
     *
     * @var int
     */
    public $redPoint;

    /**
     * @description 是否免打扰
     *
     * @var bool
     */
    public $mute;

    /**
     * @description 是否可见
     *
     * @var bool
     */
    public $visible;

    /**
     * @description 入群时间戳
     *
     * @var int
     */
    public $joinTime;

    /**
     * @description 最后修改时间
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description 自定义信息
     *
     * @var string[]
     */
    public $extensions;
    protected $_name = [
        'appUid'     => 'AppUid',
        'role'       => 'Role',
        'nick'       => 'Nick',
        'top'        => 'Top',
        'redPoint'   => 'RedPoint',
        'mute'       => 'Mute',
        'visible'    => 'Visible',
        'joinTime'   => 'JoinTime',
        'modifyTime' => 'ModifyTime',
        'extensions' => 'Extensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->redPoint) {
            $res['RedPoint'] = $this->redPoint;
        }
        if (null !== $this->mute) {
            $res['Mute'] = $this->mute;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
        }
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupChatMembers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['RedPoint'])) {
            $model->redPoint = $map['RedPoint'];
        }
        if (isset($map['Mute'])) {
            $model->mute = $map['Mute'];
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }

        return $model;
    }
}
