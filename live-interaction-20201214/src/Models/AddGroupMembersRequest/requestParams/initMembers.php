<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\AddGroupMembersRequest\requestParams;

use AlibabaCloud\Tea\Model;

class initMembers extends Model
{
    /**
     * @var string
     */
    public $appUid;

    /**
     * @description 1群主，2管理员，3普通
     *
     * @var int
     */
    public $role;

    /**
     * @var string
     */
    public $nick;

    /**
     * @description unix毫秒数
     *
     * @var int
     */
    public $joinTime;

    /**
     * @var string[]
     */
    public $extensions;
    protected $_name = [
        'appUid'     => 'AppUid',
        'role'       => 'Role',
        'nick'       => 'Nick',
        'joinTime'   => 'JoinTime',
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
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return initMembers
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
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }

        return $model;
    }
}
