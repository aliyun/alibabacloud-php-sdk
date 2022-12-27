<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\DeleteGroupMemberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 40
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @example https://tcs-devops.aliyuncs.com/thumbnail/112afcb7a6a35c3f67f1bea827c4/w/100/h/100
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @example 5f969843cd2214ba0e24327d
     *
     * @var string
     */
    public $externUid;

    /**
     * @example 524836
     *
     * @var int
     */
    public $id;

    /**
     * @example USERS
     *
     * @var string
     */
    public $memberType;

    /**
     * @example codeup
     *
     * @var string
     */
    public $name;

    /**
     * @example 2080398
     *
     * @var int
     */
    public $sourceId;

    /**
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @example test-codeup
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'accessLevel' => 'accessLevel',
        'avatarUrl'   => 'avatarUrl',
        'externUid'   => 'externUid',
        'id'          => 'id',
        'memberType'  => 'memberType',
        'name'        => 'name',
        'sourceId'    => 'sourceId',
        'state'       => 'state',
        'username'    => 'username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }
        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->externUid) {
            $res['externUid'] = $this->externUid;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->memberType) {
            $res['memberType'] = $this->memberType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }
        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }
        if (isset($map['externUid'])) {
            $model->externUid = $map['externUid'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['memberType'])) {
            $model->memberType = $map['memberType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
