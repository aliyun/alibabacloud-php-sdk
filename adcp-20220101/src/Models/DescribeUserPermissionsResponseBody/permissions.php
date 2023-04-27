<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeUserPermissionsResponseBody;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @description The authorization setting. Valid values:
     *
     *   {cluster_id} is returned if the permissions are scoped to a cluster.
     *   {cluster_id}/{namespace} is returned if the permissions are scoped to a namespace of a cluster.
     *   all-clusters is returned if the permissions are scoped to all clusters.
     *
     * @example cffef3c9c7ba145b083292942a2c3****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The authorization type. Valid values:
     *
     *   cluster: indicates that the permissions are scoped to a cluster.
     *   namespace: indicates that the permissions are scoped to a namespace of a cluster.
     *
     * @example cluster
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The name of the custom role. If a custom role is assigned, the value is the name of the assigned custom role.
     *
     * @example view
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The type of predefined role. Valid values:
     *
     *   admin: administrator
     *   dev: developer
     *
     * @example dev
     *
     * @var string
     */
    public $roleType;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'roleName'     => 'RoleName',
        'roleType'     => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
