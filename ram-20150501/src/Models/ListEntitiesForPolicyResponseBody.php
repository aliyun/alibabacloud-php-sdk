<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponseBody\groups;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponseBody\roles;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponseBody\users;

class ListEntitiesForPolicyResponseBody extends Model
{
    /**
     * @var groups
     */
    public $groups;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var roles
     */
    public $roles;

    /**
     * @var users
     */
    public $users;
    protected $_name = [
        'groups' => 'Groups',
        'requestId' => 'RequestId',
        'roles' => 'Roles',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (null !== $this->groups) {
            $this->groups->validate();
        }
        if (null !== $this->roles) {
            $this->roles->validate();
        }
        if (null !== $this->users) {
            $this->users->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groups) {
            $res['Groups'] = null !== $this->groups ? $this->groups->toArray($noStream) : $this->groups;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toArray($noStream) : $this->roles;
        }

        if (null !== $this->users) {
            $res['Users'] = null !== $this->users ? $this->users->toArray($noStream) : $this->users;
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
        if (isset($map['Groups'])) {
            $model->groups = groups::fromMap($map['Groups']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }

        if (isset($map['Users'])) {
            $model->users = users::fromMap($map['Users']);
        }

        return $model;
    }
}
