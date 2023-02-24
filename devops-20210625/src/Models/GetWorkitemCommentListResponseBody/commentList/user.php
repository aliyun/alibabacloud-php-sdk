<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemCommentListResponseBody\commentList;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $realName;
    protected $_name = [
        'account'    => 'account',
        'avatar'     => 'avatar',
        'identifier' => 'identifier',
        'nickName'   => 'nickName',
        'realName'   => 'realName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['account'] = $this->account;
        }
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->nickName) {
            $res['nickName'] = $this->nickName;
        }
        if (null !== $this->realName) {
            $res['realName'] = $this->realName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['account'])) {
            $model->account = $map['account'];
        }
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['nickName'])) {
            $model->nickName = $map['nickName'];
        }
        if (isset($map['realName'])) {
            $model->realName = $map['realName'];
        }

        return $model;
    }
}
