<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ImportGroupChatMemberRequest\requestParams;

use AlibabaCloud\Tea\Model;

class groupChatMembers extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $appUid;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @example 1613700223555
     *
     * @var int
     */
    public $joinTime;

    /**
     * @example 1613700223555
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $mute;

    /**
     * @example bob
     *
     * @var string
     */
    public $nick;

    /**
     * @example 1
     *
     * @var int
     */
    public $redPoint;

    /**
     * @example 3
     *
     * @var int
     */
    public $role;

    /**
     * @example false
     *
     * @var bool
     */
    public $top;

    /**
     * @example true
     *
     * @var bool
     */
    public $visible;
    protected $_name = [
        'appUid'     => 'AppUid',
        'extensions' => 'Extensions',
        'joinTime'   => 'JoinTime',
        'modifyTime' => 'ModifyTime',
        'mute'       => 'Mute',
        'nick'       => 'Nick',
        'redPoint'   => 'RedPoint',
        'role'       => 'Role',
        'top'        => 'Top',
        'visible'    => 'Visible',
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
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->mute) {
            $res['Mute'] = $this->mute;
        }
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->redPoint) {
            $res['RedPoint'] = $this->redPoint;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->visible) {
            $res['Visible'] = $this->visible;
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
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Mute'])) {
            $model->mute = $map['Mute'];
        }
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['RedPoint'])) {
            $model->redPoint = $map['RedPoint'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['Visible'])) {
            $model->visible = $map['Visible'];
        }

        return $model;
    }
}
