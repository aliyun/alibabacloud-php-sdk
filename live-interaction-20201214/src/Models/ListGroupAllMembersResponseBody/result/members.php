<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListGroupAllMembersResponseBody\result;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @example 123333
     *
     * @var string
     */
    public $appUid;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @example 1233333332
     *
     * @var int
     */
    public $joinTime;

    /**
     * @example testNick
     *
     * @var string
     */
    public $nick;

    /**
     * @example 1-群主；2-管理员；3-普通
     *
     * @var int
     */
    public $role;
    protected $_name = [
        'appUid'     => 'AppUid',
        'extensions' => 'Extensions',
        'joinTime'   => 'JoinTime',
        'nick'       => 'Nick',
        'role'       => 'Role',
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
        if (null !== $this->nick) {
            $res['Nick'] = $this->nick;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return members
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
        if (isset($map['Nick'])) {
            $model->nick = $map['Nick'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
