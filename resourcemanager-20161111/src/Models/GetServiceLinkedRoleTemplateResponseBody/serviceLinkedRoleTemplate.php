<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleTemplateResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleTemplateResponseBody\serviceLinkedRoleTemplate\roleDescriptions;
use AlibabaCloud\Tea\Model;

class serviceLinkedRoleTemplate extends Model
{
    /**
     * @var bool
     */
    public $multipleRolesAllowed;

    /**
     * @var roleDescriptions
     */
    public $roleDescriptions;

    /**
     * @var string
     */
    public $roleNamePrefix;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $systemPolicyName;
    protected $_name = [
        'multipleRolesAllowed' => 'MultipleRolesAllowed',
        'roleDescriptions'     => 'RoleDescriptions',
        'roleNamePrefix'       => 'RoleNamePrefix',
        'serviceName'          => 'ServiceName',
        'systemPolicyName'     => 'SystemPolicyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->multipleRolesAllowed) {
            $res['MultipleRolesAllowed'] = $this->multipleRolesAllowed;
        }
        if (null !== $this->roleDescriptions) {
            $res['RoleDescriptions'] = null !== $this->roleDescriptions ? $this->roleDescriptions->toMap() : null;
        }
        if (null !== $this->roleNamePrefix) {
            $res['RoleNamePrefix'] = $this->roleNamePrefix;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->systemPolicyName) {
            $res['SystemPolicyName'] = $this->systemPolicyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceLinkedRoleTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MultipleRolesAllowed'])) {
            $model->multipleRolesAllowed = $map['MultipleRolesAllowed'];
        }
        if (isset($map['RoleDescriptions'])) {
            $model->roleDescriptions = roleDescriptions::fromMap($map['RoleDescriptions']);
        }
        if (isset($map['RoleNamePrefix'])) {
            $model->roleNamePrefix = $map['RoleNamePrefix'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SystemPolicyName'])) {
            $model->systemPolicyName = $map['SystemPolicyName'];
        }

        return $model;
    }
}
