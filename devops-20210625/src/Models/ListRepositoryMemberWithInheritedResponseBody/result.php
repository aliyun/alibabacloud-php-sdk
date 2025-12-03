<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryMemberWithInheritedResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryMemberWithInheritedResponseBody\result\inherited;

class result extends Model
{
    /**
     * @var int
     */
    public $accessLevel;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $id;

    /**
     * @var inherited
     */
    public $inherited;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'accessLevel' => 'accessLevel',
        'avatarUrl' => 'avatarUrl',
        'email' => 'email',
        'id' => 'id',
        'inherited' => 'inherited',
        'name' => 'name',
        'state' => 'state',
        'username' => 'username',
    ];

    public function validate()
    {
        if (null !== $this->inherited) {
            $this->inherited->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }

        if (null !== $this->avatarUrl) {
            $res['avatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->inherited) {
            $res['inherited'] = null !== $this->inherited ? $this->inherited->toArray($noStream) : $this->inherited;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
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
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }

        if (isset($map['avatarUrl'])) {
            $model->avatarUrl = $map['avatarUrl'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['inherited'])) {
            $model->inherited = inherited::fromMap($map['inherited']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
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
