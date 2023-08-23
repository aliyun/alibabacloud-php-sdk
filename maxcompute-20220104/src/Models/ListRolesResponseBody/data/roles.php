<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data\roles\acl;
use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @description The ACL-based permissions that are granted to the role.
     *
     * @var acl
     */
    public $acl;

    /**
     * @description The name of the role.
     *
     * @example roleA
     *
     * @var string
     */
    public $name;

    /**
     * @description The policy that is attached to the role.
     *
     * @example {
     * "Action": [
     * "odps:*"
     * "Resource": [
     * "acs:odps:*:projects/{projectname}/authorization/packages"
     * }
     * @var string
     */
    public $policy;

    /**
     * @description The type of the role.
     *
     * @example admin
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acl'    => 'acl',
        'name'   => 'name',
        'policy' => 'policy',
        'type'   => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = null !== $this->acl ? $this->acl->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['acl'])) {
            $model->acl = acl::fromMap($map['acl']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
