<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponseBody\groups;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponseBody\roles;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListEntitiesForPolicyResponseBody\users;
use AlibabaCloud\Tea\Model;

class ListEntitiesForPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var groups
     */
    public $groups;

    /**
     * @var roles
     */
    public $roles;

    /**
     * @var users
     */
    public $users;
    protected $_name = [
        'requestId' => 'RequestId',
        'groups'    => 'Groups',
        'roles'     => 'Roles',
        'users'     => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->groups) {
            $res['Groups'] = null !== $this->groups ? $this->groups->toMap() : null;
        }
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        }
        if (null !== $this->users) {
            $res['Users'] = null !== $this->users ? $this->users->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEntitiesForPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Groups'])) {
            $model->groups = groups::fromMap($map['Groups']);
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
