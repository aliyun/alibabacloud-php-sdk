<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetProjectMemberResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @example https://tcs-devops.aliyuncs.com/thumbnail/112afcb7a6a35c4ef67f1bea827c4/w/100/h/100
     *
     * @var string
     */
    public $avatarUrl;

    /**
     * @example 5f969843cd2214ba0e24327d
     *
     * @var string
     */
    public $externUserId;

    /**
     * @example 2959
     *
     * @var int
     */
    public $id;

    /**
     * @example codeup
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'accessLevel'  => 'accessLevel',
        'avatarUrl'    => 'avatarUrl',
        'externUserId' => 'externUserId',
        'id'           => 'id',
        'name'         => 'name',
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
        if (null !== $this->externUserId) {
            $res['externUserId'] = $this->externUserId;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['externUserId'])) {
            $model->externUserId = $map['externUserId'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
