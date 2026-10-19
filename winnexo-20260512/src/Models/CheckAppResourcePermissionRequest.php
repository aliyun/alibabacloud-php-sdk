<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CheckAppResourcePermissionRequest extends Model
{
    /**
     * @var string
     */
    public $permission;

    /**
     * @var string
     */
    public $resourceKey;

    /**
     * @var string
     */
    public $resourceTenantId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $targetUserId;

    /**
     * @var string
     */
    public $targetUserTenantId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'permission' => 'permission',
        'resourceKey' => 'resourceKey',
        'resourceTenantId' => 'resourceTenantId',
        'resourceType' => 'resourceType',
        'targetUserId' => 'targetUserId',
        'targetUserTenantId' => 'targetUserTenantId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permission) {
            $res['permission'] = $this->permission;
        }

        if (null !== $this->resourceKey) {
            $res['resourceKey'] = $this->resourceKey;
        }

        if (null !== $this->resourceTenantId) {
            $res['resourceTenantId'] = $this->resourceTenantId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->targetUserId) {
            $res['targetUserId'] = $this->targetUserId;
        }

        if (null !== $this->targetUserTenantId) {
            $res['targetUserTenantId'] = $this->targetUserTenantId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['permission'])) {
            $model->permission = $map['permission'];
        }

        if (isset($map['resourceKey'])) {
            $model->resourceKey = $map['resourceKey'];
        }

        if (isset($map['resourceTenantId'])) {
            $model->resourceTenantId = $map['resourceTenantId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['targetUserId'])) {
            $model->targetUserId = $map['targetUserId'];
        }

        if (isset($map['targetUserTenantId'])) {
            $model->targetUserTenantId = $map['targetUserTenantId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
