<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\GrantUserPermissionsRequest;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @example cf67bdb0ffcb349ecabc1ca70da78****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example test
     *
     * @var string
     */
    public $namespace;

    /**
     * @example dev
     *
     * @var string
     */
    public $roleName;

    /**
     * @example cluster
     *
     * @var string
     */
    public $roleType;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'namespace' => 'Namespace',
        'roleName'  => 'RoleName',
        'roleType'  => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
