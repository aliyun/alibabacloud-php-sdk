<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLinkedRoleTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLinkedRoleTemplateResponseBody\serviceLinkedRoleTemplate\roleDescriptions;

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
        'roleDescriptions' => 'RoleDescriptions',
        'roleNamePrefix' => 'RoleNamePrefix',
        'serviceName' => 'ServiceName',
        'systemPolicyName' => 'SystemPolicyName',
    ];

    public function validate()
    {
        if (null !== $this->roleDescriptions) {
            $this->roleDescriptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->multipleRolesAllowed) {
            $res['MultipleRolesAllowed'] = $this->multipleRolesAllowed;
        }

        if (null !== $this->roleDescriptions) {
            $res['RoleDescriptions'] = null !== $this->roleDescriptions ? $this->roleDescriptions->toArray($noStream) : $this->roleDescriptions;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
