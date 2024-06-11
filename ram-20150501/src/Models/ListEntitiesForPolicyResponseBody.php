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
     * @description The list of the RAM user groups.
     *
     * @var groups
     */
    public $groups;

    /**
     * @description The ID of the request.
     *
     * @example 7B8A4E7D-6CFF-471D-84DF-195A7A241ECB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of RAM roles.
     *
     * @var roles
     */
    public $roles;

    /**
     * @description The list of the RAM users to which the policy is attached.
     *
     * @var users
     */
    public $users;
    protected $_name = [
        'groups'    => 'Groups',
        'requestId' => 'RequestId',
        'roles'     => 'Roles',
        'users'     => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groups) {
            $res['Groups'] = null !== $this->groups ? $this->groups->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
