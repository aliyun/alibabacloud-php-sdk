<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateWorkitemCommentResponseBody\comment;

use AlibabaCloud\Dara\Model;

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
    public $displayName;
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
        'account'     => 'account',
        'avatar'      => 'avatar',
        'displayName' => 'displayName',
        'identifier'  => 'identifier',
        'nickName'    => 'nickName',
        'realName'    => 'realName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
