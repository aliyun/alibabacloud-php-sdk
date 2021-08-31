<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616\Models;

use AlibabaCloud\Tea\Model;

class AssignResourcesToPermissionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $permissionId;

    /**
     * @var string
     */
    public $permissionCode;

    /**
     * @var string
     */
    public $resourceCodesShrink;

    /**
     * @var string
     */
    public $resourceIdsShrink;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'requestId'           => 'RequestId',
        'permissionId'        => 'PermissionId',
        'permissionCode'      => 'PermissionCode',
        'resourceCodesShrink' => 'ResourceCodes',
        'resourceIdsShrink'   => 'ResourceIds',
        'tenantId'            => 'TenantId',
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
        if (null !== $this->permissionId) {
            $res['PermissionId'] = $this->permissionId;
        }
        if (null !== $this->permissionCode) {
            $res['PermissionCode'] = $this->permissionCode;
        }
        if (null !== $this->resourceCodesShrink) {
            $res['ResourceCodes'] = $this->resourceCodesShrink;
        }
        if (null !== $this->resourceIdsShrink) {
            $res['ResourceIds'] = $this->resourceIdsShrink;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignResourcesToPermissionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PermissionId'])) {
            $model->permissionId = $map['PermissionId'];
        }
        if (isset($map['PermissionCode'])) {
            $model->permissionCode = $map['PermissionCode'];
        }
        if (isset($map['ResourceCodes'])) {
            $model->resourceCodesShrink = $map['ResourceCodes'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIdsShrink = $map['ResourceIds'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
