<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\RegisterAppResourcePermissionsResponseBody;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $expireAt;

    /**
     * @var string
     */
    public $grantedBy;

    /**
     * @var string
     */
    public $granteeId;

    /**
     * @var string
     */
    public $granteeName;

    /**
     * @var string
     */
    public $granteeTenantId;

    /**
     * @var string
     */
    public $granteeType;

    /**
     * @var string
     */
    public $permission;

    /**
     * @var int
     */
    public $permissionId;

    /**
     * @var string
     */
    public $resourceKey;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'expireAt' => 'expireAt',
        'grantedBy' => 'grantedBy',
        'granteeId' => 'granteeId',
        'granteeName' => 'granteeName',
        'granteeTenantId' => 'granteeTenantId',
        'granteeType' => 'granteeType',
        'permission' => 'permission',
        'permissionId' => 'permissionId',
        'resourceKey' => 'resourceKey',
        'resourceType' => 'resourceType',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->expireAt) {
            $res['expireAt'] = $this->expireAt;
        }

        if (null !== $this->grantedBy) {
            $res['grantedBy'] = $this->grantedBy;
        }

        if (null !== $this->granteeId) {
            $res['granteeId'] = $this->granteeId;
        }

        if (null !== $this->granteeName) {
            $res['granteeName'] = $this->granteeName;
        }

        if (null !== $this->granteeTenantId) {
            $res['granteeTenantId'] = $this->granteeTenantId;
        }

        if (null !== $this->granteeType) {
            $res['granteeType'] = $this->granteeType;
        }

        if (null !== $this->permission) {
            $res['permission'] = $this->permission;
        }

        if (null !== $this->permissionId) {
            $res['permissionId'] = $this->permissionId;
        }

        if (null !== $this->resourceKey) {
            $res['resourceKey'] = $this->resourceKey;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['expireAt'])) {
            $model->expireAt = $map['expireAt'];
        }

        if (isset($map['grantedBy'])) {
            $model->grantedBy = $map['grantedBy'];
        }

        if (isset($map['granteeId'])) {
            $model->granteeId = $map['granteeId'];
        }

        if (isset($map['granteeName'])) {
            $model->granteeName = $map['granteeName'];
        }

        if (isset($map['granteeTenantId'])) {
            $model->granteeTenantId = $map['granteeTenantId'];
        }

        if (isset($map['granteeType'])) {
            $model->granteeType = $map['granteeType'];
        }

        if (isset($map['permission'])) {
            $model->permission = $map['permission'];
        }

        if (isset($map['permissionId'])) {
            $model->permissionId = $map['permissionId'];
        }

        if (isset($map['resourceKey'])) {
            $model->resourceKey = $map['resourceKey'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
