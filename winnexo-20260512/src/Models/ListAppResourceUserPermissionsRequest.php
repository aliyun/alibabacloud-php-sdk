<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ListAppResourceUserPermissionsRequest extends Model
{
    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $resourceKeyPrefix;

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
        'page' => 'page',
        'pageSize' => 'pageSize',
        'permissions' => 'permissions',
        'resourceKeyPrefix' => 'resourceKeyPrefix',
        'resourceTenantId' => 'resourceTenantId',
        'resourceType' => 'resourceType',
        'targetUserId' => 'targetUserId',
        'targetUserTenantId' => 'targetUserTenantId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->permissions)) {
            Model::validateArray($this->permissions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->permissions) {
            if (\is_array($this->permissions)) {
                $res['permissions'] = [];
                $n1 = 0;
                foreach ($this->permissions as $item1) {
                    $res['permissions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceKeyPrefix) {
            $res['resourceKeyPrefix'] = $this->resourceKeyPrefix;
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
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['permissions'])) {
            if (!empty($map['permissions'])) {
                $model->permissions = [];
                $n1 = 0;
                foreach ($map['permissions'] as $item1) {
                    $model->permissions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resourceKeyPrefix'])) {
            $model->resourceKeyPrefix = $map['resourceKeyPrefix'];
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
