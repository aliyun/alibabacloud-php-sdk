<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceProvisionsResponseBody\serviceProvisions;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceProvisionsResponseBody\serviceProvisions\roleProvision\roles;
use AlibabaCloud\Tea\Model;

class roleProvision extends Model
{
    /**
     * @description The authorization URL of the RAM role.
     *
     * > This parameter is returned if Created is set to false.
     * @example https://ram.console.aliyun.com/role/authorization?request={"Services":[{"Service":"CS","Roles":[{"RoleName":"AliyunCSManagedVKRole","TemplateId":"AliyunCSManagedVKRole"},{"RoleName":"AliyunCSDefaultRole","TemplateId":"Default"}]}],"ReturnUrl":"https://cs.console.aliyun.com/"}
     *
     * @var string
     */
    public $authorizationURL;

    /**
     * @description The RAM roles of the service.
     *
     * @var roles[]
     */
    public $roles;
    protected $_name = [
        'authorizationURL' => 'AuthorizationURL',
        'roles'            => 'Roles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationURL) {
            $res['AuthorizationURL'] = $this->authorizationURL;
        }
        if (null !== $this->roles) {
            $res['Roles'] = [];
            if (null !== $this->roles && \is_array($this->roles)) {
                $n = 0;
                foreach ($this->roles as $item) {
                    $res['Roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleProvision
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationURL'])) {
            $model->authorizationURL = $map['AuthorizationURL'];
        }
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n            = 0;
                foreach ($map['Roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
