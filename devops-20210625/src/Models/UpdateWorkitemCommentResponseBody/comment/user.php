<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkitemCommentResponseBody\comment;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @example 1316458xxxxx41068
     *
     * @var string
     */
    public $account;

    /**
     * @example https://tcs-devops.aliyuncs.com/thumbnail/112m7150e256dbba0d6456bafbb65c81f90d/w/200/h/200
     *
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @example 9144ef6b72d8exxxxx9e61a4d0
     *
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
        'account'     => 'account',
        'avatar'      => 'avatar',
        'displayName' => 'displayName',
        'identifier'  => 'identifier',
        'nickName'    => 'nickName',
        'realName'    => 'realName',
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
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
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
